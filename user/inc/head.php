<?php
require "./inc/config/class/config.php";

// update the batch 

runUpdate("UPDATE `zarud_batch` SET `status`='1' WHERE `validtill` < now()");

if (!isset($_SESSION['user_id']) && !isset($_SESSION['GNSinghAppid'])) {
//delete localt storage
	header("Location: ../index.php?login=false");
}
else{

    $appid= $_SESSION['GNSinghAppid'];

    $currentuserid=$_SESSION['user_id'];
    

    $isgenuin = runFatch("SELECT id FROM `tbl_users` WHERE id = '$currentuserid' AND appid= '$appid';");

    if(!$isgenuin){
        header("Location: ../index.php?login=false");
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Divya Bhasha Sanskritam</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/favicon.png">

    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Fontfamily -->
    <link rel="stylesheet" href="./assets/css/onlinecss/googlefont.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="./assets/plugins/feather/feather.css">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="./assets/plugins/icons/flags/flags.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

    <!-- Datatables css -->
    <link rel="stylesheet" href="./assets/css/onlinecss/datatable.css" />

    <!-- select 2 liabrery  -->
    <link rel="stylesheet" href="./assets/css/onlinecss/select2.css" />


    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap');

    /* Apply Lexend font to all elements */
    * {
        font-family: "Lexend", system-ui !important;
    }

    body {
        zoom: 90%;
    }

    /* Ensure Font Awesome icons use their specific font */
    .fas,
    .fab,
    .far,
    .fal {
        font-family: "Font Awesome 5 Free", "Font Awesome 5 Brands" !important;
    }

    body {
        background-color: #ededf59e !important;
    }


    /* media queries for the desktop and mobile layout  */

    /* media queries for the desktop and mobile layout  */
    line-clamp1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    line-clamp2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    line-clamp3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-h {
        font-size: 15px;
        font-weight: 600;
    }

    .card-p {
        font-size: 14px;
        font-weight: 400;
    }

    .mine-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        margin: 2px auto 30px auto;
        width: 98%;
    }

    .mine-card-header img {
        width: 100%;
        border-radius: 20px 20px 0 0;
        height: 200px;
        object-fit: cover;
    }

    .mine-card-body {
        display: flex;
        flex-direction: column;
        align-items: start;
        padding: 20px;
        min-height: 250px;
    }

    .tag {
        background-color: #ccc;
        color: #fff;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        padding: 2px 10px;
        text-transform: uppercase;
    }

    .card-body h4 {
        margin: 10px 0;
    }

    .card-body p {
        font-size: 14px;
        margin: 0 0 40px 0;
        font-weight: 500;
        color: rgb(70, 68, 68);
    }

    .user {
        display: flex;
        margin-top: auto;
    }

    .justify-content-between {
        justify-content: space-between;
    }

    /* Tab Styling */
    .nav-tabs .nav-link {
        background: linear-gradient(90deg, #1D976C, #93F9B9);
        /* Green gradient */
        border-radius: 30px;
        color: #ffffff;
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
        margin: 0 5px;
        border: none;
        text-align: center;
    }

    .nav-tabs .nav-link.active {
        background: linear-gradient(90deg, #f4f269, #5cb270);
        /* Blue gradient for active */
        color: #ffffff;
        border: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .nav-tabs .nav-link a:hover {
        color: #ffffff;
    }

    /* Tab Content Styling */
    .tab-content {
        padding: 20px;
        border-radius: 10px;
        border-top-left-radius: 0;
    }

    /* Tab Icons and Text Alignment */
    .nav-tabs .nav-link i {
        font-size: 1.2rem;
    }

    .nav-tabs .nav-link span {
        margin-left: 8px;
        font-size: 1rem;
    }

    /* Active Tab Animation */
    .nav-tabs .nav-link.active {
        position: relative;
        top: -2px;
    }

    /* Smooth Hover Transitions */
    .nav-tabs .nav-link {
        transition: all 0.4s ease-in-out;
    }

    .avatar-mine {
        width: 80px;
        aspect-ratio: 1/1;
        border-radius: 10px;
    }

    .mine-col {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 20px;
    }

    .mine-right {
        margin-left: 15px;
    }


    /* new css mobile view  */

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .bottom-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        /* width: 100vw; */
        display: flex;
        justify-content: space-around;
        background-color: #fff;
        padding: 20px 2px;
    }

    .bot-item {
        border-radius: 18px 18px 0 0;
    }

    .bot-item.bot-center {
        position: absolute !important;
        border-radius: 100%;
        background-color: #fff;
        top: -40%;
        left: 40%;
        width: 70px;
        height: 70px;
        border: 10px solid #F2F2F2;
        display: grid;
        place-content: center;
    }

    .bot-item a {
        display: inline-block;
        text-decoration: none;
        font-size: 0.7rem;
        color: #333;
    }

    .bot-item a>i.fss {
        font-size: 0.9rem !important;
        margin-bottom: 8px;
    }

    .bot-item.bot-center::before {
        content: "";
        position: absolute;
        bottom: 13%;
        left: -60%;
        background-color: #fff;
        width: 25px;
        height: 25px;
        border-radius: 30% 70% 99% 1% / 0% 100% 0% 100%;
    }

    .bot-item.bot-center::after {
        content: "";
        position: absolute;
        bottom: 14.2%;
        right: -59.5%;
        background-color: #fff;
        width: 25px;
        height: 25px;
        border-radius: 88% 12% 0% 100% / 99% 15% 85% 1%;
    }

    .bot-active {
        color: #e74c3c !important;
    }

    .bot-item>a.center-home {
        color: #9b59b6 !important;
    }

    .bot-2 {
        margin-right: 40px;
    }

    .bot-3 {
        margin-left: 40px;
    }

    .bot-item a {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    @media screen and (min-width: 0px) and (max-width: 950px) {
        .nav-tabs{
            margin: 8px auto !important;
        }
    .nav-tabs .nav-link {
        padding: 6px 10px !important;
        font-size: 14px;
    }
}
    /* slider styles  */
    @media screen and (min-width:0px) and (max-width: 767px) {
        .page-wrapper {
    padding-top: 0px;
}
.page-wrapper>.content {
        padding:0px;
    }
    .m-dflex{
        display:flex !important;

    }
    .mt-5 {
    margin-top: 15px !important;
}
.naruko-main-content {
    padding: 90px 20px 100px 20px !important;
}
     }
    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* width: 100vw; */
        margin: 0 auto;
        padding: 16px 18px;
        background-color: #fff;
        /* position:fixed;
        top:0px;
        left:0px; */

    }

    .top-left {
        width: 70%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .top-left-name {
        margin: 0 5px;
        font-size: 0.9rem;
    }

    .top-right {
        width: 30%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .blogo {
        width: auto;
        max-width: 50%;
        height: auto;
    }

    .top-left .avatar-top-left {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    #logout-right a>i {
        font-size: 1rem;
        color: #e74c3c;
    }

    .naruko-main-content {
        padding: 10px 10px 100px 10px;
    }

    .naruko-featured {
        background-color: #f4f4f4;
        width: 99.8vw;
        margin: auto;
    }

    .garud-h2-f {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c3e50;
        text-align: start;
        margin-bottom: 10px;
    }

    .featured-card {
        display: flex;
        align-items: center;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        width: 46%;
        margin: 10px auto;
    }

    .ficon {
        font-size: 0.8rem;
        color: #fff;
        background-color: #2c3e50;
        margin-right: 15px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: grid;
        place-content: center;
    }

    .ftitle {
        font-size: 0.9rem;
        color: #2c3e50;
        font-weight: 600;
    }

    /* Additional style for horizontal layout */
    .naruko-featured {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .live-class {
        color: #8e44ad;
    }

    .live-classficon {
        background-color: #9b59b6 !important;
    }

    /* Batches - Orange Theme */
    .batches {
        color: #e67e22;
    }

    .batchesficon {
        background-color: #f39c12 !important;
    }

    /* Videos - Blue Theme */
    .videos {
        color: #2980b9;
    }

    .videosficon {
        background-color: #3498db !important;
    }

    /* Live Stream - Red Theme */
    .live-stream {
        color: #e74c3c;
    }

    .live-streamficon {
        background-color: #c0392b !important;
    }

    
    @media only screen and (max-width: 768px) {


#mobile_nav {
    display: flex;
    position:fixed;
    top:0px;
    z-index: 10000;
    width:100%;
   
}

#desktop_nav {
    display: none;
}

#desktop-footer {
    display: none;
}

#mobile-footer {
    display: flex;
}

.mobile-feature {
    display: flex;
}
.mobile-featured-head {
    display: block;
}



}

@media only screen and (min-width: 769px) {



#mobile_nav {
    display: none;
}

#desktop_nav {
    display: block;
}

#desktop-footer {
    display: block;
}

#mobile-footer {
    display: none;
}

.mobile-feature {
    display: none;
}
.mobile-featured-head {
    display: none;
}
}

    
.center-home{
    color: #c0392b !important;
}
    /* new css mobile view  */
    </style>
    <script> 
     if (!localStorage.getItem('appId')){
        
        localStorage.setItem('appId',"<?php echo $_SESSION['GNSinghAppid']?>");
     }
    </script>
</head>