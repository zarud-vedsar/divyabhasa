<?php
require "./class/config.php";

$response = [];
if(isset($_POST['classid']) && !empty($_POST['classid'])){
    $classid = filter($_POST['classid']);
}else{
    echo json_encode(['status' => 101, 'msg' => 'Invalid batch.']);
    return;
}
$check = runFatch("SELECT * FROM tbl_class WHERE id = '{$classid}'");
if(!$check){
    echo json_encode(['status' => 101, 'msg' => 'Invalid batch found.']);
    return;
}
if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    echo json_encode(['status' => 101, 'msg' => 'Unknown user found. Please login again.']);
    return;
}
$userid = $_SESSION['user_id'];
$check = runFatch("SELECT * FROM zarud_batch WHERE userid = {$userid} AND status = 0");
if($check){
    echo json_encode(['status' => 101,'msg' => 'You are already enrolled in another batch.']);
    return;
}
$today = date('Y-m-d H:i:s');
$response = runInsert("INSERT INTO zarud_batch (userid, classid, status, enrolledDate) VALUES ($userid, $classid, 0, '$today')");
if($response){
    echo json_encode(['status' => 200, 'msg' => "You are successfully enrolled."]);
    return;
}else{
    echo json_encode(['status' => 101, 'msg' => "Failed to enroll."]);
    return;
}
?>