<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['class_id']) && !empty($_GET['class_id'])) {
    $class_id = $_GET['class_id'];

    $select_class = runFatch("SELECT * FROM tbl_class WHERE id = '{$class_id}'");
}
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Class Edit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./class.php">Class</a></li>
                            <li class="breadcrumb-item active">Class Add/Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form id="add_class">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Class Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_class[0]['id'] ?>">

                            <div class="col-12 mb-3">
                                <input type="hidden" name="hidden_image" value="<?= @$select_class[0]['image'] ?>">

                                <label for="image" class="mb-1">Class Image <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox">
                                        Drag and Drop image here
                                        <input type="file" name="image" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()" id="uploadFile" />
                                    </span>
                                </div>
                                <div id="preview">
                                    <?php
                                    if (isset($select_class[0]['image']) && !empty($select_class[0]['image'])) {
                                    ?>
                                        <img src="../upload/<?= @$select_class[0]['image'] ?>" alt="image-priview">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="./assets/img/demo.png" alt="image-priview">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Class Title <span class="login-danger">*</span></label>
                                    <input name="title" type="text" class="form-control" placeholder="Enter Class Title" value="<?= @$select_class[0]['title'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Total Student Intake <span class="login-danger">*</span></label>
                                    <input name="student_capacity" type="number" class="form-control "  value="<?= @$select_class[0]['student_capacity'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Start Date <span class="login-danger">*</span></label>
                                    <input name="start_date" type="date" class="form-control"  value="<?= @$select_class[0]['start_date'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>End Date <span class="login-danger">*</span></label>
                                    <input name="end_date" type="date" class="form-control"  value="<?= @$select_class[0]['end_date'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Start Time <span class="login-danger">*</span></label>
                                    <input name="start_time" type="time" class="form-control "  value="<?= @$select_class[0]['start_time'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>End Time <span class="login-danger">*</span></label>
                                    <input name="end_time" type="time" class="form-control "  value="<?= @$select_class[0]['end_time'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Class Fee <span class="login-danger">*</span></label>
                                    <input name="class_fee" type="number" class="form-control "  value="<?= @$select_class[0]['class_fee'] ?>">
                                </div>
                            </div>

                            

                            

                            <div class="col-md-12 mb-4">
                                <div class="form-group local-forms">
                                    <label>Class Description <span class="login-danger">*</span></label>
                                    <textarea name="desc"  class="form-control" id="desc" ><?= @$select_class[0]['desc'] ?></textarea>
                                </div>
                                
                            </div>

                            

                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>

    