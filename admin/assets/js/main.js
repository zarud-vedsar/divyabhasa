// admin login start 
deleteData('.deleteSeller');
changeStatus('.statusSeller');
$(document).on('submit', '#admin_login', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    $.ajax({
        url: './inc/config/class/auth.php',
        type: 'POST',
        data: formData,
        success: res => {
            res = JSON.parse(res);

            if (res.status == 100) {
                swamsg.success(res.msg);
                setTimeout(() => {
                    location.assign('./');
                }, 1500);
            } else {
                swamsg.error(res.msg);
            }
        },
        contentType: false,
        processData: false
    })
});
// admin login start 


// Admin register start
$("#admin_register").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/admin_update.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                $("#admin_register").trigger('reset');
                swamsg.success(res.msg);
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Admin register end


// register Trainer start 
deleteData('.deleteTrainer');
changeStatus('.statusTrainer');
$("#register_trainer").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/trainer_register.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                $("#register_trainer").trigger('reset');
                swamsg.success(res.msg);
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Trainer end

// Banner add start 
deleteData('.deleteBanner');
changeStatus('.statusBanner');
$("#banner_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/banner_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Banner add end

// Gallery add start 
deleteData('.deleteGallery');
changeStatus('.statusGallery');
$("#gallery_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/gallery_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Gallery add end

// contact start 
deleteData('.deleteContact');
// contact end 


// contact start 
deleteData('.deleteusers');
// contact end 

// Website setting add start 
$("#website_setting_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/website_setting_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Website setting add end

// About add start 
$("#about_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/about_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// About add end

// Faq add start 
deleteData('.deleteFaq');
changeStatus('.statusFaq');
$("#faq_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/faq_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Faq add end


// Privacy add start 
$("#privacy_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/privacy_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Privacy add end



// Notice add start 
deleteData('.deleteNotice');
changeStatus('.statusNotice');
$("#notice_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/notice_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Notice add end

// membership add start 
$("#membership_submit").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/membership_submit.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// membership add end

// add Class start 
deleteData('.deleteClass');
changeStatus('.statusClass');
$("#add_class").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/add_class.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                $("#add_class").trigger('reset');
                swamsg.success(res.msg);
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Class end

// User add start 
deleteData('.deleteUser');
changeStatus('.statusUser');
// User add end 

// add Tutorial start 
deleteData('.deleteTutorial');
changeStatus('.statusTutorial');
$("#submit_tutorial").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/submit_tutorial.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                $("#submit_tutorial").trigger('reset');
                swamsg.success(res.msg);
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Tutorial end



// add Youtube start 
deleteData('.deleteyoutube');
changeStatus('.statusYoutube');
$("#submit_youtube").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/submit_youtube.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data, status) {
            const res = JSON.parse(data);
            if (res.status == 100) {
                $("#submit_youtube").trigger('reset');
                swamsg.success(res.msg);
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// Youtube end


// assign batch 
$("#asign_batch").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/asign_batch.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});
// assign batch

// validity update 
$("#validity_change").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: './inc/config/validity_change.php',
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
            } else if (res.status == 102) {
                swamsg.success(res.msg);
            } else {
                swamsg.error(res.msg);
            }
        },
    });
});

// validity update 