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
                        <h3 class="page-title">users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">users</li>
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

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_users = runFatch("SELECT * FROM tbl_users ORDER BY id DESC");
                                $count = 1;
                                if ($select_users) {
                                    foreach ($select_users as $users) {
                                ?>
                                        <tr id="removeusersDelete_<?= @$users['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td><?= @$users['name'] ?></td>
                                            <td><?= @$users['phone'] ?></td>
                                            <td><?= @$users['subject'] ?></td>
                                            <td><?= @$users['users_date'] ?></td>
                                            <td><?= @$users['message'] ?></td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteusers" data-files="" data-remove="#removeusersDelete_<?= @$users['id'] ?>" data-collection="users" data-ref_id="<?= @$users['id'] ?>"> <i class="feather-trash"></i></a>
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