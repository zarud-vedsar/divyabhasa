<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

?>
<style>
	  @media screen and (min-width:0px) and (max-width: 950px) {
        .page-wrapper {
    padding-top: 0px;
}
.page-wrapper>.content {
        padding:0px;
    }
    .m-dflex{
        display:flex !important;

    }

    .page-title {
    margin-bottom: 0px;
}
.naruko-main-content {
    padding: 61px 10px 100px 10px;
}
     }
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Membership Purchase History</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="./index.php">Home</a></li>
						<li class="breadcrumb-item active">Membership Plan History</li>
					</ul>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
				<div class="table-responsive">
				<table class="table datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Amount</th>
							<th>Class</th>
							
							<th>Status</th>
							<th>Request Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$planHistory = runFatch("SELECT zarud_membership_purchase.*, tbl_class.title as classname FROM zarud_membership_purchase JOIN tbl_class ON tbl_class.id= zarud_membership_purchase.class_id WHERE zarud_membership_purchase.userid = $userid ORDER BY zarud_membership_purchase.id DESC");
						if($planHistory){
							$sr = 1;
							foreach($planHistory as $plh){
								?>
							<tr>
								<td><?= $sr;$sr++;?></td>
								<td><?= $plh['amount'];?></td>
								<td><?= $plh['classname'];?></td>
								<!-- <td><?= $plh['txnid'];?></td>
								<td>
									<a href="../upload/<?= $plh['file'];?>" target="_blank"><img src="../upload/<?= $plh['file'];?>" style="width:100px;"></a>
								</td> -->
								<td>
									<?php
									if($plh['status'] == 0){
										echo "<span class='badge badge-warning'>Pending</span>";
									}
									if($plh['status'] == 1){
										echo "<span class='badge badge-success'>Approved</span>";
									}
									if($plh['status'] == 2){
										echo "<span class='badge badge-danger'>Reject</span>";
									}
									?>
								</td>
								<td><?= date('F d, Y', strtotime($plh['requestDate']));?></td>
							</tr>
						<?php }} ?>
					</tbody>
				</table>
			</div>
				</div>
			</div>
		</div>
	</div>

	</div>
</div>
<?php
	require "./inc/footer.php";
	require "./inc/script.php";
	?>

	<script>
		$('.datatable').DataTable();
	</script>
	
	