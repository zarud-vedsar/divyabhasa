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
                        <h3 class="page-title">Trainer</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Trainer</li>
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
                        <a href="./add-trainer.php" class="btn btn-primary">Add Trainer</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Trainer</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Adress</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_trainer = runFatch("SELECT tbl_trainer.*, tbl_cities.city AS city_name, tbl_states.name AS state_name 
                                                                FROM tbl_trainer 
                                                                INNER JOIN tbl_states ON tbl_trainer.state_id = tbl_states.id
                                                                INNER JOIN tbl_cities ON tbl_trainer.city_id = tbl_cities.id
                                                                ORDER BY id DESC");
                                $count = 1;
                                if ($select_trainer) {
                                    foreach ($select_trainer as $trainer) {
                                ?>
                                        <tr id="removeTrainerDelete_<?= @$trainer['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="../upload/<?= @$trainer['profile'] ?>" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../upload/<?= @$trainer['profile'] ?>" alt="User Image" style="height: 40px;"></a>
                                                    <a href="#!" class="text-dark"><?= @$trainer['name'] ?></a>
                                                </div>
                                                
                                            </td>
                                            <td><?= @$trainer['phone'] ?></td>
                                            <td><?= @$trainer['email'] ?></td>
                                            <td><?= @$trainer['address'] ?>, <br> <?= @$trainer['zip_code'] ?>, <?= @$trainer['city_name'] ?>, <?= @$trainer['state_name'] ?>, INDIA.</td>

                                            <td>
                                                <div class="d-flex align-items-center pt-3">
                                                    <input type="checkbox" id="switch<?= $count ?>" <?php if (@$trainer['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="trainer" data-ref_id="<?= @$trainer['id'] ?>" class="statusTrainer" />
                                                    <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./add-trainer.php?trainer_id=<?= @$trainer['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteTrainer" data-files="profile" data-remove="#removeTrainerDelete_<?= @$trainer['id'] ?>" data-collection="trainer" data-ref_id="<?= @$trainer['id'] ?>"> <i class="feather-trash"></i></a>
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