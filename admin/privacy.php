<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

$privacy = runFatch("SELECT * FROM tbl_privacy");
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Privacy Policy</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Privacy Policy</li>
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

                    <form id="privacy_submit">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Privacy Policy Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$privacy[0]['id'] ?>">

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Privacy Policy <span class="login-danger">*</span></label>
                                    <textarea name="privacy_policy" class="form-control" id="summernote" placeholder="Privacy Policy"><?= @$privacy[0]['privacy_policy'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Terms And Conditions <span class="login-danger">*</span></label>
                                    <textarea name="terms_condition" class="form-control"id="summernote3" placeholder="Terms And Conditions"><?= @$privacy[0]['terms_condition'] ?></textarea>
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