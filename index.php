<?php
require "./inc/head.php";
// require "./inc/header.php";
?>
<style>
    @media screen and (min-width:0px) and (max-width: 950px) {
}
 /* design for  view */
@media screen and (min-width:0px) and (max-width: 767px) {
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
.p-50 {
    padding: 50px 40px !important;
}

  
   
}
 
</style>

<div class="main-content">
<section class="divider layer-overlay m-login" style="min-height:100vh;">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="section-content">
            <div class="row">
               <div class="col-md-6 d-none d-md-block d-lg-block">
                        <img src="./upload/1755057540_1160504.png" class="img-fluid" alt="Divyabhasha Registration">
                    </div>
                <div class="col-md-6 bg-custom1 p-50">
                    <form id="login_submit" class="login_submit">
                        <h2 class=" text-uppercase text-center">Login Here</h2>
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group mb-20">
                                    <label for="" class="form-label ">Registered Email</label>
                                    <input placeholder="Your Registered Email" type="text" autocomplete="off"
                                        name="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-20">
                                    <label for="" class="form-label ">Password</label>
                                    <input placeholder="Your Password" type="password" name="password"
                                        class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-sm-12 ">
                                <p>Don't have an account? <a class="text-primary" href="./register.php">Register here</a></p>
                                <p>Forgot your Password? <a class="text-primary" href="./reset_password.php">Reset your Password here</a></p>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-0 mt-10">
                                    <input name="form_botcheck" class="form-control" type="hidden" value>
                                    <button type="submit" class="btn btn-default"
                                        data-loading-text="Please wait...">Login</button>
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