<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['faq_id']) && !empty($_GET['faq_id'])) {
    $faq_id = $_GET['faq_id'];

    $select_faq = runFatch("SELECT * FROM tbl_faq WHERE id = '{$faq_id}'");
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
                        <h3 class="page-title">FAQ Edit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./faq.php">FAQ</a></li>
                            <li class="breadcrumb-item active">FAQ Add/Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <form id="faq_submit">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">FAQ Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_faq[0]['id'] ?>">


                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Question <span class="login-danger">*</span></label>
                                    <input name="que" type="text" class="form-control" placeholder="Enter Question" value="<?= @$select_faq[0]['que'] ?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Answer <span class="login-danger">*</span></label>
                                    <textarea name="ans" class="form-control" placeholder="Enter Answer"><?= @$select_faq[0]['ans'] ?></textarea>
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