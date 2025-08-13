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
                        <h3 class="title text-white">FAQ</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="list-group">
                        <?php
                        $select_faq = runFatch("SELECT * FROM tbl_faq WHERE status = 1");
                        if ($select_faq) {
                            foreach ($select_faq as $faq) {
                        ?>
                                <a href="#section-<?= $faq['id'] ?>" class="list-group-item smooth-scroll-to-target">Q. <?= $faq['que'] ?></a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-10 col-md-push-1">
                    <?php
                    if ($select_faq) {
                        foreach ($select_faq as $faq) {
                    ?>
                            <div id="section-<?= $faq['id'] ?>" class="mb-50">
                                <h3>Q. <?= $faq['que'] ?></h3>
                                <hr>
                                <p class="mb-20"><?= $faq['ans'] ?></p>
                            </div>
                    <?php
                        }
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