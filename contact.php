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
                        <h3 class="title text-white">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-5">
                    <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

                    <form id="contact_submit">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="number" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Subject <small>*</small></label>
                                    <input name="subject" class="form-control" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                        </div>
                    </form>

                </div>
                <div class="col-md-7">
                    <div class="row">
                        <h3 class="line-bottom mt-0 mb-50 ml-15">Our Location</h3>
                        <div class="col-md-12">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque</p>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Contact Number</h5>
                                    <p><a class="text-gray" href="tel:<?= $select_website_setting[0]['contact'] ?>"><?= $select_website_setting[0]['contact'] ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Email Address</h5>
                                    <p><a class="text-gray" href="mailto:<?= $select_website_setting[0]['email'] ?>"><?= $select_website_setting[0]['email'] ?></a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Our Office Location</h5>
                                    <p><?= $select_website_setting[0]['address'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <iframe src="<?= @$select_website_setting[0]['map_iframe'] ?>" style="border:0;width: 100% ;height: 420px ;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</div>


<?php
require "./inc/footer.php";
require "./inc/script.php";
?>