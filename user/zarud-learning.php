<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>
<style>
      @media screen and (min-width:0px) and (max-width: 950px) {
        .page-wrapper {
    padding-top: 0px;
}
.page-wrapper>.content {
        padding:0px;
    }
    .m-dflex{
        display:flex !important;

    }

    .page-title {
    margin-bottom: 0px;
}
.naruko-main-content {
    padding: 61px 10px 100px 10px;
}

     }
</style>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">My Learning</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">My Learning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <?php
            $myBatches = runFatch("SELECT * FROM zarud_batch WHERE userid = {$userid} AND status = 0");
            if($myBatches){
                foreach($myBatches AS $batch){
                $classid = $batch['classid'];
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
            } }}
            else{
                echo '<div class="card shadow-lg text-center col-11 mx-auto">
                <div class="card-body">
                    <h5 class="card-title text-danger">No Batch Allotted</h5>
                    <p class="card-text">Currently, there are no batches allotted to you. Please check back later or contact support for assistance.</p>
                    <a href="#" class="btn btn-primary">Contact Support</a>
                </div>
            </div>';
            }?>
    </div>

</div>
<!-- /Overview Section -->
</div>

<?php
require "./inc/footer.php";
require "./inc/script.php";
?>