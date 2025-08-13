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
                        <h3 class="page-title">Notice</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Notice</li>
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
                        <a href="./add-notice.php" class="btn btn-primary"><i class="fas fa-edit"></i> Add Notice</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_notice = runFatch("SELECT * FROM tbl_notice ORDER BY id DESC");
                                $count = 1;
                                if ($select_notice) {
                                    foreach ($select_notice as $notice) {
                                ?>
                                        <tr id="removeNoticeDelete_<?= @$notice['id'] ?>">
                                            <td><?= $count++ ?></td>                                            
                                            <td><?= @$notice['title'] ?></td>
                                            <td><?= @$notice['notice_type'] ?></td>
                                            <td><?= substr(@$notice['des'],0, 15) ?>...</td>
                                            <td class="d-flex align-items-center pt-3">
                                                <input type="checkbox" id="switch<?= $count ?>" <?php if (@$notice['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="notice" data-ref_id="<?= @$notice['id'] ?>" class="statusNotice" />
                                                <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./add-notice.php?notice_id=<?= @$notice['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteNotice" data-files="image" data-remove="#removeNoticeDelete_<?= @$notice['id'] ?>" data-collection="notice" data-ref_id="<?= @$notice['id'] ?>"> <i class="feather-trash"></i></a>
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