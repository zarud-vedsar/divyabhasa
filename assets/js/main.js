
// swal alert start
const Toast = Swal.mixin({
    toast: true,
    position: 'top-right',
    iconColor: 'white',
    customClass: {
        popup: 'colored-toast'
    },
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true
});
const swamsg = {
    error: (msg) => {
        Toast.fire({
            icon: 'error',
            title: msg
        });
    },
    success: (msg) => {
        Toast.fire({
            icon: 'success',
            title: msg
        })
    }
};
// swal alert end 

// contact start 
$("#contact_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/contact_submit.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                setTimeout(function () {
                    window.location.reload();
                }, 1500);
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// contact end 

// users start 
$(".registration_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/registration_submit.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                setTimeout(function () {
                    window.location.reload();
                }, 1500);
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});

$(".login_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/login_submit.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                setTimeout(function () {
                    location.assign('./user/');
                }, 1500);
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});

$(document).on('click', '#otp_generate, #varify_otp', function(e){
    e.preventDefault();
    $("#btntype").val($(this).data('type'));
    setTimeout(() => {
        $("#submitbtn").trigger('click');
    }, 200);
});

$(document).on('submit',"#reset_submit", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    $.ajax({
        url: './inc/reset_submit.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        success: function (data) {
            const res = JSON.parse(data);
            if (res.status == 99) {
                setTimeout(function () {
                    $('#uname').attr('readonly',true)
                    $('#password').css('display','block');
                    $('#otp').css('display','block');
                    $('#varify_otp').show();
                    $('#otp_generate').css('display','none');

                }, 500);
                swamsg.success(res.msg);
            }
            else if(res.status == 100){
                setTimeout(function () {
                    window.location.assign("./index.php");
                },1500);
                swamsg.success(res.msg);

            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// users end 

// purchase start 
$("#purchase_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/purchase_submit.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                setTimeout(function () {
                    window.location.reload();
                }, 1500);
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// purchase end 