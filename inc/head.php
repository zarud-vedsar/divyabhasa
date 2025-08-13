<?php
require "./admin/inc/config/class/config.php";
$select_website_setting = runFatch("SELECT * FROM tbl_website_setting");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="G. N. Singh IAS Academy" />
    <meta name="keywords" content="G. N. Singh IAS Academy" />
    <meta name="author" content="Vedsar" />

    <title><?= $select_website_setting[0]['website_title'] ?></title>

    <link href="./upload/<?= $select_website_setting[0]['favicon'] ?>" rel="shortcut icon" type="image/png">
    <link href="./assets/images/apple-touch-icon.png" rel="apple-touch-icon">
    

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">   -->
    <!-- new -->

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/css-plugin-collections.css" rel="stylesheet" />

    <link id="menuzord-menu-skins" href="./assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />

    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/style-main.css" rel="stylesheet" type="text/css">

    <link href="./assets/css/preloader.css" rel="stylesheet" type="text/css">

    <link href="./assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

    <link href="./assets/css/responsive.css" rel="stylesheet" type="text/css">

    <link href="./assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="./assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="./assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <link href="./assets/css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

    <script src="./assets/js/jquery-2.2.4.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="./assets/js/jquery-plugin-collection.js"></script>

    <script src="./assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="./assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- style for login modal  -->
    <script>
     if (sessionStorage.getItem('appId')) {
         window.location.href = './user/index.php'; // 
     }
 </script>
    <style>
    /* Custom styles for the modal */
    .modal {
      display: none; 
      position: fixed; 
      top: 0; 
      left: 0; 
      width: 100%; 
      height: 100%; 
      background: rgba(0, 0, 0, 0.5); 
      align-items: center; 
      justify-content: center; 
      z-index: 1050;
    }
    .modal-dialog {
      margin: 0;
      max-width: 500px;
      width: 100%;
    }
    .modal-content {
      border-radius: 0.375rem; /* Bootstrap's default border-radius */
    }
    .modal-header {
      border-bottom: 1px solid #dee2e6;
    }
    .modal-body {
      padding: 1.25rem;
    }
    .tabs .nav-link {
      border-radius: 0;
      margin-bottom: -1px;
      border: 1px solid transparent;
      border-bottom: none;
    }
    .tab-content {
      padding: 1rem;
    }
    .nav-tabs .nav-link.active {
      border-color: #dee2e6 #dee2e6 #fff;
    }
  </style>
    <!-- style for login modal  -->

</head>