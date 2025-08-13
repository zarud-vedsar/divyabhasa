<?php
date_default_timezone_set('Asia/kolkata');
session_start();
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '192.168.29.248') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gnsingh";
} else {
    $servername = "localhost"; // Change this if your remote server has a different address
    $username = "muyaeenmmr";
    $password = "3dqmDxtPpQ";
    $database = "muyaeenmmr";
}

$dataTables = [
    'banner' => 'tbl_banner',
    'gallery' => 'tbl_gallery',
    'contact' => 'tbl_contact',
    'trainer' => 'tbl_trainer',
    'faq' => 'tbl_faq',
    'notice' => 'tbl_notice',
    'users' => 'tbl_users',
];

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
};
require __DIR__."/function.php";

?>