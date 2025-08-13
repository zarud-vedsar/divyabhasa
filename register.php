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
        margin: 10px 10px;
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
.p-50 {
        padding: 18px 30px !important;
    }
.text-uppercase {

    text-align: center;
}
     }
</style>

<div class="main-content">
    <section class="divider layer-overlay overlay-dark-4" data-stellar-background-ratio="0.4"
        data-bg-img="./assets/images/bg/bgfront.png">
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 bg-custom1 p-50">

                        <form id="registration_submit" class="mt-20 registration_submit">
                            <h2 class=" text-uppercase"> REGISTER NOW</h2>
                            <!-- <h4 class=" mb-20">Family classes Now Available</h4> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Full Name</label>
                                        <input placeholder="Enter Your Name" type="text" name="name"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Date Of Birth</label>
                                        <input name="dob" class="form-control required " type="date"
                                            placeholder="Date Of Birth" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Gender</label>
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
                                        <label for="" class="form-label ">Mobile Number</label>
                                        <input placeholder="Phone" type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Email ID</label>
                                        <input placeholder="Email" type="email" autocomplete="off" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Password</label>
                                        <input placeholder="Your Password" type="password" name="password"
                                            class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label for="" class="form-label ">Confirm Password</label>
                                        <input placeholder="Confirm Your Password" type="password" autocomplete="off"
                                            name="cpassword" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12 ">
                                    <p>Already have an account? <a class="text-primary" href="./index.php">Login here</a></p>

                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-0 mt-10">
                                        <input name="form_botcheck" class="form-control" type="hidden" value>
                                        <button type="submit" class="btn btn-default"
                                            data-loading-text="Please wait...">Submit</button>
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