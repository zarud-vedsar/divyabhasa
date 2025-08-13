<?php
require "./inc/config/class/config.php";

if (!isset($_SESSION['admin_id'])) {
	header("Location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Divya Bhasha Sanskritam</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="../upload/1755057540_1160504.png">

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
</head>