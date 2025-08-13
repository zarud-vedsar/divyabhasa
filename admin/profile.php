<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['admin_id']) && !empty($_GET['admin_id'])) {
	$admin_id = $_GET['admin_id'];

	$select_user = runFatch("SELECT * FROM `tbl_users` WHERE `id` = '{$admin_id}'");
}
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <?php
								$profile = @$select_user[0]['profile'];

								if ($profile) {
								?>
                                <img class="rounded-circle" alt="User Image" src="../upload/<?= $profile ?>">
                                <?php
								} else {
								?>
                                <img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                <?php
								}
								?>
                            </a>
                        </div>
                        <div class="col ms-md-n2 profile-user-info">
                            <h4 class="user-name mb-0">
                                <?= @$select_user[0]['name'] ?>
                            </h4>
                        </div>
                        <!-- <div class="col-auto profile-btn">
							<a href="./admin_update.php?user_id=<?= @$select_user[0]['id'] ?>" class="btn btn-primary">
								Edit
							</a>
						</div> -->
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#batch_detail">Batches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#asigned_batch_detail">Assigned Batch</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">

                    <!-- Personal Details Tab -->
                    <div class="tab-pane fade  show active" id="per_details_tab">

                        <!-- Personal Details -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                            <!-- <a class="edit-link" href="./admin_update.php?user_id=<?= @$select_user[0]['id'] ?>"><i class="far fa-edit me-1"></i>Edit</a> -->
                                        </h5>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                            <p class="col-sm-9">
                                                <?= @$select_user[0]['name'] ?>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                            <p class="col-sm-9"><a href="#">
                                                    <?= @$select_user[0]['username'] ?>
                                                </a></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                            <p class="col-sm-9">
                                                <?= @$select_user[0]['phone'] ?>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                            <p class="col-sm-9 mb-0">
                                                <?= @$select_user[0]['address'] ?><br>
                                                <?= @$select_user[0]['city'] ?><br>
                                                <?php
												$state_id = @$select_user[0]['state'];
												$select_state = runFatch("SELECT * FROM tbl_states WHERE id = {$state_id}");
												echo @$select_state[0]['name'];
												?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Personal Details -->

                    </div>
                    <!-- /Personal Details Tab -->

                    <!-- Batch Detail Tab  -->
                    <div class="tab-pane fade " id="batch_detail">

                        <!-- Personal Details -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Asssign New Batch</span>

                                        </h5>

                                    </div>

                                    <?php
									$classes = runFatch("SELECT `title`,`id` FROM `tbl_class` WHERE `status`=1");
									$time=  date('Y-m-d');
									?>

                                    <form class="row  px-5" id="asign_batch">
                                        <input type="hidden" name="user_id" value=<?=$admin_id ?>>
                                        <div class="form-group col-md-6">
                                            <label for="name">Select Batch</label>
                                            <select class="form-select" name="class" id="class">
                                                <option value="">Select</option>
                                                <?php  foreach($classes as $class) { ?>
                                                <option value="<?= $class['id'] ?>">
                                                    <?= $class['title']  ?>
                                                </option>

                                                <?php } ?>


                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Valid Up-to</label>
                                            <input type="date" class="form-control" id="valid_till" min="<?= @$time ?>"
                                                name="valid_till" placeholder="Enter valid till" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /Personal Details -->

                    </div>
                    <!-- Batch Detail Tab  -->


                    <!-- Asigned Batch Detail Tab  -->
                    <div class="tab-pane fade " id="asigned_batch_detail">

                        <!-- Personal Details -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Asssigned Batch</span>

                                        </h5>

                                    </div>
                                    <!-- @$select_user[0]['id'] -->


                                    <?php

                                    $user_id=$select_user[0]['id'];
									$asigned_batch = runFatch("SELECT  zarud_batch.id, zarud_batch.status ,zarud_batch.enrolledDate,zarud_batch.validtill, tbl_class.image ,tbl_class.title FROM zarud_batch JOIN tbl_class ON tbl_class.id = zarud_batch.classid WHERE zarud_batch.userid={$user_id}");
				   			     // $time=  date('Y-m-d');
                                    // print_r($asigned_batch);

                                
                                    if ($asigned_batch) {
                                       foreach ($asigned_batch as $batch) {
                                 
                                   
									?>



                                    <div class="asigned-classes">
                                        <div class="thumbnail">
                                            <img src="../upload/<?= $batch['image']; ?>" alt="class thumbnail">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <?= $batch['title']; ?>
                                            </div>
                                            <div class="asigned-date">
                                                <b>Enrollment Date: </b>
                                                <span>
                                                    <?= date('d M Y', strtotime( $batch['enrolledDate'])); ?>
                                                </span>
                                            </div>
                                            <div class="validity">
                                                <b>Validity: </b>
                                                <?= date('d M Y', strtotime( $batch['validtill'])); ?>
                                                <div class="dropend d-inline">
                                                    <button data-bs-toggle="dropdown"
                                                        aria-expanded="false" type="button"
                                                        class="btn btn-primary btn-sm ms-4">
                                                        Update Validity
                                                    </button>

                                                    <div class="dropdown-menu">
                                                         <form class="p-2 validity_change">
                                                            <input type="date" class="my-2" value="<?= date('Y-m-d', strtotime($batch['validtill']))?>" name="new_validity">
                                                            <input type="hidden" value="<?= $batch['id']?>" name="cls_id">  
                                                            <button class="my-2 btn btn-danger btn-sm"  type="submit">Change Vallidity</button>
                                                         </form>
                                                    </div>
                                                 </div>



                                            </div>
                                       
                                    <div class="status">
                                        <?php

                                        
                                                if($batch['status']=='0'){
                                                   echo '<span class="badge text-bg-success">Active </span>';
                                                  
                                                }else{
                                                    echo '<span class="badge text-bg-danger">Expired</span>';
                                                   
                                                }


                                                ?>
                                    </div>



                                </div>
                            </div>

                            <?php 
                                      }
                                    }
                                   ?>


                        </div>
                    </div>
                </div>
                <!-- /Personal Details -->

            </div>
            <!-- Asigned Batch Detail Tab  -->

        </div>
    </div>
</div>




<?php
	require "./inc/footer.php";
	require "./inc/script.php";
	?>


<script>


var validity_change=document.getElementsByClassName('validity_change')

Array.from(validity_change).forEach(element => {
    element.addEventListener('submit',(e)=>{
     e.preventDefault();
     new_validity=e.target.elements[0];
     cls_id=e.target.elements[1];
     
   
    let formData = new FormData();
    formData.append('new_validity',new_validity.value);
    formData.append( 'cls_id', cls_id.value);
   

     $.ajax({
        url: 'inc/config/validity_change.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                setTimeout(function () {
                    window.location.reload();
                }, 1500);
                swamsg.success(res.msg);
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
  });
});

</script>