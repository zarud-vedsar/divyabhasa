<?php
require '../admin/inc/config/class/config.php';

$res = [];

if (isset($_FILES['screenshot']) && !empty($_FILES['screenshot']['name'])) {
    $filename = $_FILES['screenshot']['name'];
    $tmpname = $_FILES['screenshot']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    if ($extension == "mp4" || $extension == "avi" || $extension == "MPEG") {
        $screenshot = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path = "../upload/" . $screenshot;
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper Screenshot !!';
    }
} else {
    $res['status'] = 101;
    $res['msg'] = "Screenshot is required";
}

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $user_id = filter($_SESSION['user_id']);
} else {
    $res['msg'] = 'User is required';
    $res['status'] = 101;
}

if (!$res) {
    $insert_query = "INSERT INTO tbl_purchase (user_id, screenshot) VALUE ('$user_id', '$screenshot')";

    $insert = runInsert($insert_query);
    if ($insert) {
        if (isset($path) && !empty($path)) {
            move_uploaded_file($tmpname, $path);
        }
        $res['status'] = 100;
        $res['msg'] = 'Successfully Insert';
    } else {
        $res['status'] = 101;
        $res['msg'] = 'An Error Occured';
    }
}

echo json_encode($res);
