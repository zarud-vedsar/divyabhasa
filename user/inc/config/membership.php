<?php
require "./class/config.php";

$response = [];
if(isset($_POST['amount']) && !empty($_POST['amount'])){
    $amount = filter($_POST['amount']);
}else{
    echo json_encode(['status' => 101, 'msg' => 'Amount is required.']);
    return;
}
if(isset($_POST['cid']) && !empty($_POST['cid'])){
    $cid = filter($_POST['cid']);

    $class=runFatch("SELECT * FROM `tbl_class` WHERE `id`='$cid'")[0];
}else{
    echo json_encode(['status' => 101, 'msg' => 'No class selected .']);
    return;
}
// if(isset($_POST['txnid']) && !empty($_POST['txnid'])){
//     $txnid = filter($_POST['txnid']);
// }else{
//     echo json_encode(['status' => 101, 'msg' => 'Transaction id is required.']);
//     return;
// }
// if(isset($_FILES['file']) && !empty($_FILES['file']['name'])){
//     $file = $_FILES['file'];
//     $file_name = $file['name'];
//     $tmp = $file['tmp_name'];
//     $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
//     $new_name = date('YmdHis').uniqid("", true).'.'.$extension;
// }else{
//     echo json_encode(['status' => 101, 'msg' => 'Upload screenshot.']);
//     return;
// }

// $check = runFatch("SELECT * FROM zarud_membership_purchase WHERE txnid = '{$txnid}'");
// if($check){
//     echo json_encode(['status' => 101, 'msg' => 'Transaction already done.']);
//     return;
// }
// if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
//     echo json_encode(['status' => 101, 'msg' => 'Unknown user found. Please login again.']);
//     return;
// }


$amount = $class['class_fee'];
$userid = $_SESSION['user_id'];
// if(move_uploaded_file($tmp, '../../../upload/'.$new_name)){
    $response = runInsert("INSERT into zarud_membership_purchase (class_id, userid, amount) VALUES ($cid, $userid, $amount)");
    if($response){
        echo json_encode(['status' => 200, 'msg' => 'Request sent to admin. Please wait until admin approved.']);

        return;
    }else{
        echo json_encode(['status' => 100, 'msg' => 'Something went wrong.']);
        return;
    }
// }else{
//     echo json_encode(['status' => 101, 'msg' => 'Something went wrong while uploading file.']);
//     return;
// }
?>
