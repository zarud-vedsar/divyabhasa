<?php
require "./inc/head.php";
// require "./inc/header.php";
?>
<style>
     @media screen and (min-width:0px) and (max-width: 950px) {
        .layer-overlay.overlay-dark-4::before{
    background-image: url(./assets/images/bg/bg-login-img.jpg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-position: center;  */
    /* background:gray; */

}

.bg-custom1 {
    background: #aeaeae4a;
        color: black !important;
        margin: 0px 10px;
}
.btn {
    font-size: 14px;
    padding: 8px 22px;
    line-height: 1.38;
    width: 100%;
}
.text-primary {
    color: #0b49cf;
}
.text-uppercase {
    text-transform: uppercase;
    font-size: 27px;
}
     }
</style>

<div class="main-content">
    <section class="divider layer-overlay overlay-dark-4" data-stellar-background-ratio="0.4"
        data-bg-img="./assets/images/bg/bgfront.png" style="min-height:100vh;">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 bg-custom1 p-50">
                        <form id="reset_submit" class=" reset_submit">
                            <h2 class=" text-uppercase"> Reset Password</h2>
                            <!-- <h4 class=" mb-20">Family classes Now Available</h4> -->
                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Registered Email</label>
                                        <input placeholder="Your Registered Email" type="text" autocomplete="off"
                                            name="uname" id="uname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12" id="password" style="display:none">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Set New Password</label>
                                        <input placeholder="Set Your Password" type="password" autocomplete="off"
                                            name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12" id="otp" style="display:none">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">OTP</label>
                                        <input placeholder="OTP Sent To Your Registred Email ID" type="text"
                                            autocomplete="off" name="otp" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12 ">
                                    <p>Remember Your Password? <a class="text-primary" href="./index.php">Login here</a></p>

                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-0 mt-10">
                                        <button class="btn btn-danger d-none" style="display:none;" type="submit"
                                            id="submitbtn">Submit</button>
                                        <input name="btntype" id="btntype" class="form-control" type="hidden">
                                        <button type="button" class="btn btn-default" data-loading-text="Please wait..."
                                            data-type="otp_generate" id="otp_generate"> Generate OTP </button>
                                        <button type="button" class="btn btn-default" data-loading-text="Please wait..."
                                            data-type="varify_otp" id="varify_otp" style="display:none"> Change Password
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
// require "./inc/footer.php";
require "./inc/script.php";
?>