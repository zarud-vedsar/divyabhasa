<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

$sql_classes="SELECT * FROM `tbl_class`  WHERE `status` = '1' ORDER BY RAND()  ";
        $classes=runFatch($sql_classes);
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Classes</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="./index.php">Karpan</a></li>
						<li class="breadcrumb-item active">Classes</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-md-12">
				
				
				<div class="tab-content profile-tab-cont">

					<!-- Personal Details Tab -->
					<div class="tab-pane fade show active" >

						<!-- Personal Details -->
						<div class="row">
						<?php
                    
							foreach($classes as $class){               

						?>

							<div class="col-sm-6 col-md-4 mb-3">
								<div class="class-items bg-white border-1px p-20">
									<div class="thumb">
										<img class="w-100" src="../upload/<?= $class['image']; ?>" alt>
										<div class="viewtime">
											<!-- <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Details</a> -->
										</div>
									</div>
									<h3 class>
										<a href="#"><span class="text-theme-colored"><?= $class['student_capacity']." Students"  ?> </span> | <?= $class['title'] ?></a>
									</h3>
									<div class="class-date mb-10"><i class="far fa-calendar"></i> <em> <?= date('d-m-Y', strtotime($class['start_date'])) . " To "  . date('d-m-Y', strtotime($class['end_date'])) ?></em></div>
									<div class="class-date"><i class="fal fa-clock"></i> <em><?= date('h:i A', strtotime($class['start_time'])) . " To " . date('h:i A', strtotime($class['end_time'])) ?> </em></div>
								</div>
							</div>





							
						<?php
							}
						?>
						</div>
						<!-- /Personal Details -->

					</div>
					<!-- /Personal Details Tab -->
				</div>
			</div>
		</div>

	</div>


	<?php
	require "./inc/footer.php";
	require "./inc/script.php";
	?>