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
                        <h3 class="page-title">Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                                    <th>User</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Adress</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_user = runFatch("SELECT * FROM tbl_users ORDER BY id DESC");
                                $count = 1;
                                if ($select_user) {
                                    foreach ($select_user as $user) {
                                ?>
                                        <tr id="removeUserDelete_<?= @$user['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#!" class="text-dark"><?= @$user['name'] ?></a>
                                                </div>

                                            </td>
                                            <td><?= @$user['phone'] ?></td>
                                            <td><?= @$user['email'] ?></td>
                                            <td><?= @$user['address'] ?>, <br> <?= @$user['zip_code'] ?>, <?= @$user['city_name'] ?>, <?= @$user['state_name'] ?>, INDIA.</td>

                                            <td>
                                                <div class="d-flex align-items-center pt-3">
                                                    <input type="checkbox" id="switch<?= $count ?>" <?php if (@$user['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="users" data-ref_id="<?= @$user['id'] ?>" class="statusUser" />
                                                    <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteUser" data-files="<?= @$user['profile'] ? 'profile' : '' ?>" data-remove="#removeUserDelete_<?= @$user['id'] ?>" data-collection="users" data-ref_id="<?= @$user['id'] ?>"> <i class="feather-trash"></i></a>
                                                    <a href="./profile.php?admin_id=<?= @$user['id'] ?>" title="View" class="btn btn-sm bg-danger-light "  > <i class="feather-eye"></i></a>
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