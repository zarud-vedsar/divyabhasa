<!-- register modal  -->
<div id="promoModal1" class="modal-promo-box mfp-hide bg-theme-colored" style="margin-top:10px;">
    <form id="registration_submit" class=" registration_submit">
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
                        <option disabled selected >Select</option>
                        <option  value="male">Male</option>
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
                    <input placeholder="Your Password" type="password"  name="password" class="form-control" autocomplete="off">
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
<!-- register modal  -->

<!-- purchase modal  -->
<div id="purchaseModal" class="modal-promo-box mfp-hide bg-theme-colored" style="margin-top:10px;">
    <form id="purchase_submit" class="purchase_submit">
        <h2 class="text-white text-uppercase"> Purchase NOW</h2>
        <!-- <h4 class="text-white mb-20">Family classes Now Available</h4> -->
        <div class="row">
            <div class="col-sm-12 mb-20">
                <img src="./assets/images/qr.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-20">
                    <label for="" class="form-label text-white">Upload Screenshot</label>
                    <input type="file" name="screenshot" class="form-control" style="padding: 10px;" accept=".png, .jpg, .jpeg">
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
<!-- purchase modal  -->

<!-- login modal  -->
<div id="promoModal2" class="modal-login-box mfp-hide bg-theme-colored" style="margin-top:10px;">
    <form id="login_submit" class="login_submit">
        <h2 class="text-white text-uppercase"> Login Here</h2>
        <!-- <h4 class="text-white mb-20">Family classes Now Available</h4> -->
        <div class="row">
            

            <div class="col-sm-12">
                <div class="form-group mb-20">
                    <label for="" class="form-label text-white">Registered Email</label>
                    <input placeholder="Your Registered Email" type="text" autocomplete="off" name="email" class="form-control">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group mb-20">
                    <label for="" class="form-label text-white">Password</label>
                    <input placeholder="Your Password" type="password"  name="password" class="form-control" autocomplete="off">
                    
                </div>
            </div>
            
            
            <div class="col-sm-6">
                <div class="form-group mb-0 mt-10">
                    <input name="form_botcheck" class="form-control" type="hidden" value>
                    <button type="submit" class="btn btn-default" data-loading-text="Please wait...">Submit</button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group mb-0 mt-10">
                    <input name="form_botcheck" class="form-control" type="hidden" value>
                    <button  class="btn btn-dark" href="#promoModal3" data-lightbox="inline">Forget Password</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- login modal  -->

<!-- forget password modal  -->
<div id="promoModal3" class="modal-login-box mfp-hide bg-theme-colored" style="margin-top:10px;">
    <form id="reset_submit" class=" reset_submit">
        <h2 class="text-white text-uppercase"> Reset Password</h2>
        <!-- <h4 class="text-white mb-20">Family classes Now Available</h4> -->
        <div class="row">
            

            <div class="col-sm-12">
                <div class="form-group mb-20">
                    <label for="" class="form-label text-white">Registered Email</label>
                    <input placeholder="Your Registered Email" type="text" autocomplete="off" name="uname" id="uname"  class="form-control">
                </div>
            </div>
            <div class="col-sm-12" id="password" style="display:none">
                <div class="form-group mb-20">
                    <label for="" class="form-label text-white">Set New Password</label>
                    <input placeholder="Set Your Password" type="password" autocomplete="off" name="password" class="form-control">
                </div>
            </div>
            <div class="col-sm-12" id="otp" style="display:none">
                <div class="form-group mb-20">
                    <label for="" class="form-label text-white">OTP</label>
                    <input placeholder="OTP Sent To Your Registred Email ID" type="text" autocomplete="off" name="otp" class="form-control">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group mb-0 mt-10">
                    <button class="btn btn-danger d-none" style="display:none;" type="submit" id="submitbtn">Submit</button>
                    <input name="btntype" id="btntype" class="form-control" type="hidden">
                    <button type="button" class="btn btn-default" data-loading-text="Please wait..." data-type="otp_generate" id="otp_generate"> Generate OTP </button>
                    <button type="button" class="btn btn-default" data-loading-text="Please wait..." data-type="varify_otp" id="varify_otp" style="display:none"> Change Password </button>
                </div>
            </div>
            
        </div>
    </form>
</div>
<!-- forget password modal  -->

<footer id="footer" class="footer layer-overlay overlay-dark-9" data-bg-img="./assets/images/bg/bg19.jpg">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h2 class="text-white"><?= $select_website_setting[0]['website_title'] ?></h2>
                    <!-- <img class="mt-10 mb-20" alt src="./upload/<?= $select_website_setting[0]['white_logo'] ?>"> -->
                    <p>Suresh Kumar Kesharwani is a renowned martial artist with an extensive background in various forms of combat sports and self-defense techniques.</p>

                    <ul class="styled-icons icon-dark icon-circled icon-sm">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Classes</h5>
                    <div class="latest-posts">
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Useful Links</h5>
                    <ul class="list angle-double-right list-border">
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./classes.php">Classes</a></li>
                        <li><a href="./faq.php">Faq</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Connect With Us</h5>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fal fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="tel:<?= $select_website_setting[0]['contact'] ?>"><?= $select_website_setting[0]['contact'] ?></a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:<?= $select_website_setting[0]['email'] ?>"><?= $select_website_setting[0]['email'] ?></a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fal fa-location text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= $select_website_setting[0]['address'] ?></a> </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-md-6">
                    <p class="font-11 text-black-777 m-0">Copyright &copy;2024 Karpad Kaushar. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-right flip">
                    <p class="font-11 text-black-777 m-0">Developed By <a href="www.vedsar.com">Vedsar India Pvt Ltd.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<style>
    .contact_icon {
        display: flex;
        flex-direction: column;
        position: fixed;
        bottom: 30px;
        left: 30px;
        z-index: 9999999999;
    }

    .contact_icon a {
        position: relative;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-top: 20px;
        transition: all 1s;
        z-index: 1;
    }

    .contact_icon a::before,
    .contact_icon a::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: all 1s;
        animation: pulse 1s linear infinite;
        z-index: -1;
    }

    .contact_icon a::after {
        animation-delay: 1s;
        /* Optional: Adds a delay to the after pseudo-element animation for a staggered effect */
    }

    @keyframes pulse {
        0% {
            opacity: 1;
            transform: scale(1);
        }

        100% {
            opacity: 0;
            transform: scale(1.4);
            background-color: #198754;
        }
    }


    .contact_icon a i {
        color: #fff;
        font-size: 38px;
    }

    .contact_icon .fa-phone {
        font-size: 30px;
    }
</style>

<!-- contact icon fixed start -->
<div class="contact_icon">
    <a href="https://api.whatsapp.com/send?phone=<?= @$select_website_setting[0]['contact'] ?>&amp;text=Hello%20I'm%20Connected%20from%20Your%20Website." class="bg-success" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="tel:<?= @$select_website_setting[0]['contact'] ?>" class="bg-primary"><i class="fa fa-phone"></i></a>
</div>
<!-- contact icon fixed end -->

<?php

if(isset($_GET['login']) && $_GET['login']=='false'){
    ?>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('logingbtn').click();
        });
    </script>

    <?php
}