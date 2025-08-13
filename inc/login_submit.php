<?php
require '../admin/inc/config/class/config.php';

$res = [];


$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['password']) && filter($_POST['password'])) {
    $password = md5(filter($_POST['password']));
} else {
    $res['status'] = 101;
    $res['msg'] = 'Password is required';
}

if (isset($_POST['email']) && filter($_POST['email'])) {
    $email = filter($_POST['email']);

    if (!checkValidEmail($email)) {
        $res['status'] = 101;
        $res['msg'] = 'Invalid Email';
    }
} else {
    $res['status'] = 101;
    $res['msg'] = 'Email is required';
}

if (!$res) {

    // Perform SQL query to check if the provided email and password are valid
    $query = "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'";
    $result = runFatch($query);

    if (count($result) == 1) {

        $uniqueid= time().rand(1000,1000000);
        $userid = $result[0]['id'];

        $_SESSION['user_id'] = $userid;
        $_SESSION['user_name'] = $result[0]['name'];
        $_SESSION['GNSinghAppid'] =  $uniqueid;

        runUpdate("UPDATE `tbl_users` SET `appid`='$uniqueid' WHERE `id`='$userid'");


        $res["status"] = 100;
        $res["msg"] = "Login Successful";
    } else {

        session_unset();
        session_destroy();

        $res['status'] = 101;
        $res['msg'] = 'Login Failed';
    }
}

echo json_encode($res);
