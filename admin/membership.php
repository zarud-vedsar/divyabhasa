<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

$select_membership = runFatch("SELECT * FROM tbl_membership");
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Membership</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Membership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="col-md-6 mx-auto">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <form id="membership_submit">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Membership Information</h5>
                                </div>

                                <input type="hidden" name="hidden_id" value="<?= @$select_membership[0]['id'] ?>">

                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Duration (in month) <span class="login-danger">*</span></label>
                                        <input name="duration" type="number" class="form-control" placeholder="Duration" value="<?= @$select_membership[0]['duration'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Price <span class="login-danger">*</span></label>
                                        <input name="price" type="number" class="form-control" placeholder="Price" value="<?= @$select_membership[0]['price'] ?>">
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
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>