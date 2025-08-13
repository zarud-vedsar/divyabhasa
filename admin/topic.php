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
                        <h3 class="page-title">Topic</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Topic</li>
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
                        <a href="./add-topic.php" class="btn btn-primary">Add Topic</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Class</th>
                                    <th>Tutorial</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_tutorial = runFatch("SELECT tbl_tutorial.*, tbl_class.title AS class_title
                                                            FROM tbl_tutorial 
                                                            INNER JOIN tbl_class ON tbl_tutorial.class_id = tbl_class.id
                                                            ORDER BY tbl_tutorial.id DESC");
                                $count = 1;
                                if ($select_tutorial) {
                                    foreach ($select_tutorial as $tutorial) {
                                ?>
                                        <tr id="removeTutorialDelete_<?= @$tutorial['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td><?= @$tutorial['class_title'] ?></td>
                                            <td>
                                                <p style="white-space:wrap;"><?= @$tutorial['title'] ?></p>
                                            </td>
                                            <td>
                                                <p style="white-space:wrap;"><?= (@$tutorial['topic_type']== 1)? "Free": "Paid" ?></p>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center pt-3">
                                                    <input type="checkbox" id="switch<?= $count ?>" <?php if (@$tutorial['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="tutorial" data-ref_id="<?= @$tutorial['id'] ?>" class="statusTutorial" />
                                                    <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./add-topic.php?tutorial_id=<?= @$tutorial['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteTutorial" data-files="video" data-remove="#removeTutorialDelete_<?= @$tutorial['id'] ?>" data-collection="tutorial" data-ref_id="<?= @$tutorial['id'] ?>"> <i class="feather-trash"></i></a>
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