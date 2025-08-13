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
                        <h3 class="page-title">My Previous Batches</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">My Previous Batches</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <?php
            $previousBatch = runFatch("SELECT * FROM zarud_batch WHERE userid = {$userid} AND status = 1");
            if($previousBatch){
                $classid = $previousBatch[0]['classid'];
            $sql_classes = "SELECT * FROM `tbl_class` WHERE id = {$classid}";
            $classes = runFatch($sql_classes);
            if ($classes) {
                foreach ($classes as $class) {
            ?>
                    <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                        <div class="mine-card">
                            <div class="mine-card-header">
                                <img src="../upload/<?= $class['image']; ?>" alt="" />
                            </div>
                            <div class="mine-card-body">
                                <h4 class="card-h mt-3 line-clamp1"><?= $class['title'] ?></h4>
                                <p class="card-p">
                                    <?= !empty($class['desc']) ? substr($class['desc'], 0, 100) : ''; ?>
                                </p>
                                <div class="user">
                                <a href="./purchase-class.php?type=purchase&cid=<?= $class['id']; ?>" class="btn text-white" style="background:#D0CE7C;">
                                    View Class <i class="fas fa-book"></i>
                                </a>
                                </div>
                                <div class="d-flex w-100 mt-2 justify-content-between align-items-center">
                                    <span style="font-size: 13px;" class="mb-0 mt-2"><small>Start Date:</small> <small class="text-muted"><?= date('F d, Y', strtotime($class['start_date']));?></small></span>
                                    <span style="font-size: 13px;" class="mb-0 mt-2"><small>End Date: </small> <small class="text-muted"><?= date('F d, Y', strtotime($class['end_date']));?></small></span>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                <span style="font-size: 13px;" class="mb-0 mt-2"><small>Start Time:</small> <small class="text-muted"><?= date('h:i a', strtotime($class['start_time']));?></small></span>
                                <span style="font-size: 13px;" class="mb-0 mt-2"><small>End Time: </small> <small class="text-muted"><?= date('h:i a', strtotime($class['end_time']));?></small></span>
                                </div>
                            </div>
                        </div>
        </div>
<?php }
            } }?>
    </div>

</div>
<!-- /Overview Section -->
</div>

<?php
require "./inc/footer.php";
require "./inc/script.php";
?>