<?php
session_start();
date_default_timezone_set('Asia/kolkata');
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '192.168.29.248') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "divyabhasha";
} else {
   $servername = "localhost"; // Change this if your remote server has a different address
    $username = "skkgmkywsy";
    $password = "nDPMbf6hGt";
    $database = "skkgmkywsy";
}


$dataTables = [
    'banner' => 'tbl_banner',
    'gallery' => 'tbl_gallery',
    'contact' => 'tbl_contact',
    'trainer' => 'tbl_trainer',
    'class' => 'tbl_class',
    'faq' => 'tbl_faq',
    'notice' => 'tbl_notice',
    'users' => 'tbl_users',
    'tutorial' => 'tbl_tutorial',
    'youtube' => 'tbl_youtube',
];

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
};
require __DIR__."/function.php";

?>