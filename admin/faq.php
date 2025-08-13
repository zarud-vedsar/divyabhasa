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
                        <h3 class="page-title">FAQ</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">FAQ</li>
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
                        <a href="./add-faq.php" class="btn btn-primary">Add FAQ</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_faq = runFatch("SELECT * FROM tbl_faq ORDER BY id DESC");
                                $count = 1;
                                if ($select_faq) {
                                    foreach ($select_faq as $faq) {
                                ?>
                                        <tr id="removeFaqDelete_<?= @$faq['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td><?= substr(@$faq['que'],0,20).'...' ?></td>
                                            <td><?= substr(@$faq['ans'],0,20).'...' ?></td>

                                            <td class="d-flex align-items-center pt-3">
                                                <div>
                                                    <input type="checkbox" id="switch<?= $count ?>" <?php if (@$faq['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="faq" data-ref_id="<?= @$faq['id'] ?>" class="statusFaq" />
                                                    <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./add-faq.php?faq_id=<?= @$faq['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteFaq" data-files="" data-remove="#removefaqDelete_<?= @$faq['id'] ?>" data-collection="faq" data-ref_id="<?= @$faq['id'] ?>"> <i class="feather-trash"></i></a>
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