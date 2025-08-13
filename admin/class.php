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
                        <h3 class="page-title">Class</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Class</li>
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
                        <a href="./add-class.php" class="btn btn-primary">Add Class</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Image</th>
                                    <th>Class Title</th>
                                    <th>Batch Date</th>
                                    <th>Batch Time</th>
                                    <th>Total Intake</th>
                                    <th>Class Fee</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_class = runFatch("SELECT * FROM tbl_class
                                                                ORDER BY id DESC");
                                $count = 1;
                                if ($select_class) {
                                    foreach ($select_class as $class) {
                                ?>
                                        <tr id="removeClassDelete_<?= @$class['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="../upload/<?= @$class['image'] ?>" class=""><img class="img img-responsive" src="../upload/<?= @$class['image'] ?>" alt="Class Image" style="height:100px;"></a>
                                                </div>
                                                
                                            </td>
                                            <td><?= @$class['title'] ?></td>
                                            <td><?= date('d/m/Y', strtotime($class['start_date'])) . " To "  . date('d/m/Y', strtotime($class['end_date'])) ?></td>
                                            <td><?= date('h:i A', strtotime($class['start_time'])) . " To " . date('h:i A', strtotime($class['end_time'])) ?></td>
                                            <td><?= @$class['student_capacity'] . " Students" ?></td>
                                            <td><?= @$class['class_fee']  ?></td>

                                            <td>
                                                <div class="d-flex align-items-center pt-3">
                                                    <input type="checkbox" id="switch<?= $count ?>" <?php if (@$class['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="class" data-ref_id="<?= @$class['id'] ?>" class="statusClass" />
                                                    <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./class-view.php?class_id=<?= @$class['id'] ?>" class="btn btn-sm bg-danger-light" title="View">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="./add-class.php?class_id=<?= @$class['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteClass" data-files="image" data-remove="#removeClassDelete_<?= @$class['id'] ?>" data-collection="class" data-ref_id="<?= @$class['id'] ?>"> <i class="feather-trash"></i></a>
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