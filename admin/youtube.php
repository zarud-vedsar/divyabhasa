<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Youtube Live</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Youtube</li>
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
                    <div class="text-end mb-4">
                        <a href="./add-youtube.php" class="btn btn-primary">Add Youtube</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Class</th>
                                    <th>Tutorial</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_tutorial = runFatch("SELECT tbl_youtube.*, tbl_class.title AS class_title
                                                            FROM tbl_youtube 
                                                            INNER JOIN tbl_class ON tbl_youtube.class_id = tbl_class.id
                                                            ORDER BY tbl_youtube.id DESC");
                                $count = 1;
                                if ($select_tutorial) {
                                    foreach ($select_tutorial as $tutorial) {
                                ?>
                                        <tr id="removeyoutubeDelete_<?= @$tutorial['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td><?= @$tutorial['class_title'] ?></td>
                                            <td><?= @$tutorial['title'] ?></td>

                                            <td>
                                                <div class="d-flex align-items-center pt-3">
                                                    <input type="checkbox" id="switch<?= $count ?>" <?php if (@$tutorial['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="youtube" data-ref_id="<?= @$tutorial['id'] ?>" class="statusYoutube" />
                                                    <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./add-youtube.php?tutorial_id=<?= @$tutorial['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteyoutube" data-files="video" data-remove="#removeyoutubeDelete_<?= @$tutorial['id'] ?>" data-collection="youtube" data-ref_id="<?= @$tutorial['id'] ?>"> <i class="feather-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
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