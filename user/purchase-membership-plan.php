<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if(isset($_GET['cid']) && !empty($_GET['cid'])){
$cid= $_GET['cid'];
$class = runFatch("SELECT * FROM `tbl_class` WHERE `id`='$cid'");
}
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Batch Purchase</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Batch Purchase</li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if (isset($class)) { ?>
                <div class="row">
                    <div class="col-md-6">
                        <img src="../upload/<?= @$class[0]['image'];?>" alt='class img' class="img-fluid" style="width:60%;margin:auto;">
                        <ol class="mt-3">
                        <li>Pay the amount: ₹<?= @$class[0]['class_fee']; ?></li>
<li>Enter the transaction ID after payment</li>
<li>Upload the screenshot and submit</li>
<li>Your purchase request will be accepted or rejected based on admin verification</li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Membership Plan Details</h5>
                                <br>
                                <h6>Amount: Rs <?= @$class[0]['class_fee'];?></h6>
                                
                            </div>
                            <div class="card-body">
                                <form id="savemembership">
                                    <div class="row">
                                        <input type="hidden" name="cid" value=<?= @$cid ?>>
                                        <div class="col-md-12 form-group">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="text" name="amount" value="<?= @$class[0]['class_fee'];?>" readonly id="amount" class="form-control">
                                        </div>
                                        <!-- <div class="col-md-12 form-group">
                                            <label for="txnid" class="form-label">Transaction id</label>
                                            <input type="text" name="txnid" id="txnid" class="form-control">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="file" class="form-label">Payment Screenshot</label>
                                            <input type="file" name="file" id="file" class="form-control">
                                        </div> -->
                                        <div class="col-md-12 form-group">
                                            <button class="btn btn-block btn-dark" id="btnsave">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">Please contact the Admin. <i style="font-size: 1.5rem;" class="far fa-whatsapp text-success"></i></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>
    <script>
        $(document).ready(function() {
            $(document).on('submit', "#savemembership", function(e) {
                e.preventDefault();
                $("#btnsave").text('Sending...');
                $("#btnsave").attr("disabled", true);
                let formData = new FormData(this);
                $.ajax({
                    url: "./inc/config/membership.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $("#btnsave").text('Submit');
                        $("#btnsave").attr("disabled", false);
                        let res = JSON.parse(response);
                        if (res.status == 200) {
                            $("#savemembership").trigger('reset');
                            swamsg.success(res.msg);
                            setTimeout(() => {
                                    window.location.assign('./mem-zarud-history.php');
                            }, 500);
                        } else {
                            swamsg.error(res.msg);
                        }
                    }
                });
            });
        });
    </script>