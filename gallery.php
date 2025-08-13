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
                        <h3 class="title text-white">Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container-fluid pb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title text-uppercase">Our <span class="text-black font-weight-300">gallery</span></h2>
                        <p class="text-uppercase letter-space-2">Join our Karpad Kaushal club and be healthy.</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <div class="gallery-isotope grid-3 gutter-small clearfix">

                            <?php
                            $select_gallery = runFatch("SELECT * FROM tbl_gallery WHERE status = 1");
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
</div>


<?php
require "./inc/footer.php";
require "./inc/script.php";
?>