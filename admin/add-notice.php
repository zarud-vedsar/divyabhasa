<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if(isset($_GET['notice_id']) && !empty($_GET['notice_id'])){
    $notice_id = filter($_GET['notice_id']);

    $select_notice = runFatch("SELECT * FROM tbl_notice WHERE id = '$notice_id'");
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
                        <h3 class="page-title">Notice Add/Edit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Notice Add/Edit</li>
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

                    <form id="notice_submit">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Notice Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_notice[0]['id'] ?>">

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Title <span class="login-danger">*</span></label>
                                    <input name="title" type="text" class="form-control" placeholder="Title" value="<?= @$select_notice[0]['title'] ?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Notice Type <span class="login-danger">*</span></label>
                                    <select name="notice_type" class="form-control">
                                        <option value="">Select Notice Type</option>
                                        <option <?= @$select_notice[0]['notice_type'] == 'All' ? 'selected' : '' ?> value="All">All</option>
                                        <option <?= @$select_notice[0]['notice_type'] == 'Student' ? 'selected' : '' ?> value="Student">Student</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Description <span class="login-danger">*</span></label>
                                    <textarea name="des" class="form-control" placeholder="Description"><?= @$select_notice[0]['des'] ?></textarea>
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