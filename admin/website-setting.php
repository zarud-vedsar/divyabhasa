<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

$select_website_setting = runFatch("SELECT * FROM tbl_website_setting");
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Website Setting</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Website Setting</li>
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

                    <form id="website_setting_submit">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Website Setting Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_website_setting[0]['id'] ?>">

                            <div class="col-md-12">
                                <div class="form-group local-forms">
                                    <label>Website Title <span class="login-danger">*</span></label>
                                    <input name="website_title" type="text" class="form-control" placeholder="Website Title" value="<?= @$select_website_setting[0]['website_title'] ?>">
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <input type="hidden" name="hidden_favicon" value="<?= @$select_website_setting[0]['favicon'] ?>">

                                <label for="favicon" class="mb-1">Favicon <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox">
                                        Drag and Drop Favicon here
                                        <input type="file" name="favicon" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()" id="uploadFile" />
                                    </span>
                                </div>
                                <div id="preview">
                                    <?php
                                    if (isset($select_website_setting[0]['favicon']) && !empty($select_website_setting[0]['favicon'])) {
                                    ?>
                                        <img src="../upload/<?= @$select_website_setting[0]['favicon'] ?>" alt="favicon-priview">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="./assets/img/demo.png" alt="favicon-priview">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <input type="hidden" name="hidden_dark_logo" value="<?= @$select_website_setting[0]['dark_logo'] ?>">

                                <label for="dark_logo" class="mb-1">Dark Logo <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox2">
                                        Drag and Drop Dark Logo here
                                        <input type="file" name="dark_logo" onChange="dragNdrop2(event)" ondragover="drag2()" ondrop="drop2()" id="uploadFile2" />
                                    </span>
                                </div>
                                <div id="preview2">
                                    <?php
                                    if (isset($select_website_setting[0]['dark_logo']) && !empty($select_website_setting[0]['dark_logo'])) {
                                    ?>
                                        <img src="../upload/<?= @$select_website_setting[0]['dark_logo'] ?>" alt="logo-priview">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="./assets/img/demo.png" alt="logo-priview">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <input type="hidden" name="hidden_white_logo" value="<?= @$select_website_setting[0]['white_logo'] ?>">

                                <label for="white_logo" class="mb-1">White Logo <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox3">
                                        Drag and Drop White Logo here
                                        <input type="file" name="white_logo" onChange="dragNdrop3(event)" ondragover="drag3()" ondrop="drop3()" id="uploadFile3" />
                                    </span>
                                </div>
                                <div id="preview3">
                                    <?php
                                    if (isset($select_website_setting[0]['white_logo']) && !empty($select_website_setting[0]['white_logo'])) {
                                    ?>
                                        <img src="../upload/<?= @$select_website_setting[0]['white_logo'] ?>" alt="logo-priview" class="bg-dark">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="./assets/img/demo.png" alt="logo-priview">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group local-forms">
                                    <label>Contact <span class="login-danger">*</span></label>
                                    <input name="contact" type="number" class="form-control max_length_10" placeholder="Contact" value="<?= @$select_website_setting[0]['contact'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group local-forms">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input name="email" type="email" class="form-control" placeholder="Email" value="<?= @$select_website_setting[0]['email'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Address <span class="login-danger">*</span></label>
                                    <textarea name="address" class="form-control" placeholder="Address"><?= @$select_website_setting[0]['address'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Map Iframe Src <span class="login-danger">*</span></label>
                                    <textarea name="map_iframe" class="form-control" placeholder="Map Iframe"><?= @$select_website_setting[0]['map_iframe'] ?></textarea>
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