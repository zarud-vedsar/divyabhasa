<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
	$user_id = $_GET['user_id'];

	$select_user = runFatch("SELECT * FROM tbl_users WHERE id = '{$user_id}'");
}
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Class Purchase History</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="./index.php">Home</a></li>
						<li class="breadcrumb-item active">Class Purchase History</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table" id="myTable">
								<thead>
									<tr>
										<th>#</th>
										<th>Class(Amount)</th>
										<th>Student</th>
										<!-- <th>Txn Id</th>
										<th>Screenshot</th> -->
										<th>Status</th>
										<th>Request Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$planHistory = runFatch("SELECT zarud_membership_purchase.*, tbl_users.name AS studentname,  tbl_class.title as classname FROM zarud_membership_purchase JOIN tbl_class ON tbl_class.id= zarud_membership_purchase.class_id JOIN tbl_users ON tbl_users.id = zarud_membership_purchase.userid WHERE zarud_membership_purchase.status = 0 ORDER BY zarud_membership_purchase.id DESC");
									if ($planHistory) {
										$sr = 1;
										foreach ($planHistory as $plh) {
									?>
											<tr>
												<td><?= $sr;
													$sr++; ?></td>
												<td><?= $plh['classname']."(".$plh['amount'] . ")" ?></td>
												<td><?= $plh['studentname'] ; ?></td>
												<!-- <td><?= $plh['txnid']; ?></td>
												<td>
													<a href="../upload/<?= $plh['file']; ?>" target="_blank"><img src="../upload/<?= $plh['file']; ?>" style="width:100px;"></a>
												</td> -->
												<td>
													<?php
													if ($plh['status'] == 0) {
														echo "<span class='badge badge-warning'>Pending</span>";
													}
													if ($plh['status'] == 1) {
														echo "<span class='badge badge-success'>Approved</span>";
													}
													if ($plh['status'] == 2) {
														echo "<span class='badge badge-danger'>Reject</span>";
													}
													?>
												</td>
												<td><?= date('F d, Y', strtotime($plh['requestDate'])); ?></td>
												<td>
													<button id="accept" data-id="<?= $plh['id']; ?>" class="btn btn-success">Accept</button>
													<button id="reject" data-id="<?= $plh['id']; ?>" class="btn btn-danger">Reject</button>
												</td>
											</tr>
									<?php }
									} ?>
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
	const reject = document.getElementById('reject');
	reject.addEventListener('click', function(e) {
		const id = this.getAttribute('data-id');
		const parent = this.closest('tr');
		if (id) {
			async function reject() {
				const {
					value: text
				} = await Swal.fire({
					input: "textarea",
					inputLabel: "Message",
					inputPlaceholder: "Type your message here...",
					inputAttributes: {
						"aria-label": "Type your message here"
					},
					showCancelButton: true
				});
				if (text) {
					$.ajax({
						url: './inc/config/reject-zarud-member.php',
						type: 'POST',
						data: {
							id,
							text
						},
						success: (res) => {
							let json = JSON.parse(res);
							console.log(json);
							
							if (json.status == 200) {
								parent.remove();
								swamsg.success(json.msg);
							} else {
								swamsg.error(json.msg);
							}
						}
					})

				}
			}
			reject(id, parent);
		}
	});
	const accept = document.getElementById('accept');
	accept.addEventListener('click', function(e) {
		const id = this.getAttribute('data-id');
		const parent = this.closest('tr');
		if (id) {
			async function accept() {
				const {
					value: text
				} = await Swal.fire({
					input: "textarea",
					inputValue: 'Approved',
					inputLabel: "Message",
					inputPlaceholder: "Type your message here...",
					inputAttributes: {
						"aria-label": "Type your message here"
					},
					showCancelButton: true
				});
				if (text) {
					$.ajax({
						url: './inc/config/accept-zarud-member.php',
						type: 'POST',
						data: {
							id,
							text
						},
						success: (res) => {
							let json = JSON.parse(res);
							if (json.status == 200) {
								parent.remove();
								swamsg.success(json.msg);
							} else {
								swamsg.error(json.msg);
							}
						}
					})

				}
			}
			accept(id, parent);
		}

	});
</script>