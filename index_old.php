<?php
require "./inc/head.php";
require "./inc/header.php";
?>

<div class="main-content">
    <section id="home">
        <div class="container-fluid p-0">

            <div class="rev_slider_wrapper">
                <div class="rev_slider rev_slider_default" data-version="5.0">
                    <ul>

                        <?php
                        $select_banner = runFatch("SELECT * FROM tbl_banner WHERE status = 1");
                        if ($select_banner) {
                            $count = 0;
                            foreach ($select_banner as $banner) {
                                $count++;
                        ?>
                                <li data-index="rs-<?= $count ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="./upload/<?= $banner['image'] ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description>
                                    <img src="./upload/<?= $banner['image'] ?>" alt data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <script>
                $(document).ready(function(e) {
                    $(".rev_slider_default").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [700, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>

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
                    <div class="col-md-6 text-right" style="position: sticky; top: 0;">
                        <img src="./upload/<?= $select_about[0]['about_image'] ?>">
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

    <section id="classes" class="bg-lighter">
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Our <span class="text-theme-colored">Classes</span></h2>
                        <p class>Join our G. N. Singh IAS Academy.</p>
                    </div>
                </div>
            </div>
            <?php

            $sql_classes = "SELECT * FROM `tbl_class`  WHERE `status` = '1' ORDER BY RAND() LIMIT 6 ";
            $classes = runFatch($sql_classes);

            ?>
            <div class="section-content">
                <div class="row">

                    <?php
                    foreach ($classes as $class) {
                    ?>

                        <div class="col-sm-6 col-md-4 mb-30">
                            <div class="class-items bg-white border-1px p-20">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="./upload/<?= $class['image']; ?>" style="height: 200px;">
                                    <div class="viewtime">
                                        <!-- <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Details</a> -->
                                    </div>
                                </div>
                                <h3 class>
                                    <a href="#"><span class="text-theme-colored"><?= $class['student_capacity'] . " Students"  ?> </span> | <?= $class['title'] ?></a>
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

    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="./assets/images/bg/bg14.jpg" data-parallax-ratio="0.7">
        <div class="container pt-80 pb-80">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-smile mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="754" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Happy Student</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-rocket mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="375" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Success Sports</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-add-user mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="124" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Our Trainers</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-medal mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Award Won</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="trainer" class="bg-lighter">
        <div class="container pt-70 pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Our <span class="text-theme-colored"> Trainers</span></h2>
                        <p class>Join our G. N. Singh IAS Academy.</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col">
                            <?php
                            $select_trainer = runFatch("SELECT * FROM tbl_trainer WHERE status = 1");
                            if ($select_trainer) {
                                foreach ($select_trainer as $trainer) {
                            ?>
                                    <div class="item">
                                        <div class="trainer-item style2">
                                            <div class="trainer-thumb"> <img src="./upload/<?= $trainer['profile'] ?>" alt class="img-fullwidth img-responsive"> </div>
                                            <div class="trainer-info pb-20">
                                                <div class="trainer-biography">
                                                    <h3 class="text-white"><?= $trainer['name'] ?></h3>
                                                    <h5 class="text-white"><?= $trainer['designation'] ?></h5>
                                                </div>
                                                <div class="social-network pt-10">
                                                    <ul class="list-inline">
                                                        <li class="rotate"><a href><i class="fab fa-facebook-f bg-theme-colored no-rotate"></i></a></li>
                                                        <li><a href><i class="fab fa-twitter bg-theme-colored"></i></a></li>
                                                        <li><a href><i class="fab fa-dribbble bg-theme-colored"></i></a></li>
                                                    </ul>
                                                </div>
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
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container-fluid mb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Our <span class="text-theme-colored">Gallery</span></h2>
                        <p class>Join our G. N. Singh IAS Academy.</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">


                        <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                            <?php
                            $select_gallery = runFatch("SELECT * FROM tbl_gallery WHERE status = 1 LIMIT 8");
                            if ($select_gallery) {
                                foreach ($select_gallery as $gallery) {
                            ?>
                                    <div class="gallery-item design">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="./upload/<?= $gallery['image'] ?>" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center"><?= $gallery['title'] ?></div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="./upload/<?= $gallery['image'] ?>" data-lightbox-gallery="gallery" title="<?= $gallery['title'] ?>"><i class="far fa-image"></i></a>
                                                    </div>
                                                </div>
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
            </div>
        </div>
    </section>

    <section class="divider layer-overlay overlay-dark-4" data-stellar-background-ratio="0.4" data-bg-img="./assets/images/bg/bg12.jpg">
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 bg-theme-colored p-50">

                        <form id="registration_submit" class="mt-20 registration_submit">
                            <h2 class="text-white text-uppercase"> REGISTER NOW</h2>
                            <!-- <h4 class="text-white mb-20">Family classes Now Available</h4> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Full Name</label>
                                        <input placeholder="Enter Your Name" type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Date Of Birth</label>
                                        <input name="dob" class="form-control required " type="date" placeholder="Date Of Birth" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Gender</label>
                                        <select name="gender" id="gender" class="form-control form-select required">
                                            <option disabled selected>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Mobile Number</label>
                                        <input placeholder="Phone" type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Email ID</label>
                                        <input placeholder="Email" type="email" autocomplete="off" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Password</label>
                                        <input placeholder="Your Password" type="password" name="password" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label text-white">Confirm Password</label>
                                        <input placeholder="Confirm Your Password" type="password" autocomplete="off" name="cpassword" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-0 mt-10">
                                        <input name="form_botcheck" class="form-control" type="hidden" value>
                                        <button type="submit" class="btn btn-default" data-loading-text="Please wait...">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" data-bg-img="./assets/images/pattern/p3.png">
        <div class="container pb-40">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="title">Membership <span class="text-theme-colored"> Packages</span></h2>
                        <p class>Join our Training Club and Rise to a New Challenge</p>
                    </div>
                </div>
            </div>
            <?php
            $select_membership = runFatch("SELECT * FROM tbl_membership");
            ?>
            <div class="section-content">
                <div class="row" style="display:flex;">
                    <div class="col-sm-6 col-md-4 col-lg-4 hvr-float-shadow mb-sm-30" style="margin: 0 auto;">
                        <div class="pricing-table pb-0 mt-sm-0 maxwidth400 bg-lightest text-center">
                            <img src="./assets/images/pricing/2.jpg" alt class="img-fullwidth img-responsive">
                            <div class="pricing-title bg-theme-colored p-20">
                                <h5 class="text-uppercase font-weight-400 text-white letter-space-1 mt-0">Prepare with G. N. Singh IAS Academy</h5>
                            </div>
                            <div class="pricing-info">
                                <ul class="table-list list mt-0 no-bg no-border no-bullet">
                                    <li>Regular Assessments and Feedback</li>
                                    <li>Comprehensive Curriculum</li>
                                    <li>Personalized Coaching</li>
                                    <li>Supportive Learning Environment</li>
                                </ul>
                            </div>
                            <div class="price-amount font-36">
                                <div class="font-weight-700 text-theme-colored">₹<?= @$select_membership[0]['price'] ?> / <span class="font-14 text-uppercase"><?= @$select_membership[0]['duration'] ?> monthly</span></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider parallax">
        <div class="container">
            <div class="section-ontent">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="line-bottom mb-60">Why <span class="text-theme-colored">Choose Us</span> </h3>
                        <p class="para">At G. N. Singh IAS Academy, we understand that preparing for the IAS exam is a transformative journey. Here’s why you should choose us:</p>
                        <div class="bxslider bx-nav-top" data-minslides="3">
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <p class> Learn from experienced instructors and successful IAS officers dedicated to your success. </p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-sports-7 text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <p class>Our comprehensive and up-to-date curriculum is designed to meet the specific needs of aspiring civil servants.</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-sports-9 text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <p class>With small batch sizes and one-on-one mentoring, we ensure you receive the support you need to excel.</p>
                                </div>
                            </div>
                            <div class="icon-box border-bottom clearfix">
                                <a href="#" class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                    <i class="flaticon-people text-white font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <p class>Regular mock tests and detailed feedback help you track your progress and refine your strategies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="line-bottom"> Notice </h3>
                        <div class="bxslider bx-nav-top" data-minslides="3">
                            <?php
                            $select_notice = runFatch("SELECT * FROM tbl_notice WHERE status = 1");
                            if ($select_notice) {
                                foreach ($select_notice as $notice) {
                            ?>
                                    <div class="event media mb-20 no-bg no-border">
                                        <div class="media-body pl-20">
                                            <div class="event-content pull-left flip">
                                                <h4 class="event-title media-heading"><a href="#"><?= $notice['title'] ?></a></h4>
                                                <p class="mt-5"><?= $notice['des'] ?></p>
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
            </div>
        </div>
    </section>

    <section class="bg-theme-colored">
        <div class="container  pt-0 pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-6col text-center">
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w1.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w2.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w3.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w4.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w5.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w6.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w3.png" alt></a> </div>
                            <div class="item"> <a href="#"><img src="./assets/images/clients/w4.png" alt></a> </div>
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