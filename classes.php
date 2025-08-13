<?php
require "./inc/head.php";
require "./inc/header.php";
?>


<div class="main-content">

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="./assets/images/bg/bg13.jpg">
        <div class="container pt-100 pb-50">

            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">classes</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

        $sql_classes="SELECT * FROM `tbl_class`  WHERE `status` = '1' ORDER BY RAND()  ";
        $classes=runFatch($sql_classes);

    ?>

    <section id="classes" class="bg-lighter">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <?php
                    
                        foreach($classes as $class){               
    
                    ?>

                        <div class="col-sm-6 col-md-4 mb-30">
                            <div class="class-items bg-white border-1px p-20">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="./upload/<?= $class['image']; ?>" height="200">
                                    <div class="viewtime">
                                        <!-- <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Details</a> -->
                                    </div>
                                </div>
                                <h3 class>
                                    <a href="#"><span class="text-theme-colored"><?= $class['student_capacity']." Students"  ?> </span> | <?= $class['title'] ?></a>
                                </h3>
                                <div class="class-date mb-10"><i class="far fa-calendar"></i> <em> <?= date('d-m-Y', strtotime($class['start_date'])) . " To "  . date('d-m-Y', strtotime($class['end_date'])) ?></em></div>
                                <div class="class-date"><i class="fal fa-clock"></i> <em><?= date('h:i A', strtotime($class['start_time'])) . " To " . date('h:i A', strtotime($class['end_time'])) ?> </em></div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
require "./inc/footer.php";
require "./inc/script.php";
?>