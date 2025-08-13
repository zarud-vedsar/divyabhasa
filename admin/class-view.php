<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>
<style>
    .class-details {
        /* Overall container for better styling */
        background-color: #f8f8f8;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .class-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .class-image {
        border: 1px solid #ccc;
        border-radius: 5px;
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
                        <h3 class="page-title">Class View</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home </a></li>
                            <li class="breadcrumb-item active">Class View</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <?php

        if (isset($_GET['class_id']) && !empty($_GET['class_id'])) {
            $id = filter($_GET['class_id']);

            $sql = "SELECT * FROM `tbl_class` WHERE `id`='$id'";
            $result = runFatch($sql);

            $class = $result[0];
        }
        ?>
        <!-- Overview Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="text-end mb-4">
                        <a href="./add-topic.php?cid=<?= @$id ?>" class="btn btn-primary">Add Topic</a>
                    </div>

                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <img src="../upload/<?= $class['image'] ?>" alt="class image" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h2>Class Title: <?= $class['title'] ?></h2>
                                <p><strong>Class Timing:</strong> <?= date('h:i A', strtotime($class['start_time'])) . " To " . date('h:i A', strtotime($class['end_time'])) ?></p>
                                <p><strong>Start Date:</strong> <?= $class['start_date'] ?></p>
                                <p><strong>End Date:</strong> <?= $class['end_date'] ?></p>
                                <p><strong>Class Fee:</strong> <?= $class['class_fee'] ?></p>
                                <p><strong>Class Description:</strong> <?= $class['desc'] ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="page-title mb-4">Playlist</h3>
                <div class="row">
                    <?php
                    $select_tutorial = runFatch("SELECT * FROM tbl_tutorial WHERE class_id = '$id'");
                    if ($select_tutorial) {
                        foreach ($select_tutorial as $tutorial) {
                    ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <iframe id="video_iframe" style="width: 100%; height: 200px;" src="<?= @$select_tutorial[0]['video'] ?>" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                        <h5 class="mt-3"><?= $tutorial['title'] ?></h5>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>