<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>

<style>
    /* slider styles  */
    .slider {
    position: relative;
    max-width: 100%;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    min-width: 100%;
    transition: opacity 1s ease;
}

.slide img {
    width: 100%;
    height: auto;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.7);
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 100;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

.prev:hover, .next:hover {
    background-color: rgba(255, 255, 255, 1);
}

     .m-dflex {
        display:flex;
        justify-content:space-between;
        align-items:center;
     }
     .slider .next, .slider .prev{
        display: none;
    right: 10px;
    background: #dc3545 !important;
    color: #fff !important;
    border-radius: 5px !important;
    width: 30px !important;
}
</style>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">




        <!-- Page Header -->
        <div class="page-header ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <!-- <h3 class="page-title">Welcome </h3> -->
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider">
            <div class="slides">

                <?php

                    $slides=runFatch("SELECT * FROM `tbl_banner` WHERE `status`=1");

                    if($slides){
                        $count=0;
                        foreach($slides as $slide){ $count++ ?>

                    <div class="slide <?= ($count == 1)? 'active':'' ?> "><img src="../upload/<?= $slide['image'] ?>" style="height:210px;border-radius:15px;" alt="Image <?= $count ?>"></div>

                    
                    <?php }
                    }

                ?>
                
                <!-- Add more slides as needed -->
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>

        <script>
            let currentSlide = 0;
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;

            function showSlide(index) {
                if (index >= totalSlides) {
                    currentSlide = 0;
                } else if (index < 0) {
                    currentSlide = totalSlides - 1;
                } else {
                    currentSlide = index;
                }
                const offset = -currentSlide * 100;
                document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
            }

            function moveSlide(direction) {
                showSlide(currentSlide + direction);
            }

            function autoSlide() {
                showSlide(currentSlide + 1);
            }

            let slideInterval = setInterval(autoSlide, 3000); // Change slide every 3 seconds

            document.querySelector('.slider').addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            document.querySelector('.slider').addEventListener('mouseleave', () => {
                slideInterval = setInterval(autoSlide, 3000);
            });
        </script>

        <!-- <h2 class="garud-h2-f mobile-featured-head mt-4">Our Features</h2> -->
        <!-- <div class="naruko-featured mobile-feature">

            <div class="featured-card">
                <div class="ficon live-classficon"><i class="fas fa-chalkboard-teacher"></i></div>
                <div class="ftitle live-class">Live Class</div>
            </div>

            <div class="featured-card">
                <div class="ficon batchesficon"><i class="fas fa-users"></i></div>
                <div class="ftitle batches">Batches</div>
            </div>

            <div class="featured-card">
                <div class="ficon videosficon"><i class="fas fa-video"></i></div>
                <div class="ftitle videos">Videos</div>
            </div>

            <div class="featured-card">
                <div class="ficon live-streamficon"><i class="fas fa-clipboard"></i></div>
                <div class="ftitle live-stream">Notes</div>
            </div>

        </div> -->
        <?php if($user[0]['membership'] == 0){?>
        <!-- <a href="./purchase-membership-plan.php">
            <div class="mt-3 mb-4 flex-column alert alert-danger d-flex justify-content-between align-items-start">
            <div>
    <i class="fas fa-exclamation-circle"></i> Membership inactive. Please buy a plan to continue.
</div>

                <button class="btn btn-info text-white" style="white-space: nowrap;margin-top:12px;">Check Status</button>
            </div>
        </a> -->
        <?php } ?>
        <!-- /Page Header -->
    

         <div class="mb-4 mt-5 m-dflex">
            <div class="">
                <h2 style="font-size: 1.2rem;">Explore Batches</h2>
            </div>
            <div class="text-end">
                <a href="./classes.php" class="btn btn-warning">View All <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="row">
            <?php
            $userid=$user[0]['id'];
            $sql_classes = "SELECT * FROM `tbl_class`  WHERE `status` = 1 AND end_date > CURRENT_DATE() ORDER BY rand() LIMIT 6";
            $classes = runFatch($sql_classes);
            if ($classes) {
                foreach ($classes as $class) {

         $checkEnroll = runFatch("SELECT * FROM zarud_batch WHERE userid = {$userid} AND classid = '{$class["id"]}' AND status='0' ");
                    $show = 'false';
                    if ($checkEnroll) {
                        $show = 'true';
                    }
            ?>
            <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                <div class="mine-card">
                    <div class="mine-card-header">
                        <img src="../upload/<?= $class['image']; ?>" alt="" />
                    </div>
                    <div class="mine-card-body">
                        <span class="tag">Enrollment: <?= $class['student_capacity'] ?>/1</span>
                        <h4 class="card-h mt-3 line-clamp1"><?= $class['title'] ?></h4>
                        <p class="card-p">
                            <?= !empty($class['desc']) ? substr($class['desc'], 0, 100) : ''; ?>
                        </p>
                        <div class="user">
                            <a href="./purchase-class.php?type=purchase&cid=<?= $class['id']; ?>" class="btn text-white"
                                style="background:#D0CE7C;">
                                <?php
                                if ($show=='false') {
                                   echo 'Join Class';
                                
                                }else{
                                    echo 'View Class';
                                }
                                ?>
                               <i class="fas fa-book"></i>
                            </a>
                        </div>
                        <div class="d-flex w-100 mt-2 justify-content-between align-items-center">
                            <span style="font-size: 13px;" class="mb-0 mt-2"><small>Start Date:</small> <small
                                    class="text-muted"><?= date('F d, Y', strtotime($class['start_date']));?></small></span>
                            <span style="font-size: 13px;" class="mb-0 mt-2"><small>End Date: </small> <small
                                    class="text-muted"><?= date('F d, Y', strtotime($class['end_date']));?></small></span>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <span style="font-size: 13px;" class="mb-0 mt-2"><small>Start Time:</small> <small
                                    class="text-muted"><?= date('h:i a', strtotime($class['start_time']));?></small></span>
                            <span style="font-size: 13px;" class="mb-0 mt-2"><small>End Time: </small> <small
                                    class="text-muted"><?= date('h:i a', strtotime($class['end_time']));?></small></span>
                        </div>
                    </div>
                </div>

            </div>
            <?php }
            } ?>
        </div>

    </div>
    <!-- /Overview Section -->
</div>

<?php
require "./inc/footer.php";
require "./inc/script.php";
?>