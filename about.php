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
                        <h3 class="title text-white">About</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $select_about = runFatch("SELECT * FROM tbl_about");
                        echo html_entity_decode($select_about[0]['about_des']);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <img src="./upload/<?= $select_about[0]['about_image'] ?>" class="mt-3 mt-md-0">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class>
        <div class="container bg-theme-colored pt-40 pb-30">
            <div class="section-content sm-text-center">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="text-white mt-0 ml-30">Join With G. N. Singh IAS Academy </h3>
                    </div>
                    <div class="col-md-2 text-end">
                        <a class="btn btn-dark btn-flat ml-20" href="#promoModal1" data-lightbox="inline">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="classes" class="bg-lighter">
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title text-uppercase">Our <span class="text-theme-colored">Classes</span></h2>
                        <p class="text-uppercase letter-space-2">Join our G. N. Singh IAS Academy club and be healthy.</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="class-items bg-white border-1px p-20">
                            <div class="thumb">
                                <img class="img-fullwidth" src="./assets/images/classes/1.jpg" alt>
                                <div class="viewtime">
                                    <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a>
                                </div>
                            </div>
                            <h3 class="text-uppercase font-22">
                                <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a>
                            </h3>
                            <div class="class-date letter-space-2 font-12"><i class="fal fa-clock"></i> <em>01:00pm - 03:00 pm</em></div>
                            <div class="class-date letter-space-2 font-12 mb-10"><i class="far fa-location-dot"></i> <em> 121 King Street, Melbourne.</em></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="class-items bg-white border-1px p-20">
                            <div class="thumb">
                                <img class="img-fullwidth" src="./assets/images/classes/2.jpg" alt>
                                <div class="viewtime">
                                    <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a>
                                </div>
                            </div>
                            <h3 class="text-uppercase font-22">
                                <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a>
                            </h3>
                            <div class="class-date letter-space-2 font-12"><i class="fal fa-clock"></i> <em>01:00pm - 03:00 pm</em></div>
                            <div class="class-date letter-space-2 font-12 mb-10"><i class="far fa-location-dot"></i> <em> 121 King Street, Melbourne.</em></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="class-items bg-white border-1px p-20">
                            <div class="thumb">
                                <img class="img-fullwidth" src="./assets/images/classes/3.jpg" alt>
                                <div class="viewtime">
                                    <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a>
                                </div>
                            </div>
                            <h3 class="text-uppercase font-22">
                                <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a>
                            </h3>
                            <div class="class-date letter-space-2 font-12"><i class="fal fa-clock"></i> <em>01:00pm - 03:00 pm</em></div>
                            <div class="class-date letter-space-2 font-12 mb-10"><i class="far fa-location-dot"></i> <em> 121 King Street, Melbourne.</em></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="class-items bg-white border-1px p-20">
                            <div class="thumb">
                                <img class="img-fullwidth" src="./assets/images/classes/4.jpg" alt>
                                <div class="viewtime">
                                    <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a>
                                </div>
                            </div>
                            <h3 class="text-uppercase font-22">
                                <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a>
                            </h3>
                            <div class="class-date letter-space-2 font-12"><i class="fal fa-clock"></i> <em>01:00pm - 03:00 pm</em></div>
                            <div class="class-date letter-space-2 font-12 mb-10"><i class="far fa-location-dot"></i> <em> 121 King Street, Melbourne.</em></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="class-items bg-white border-1px p-20">
                            <div class="thumb">
                                <img class="img-fullwidth" src="./assets/images/classes/5.jpg" alt>
                                <div class="viewtime">
                                    <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a>
                                </div>
                            </div>
                            <h3 class="text-uppercase font-22">
                                <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a>
                            </h3>
                            <div class="class-date letter-space-2 font-12"><i class="fal fa-clock"></i> <em>01:00pm - 03:00 pm</em></div>
                            <div class="class-date letter-space-2 font-12 mb-10"><i class="far fa-location-dot"></i> <em> 121 King Street, Melbourne.</em></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="class-items bg-white border-1px p-20">
                            <div class="thumb">
                                <img class="img-fullwidth" src="./assets/images/classes/1.jpg" alt>
                                <div class="viewtime">
                                    <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a>
                                </div>
                            </div>
                            <h3 class="text-uppercase font-22">
                                <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a>
                            </h3>
                            <div class="class-date letter-space-2 font-12"><i class="fal fa-clock"></i> <em>01:00pm - 03:00 pm</em></div>
                            <div class="class-date letter-space-2 font-12 mb-10"><i class="far fa-location-dot"></i> <em> 121 King Street, Melbourne.</em></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="divider parallax">
        <div class="container">
            <div class="section-ontent">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="line-bottom mb-60">How We <span class="text-theme-colored">Help Society </span> </h3>
                        <div class="bxslider bx-nav-top" data-minslides="3">
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 1</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 2</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 3</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 4</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 5</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 6</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title mb-10">test heading 7</h4>
                                    <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora ipsa maiores voluptates dolorum consequuntur asperiores quam ex autem quibusdam atque. Facere ex temporibus ad corrupti voluptatem impedit, quis odio iusto?</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
require "./inc/footer.php";
require "./inc/script.php";
?>