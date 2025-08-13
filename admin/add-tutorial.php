<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['tutorial_id']) && !empty($_GET['tutorial_id'])) {
    $tutorial_id = $_GET['tutorial_id'];

    $select_tutorial = runFatch("SELECT * FROM tbl_tutorial WHERE id = '{$tutorial_id}'");
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
                        <h3 class="page-title">Tutorial <?= @$tutorial_id ? 'Edit' : 'Add' ?></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./tutorial.php">Tutorial</a></li>
                            <li class="breadcrumb-item active">Tutorial <?= @$tutorial_id ? 'Edit' : 'Add' ?></li>
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
                    <form id="submit_tutorial">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Tutorial Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_tutorial[0]['id'] ?>">
                           
                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Class <span class="text-danger">*</span></label>
                                    <select name="class_id" class="form-control">
                                        <option value="">Select Class</option>
                                        <?php
                                        $select_class = runFatch("SELECT * FROM tbl_class ORDER BY title ASC");
                                        if ($select_class) {
                                            foreach ($select_class as $class) {
                                                $selected = @$select_tutorial[0]['class_id'] == $class['id'] ? "selected" : "";
                                        ?>
                                                <option value="<?= $class['id'] ?>" <?= $selected ?>><?= $class['title'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Tutorial Title <span class="login-danger">*</span></label>
                                    <input name="title" type="text" class="form-control" placeholder="Enter Tutorial Title" value="<?= @$select_tutorial[0]['title'] ?>">
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="hidden" name="hidden_video" value="<?= @$select_tutorial[0]['video'] ?>">

                                <label for="video" class="mb-1">Video <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox" ondragover="dragVideo(event)" ondrop="dropVideo(event)">
                                        Drag and Drop Video here
                                        <input type="file" name="video" onchange="dragNdropVideo(event)" id="uploadFileVideo" accept="video/*" />
                                    </span>
                                </div>
                                <div id="previewVideo" class="text-center">
                                    <?php if (isset($select_tutorial[0]['video']) && !empty($select_tutorial[0]['video'])) { ?>
                                        <video src="../upload/<?= @$select_tutorial[0]['video'] ?>" controls width="600" height="400"></video>
                                    <?php } else { ?>
                                        <img src="./assets/img/demo.png" alt="image-preview" width="600" height="300">
                                    <?php } ?>
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