<?php
require "./class/config.php";

$response = [];
if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = filter($_POST['id']);
}else{
    echo json_encode(['status' => 101, 'msg' => 'Something went wrong.']);
    return;
}
if(isset($_POST['text']) && !empty($_POST['text'])){
    $text = filter($_POST['text']);
}else{
    echo json_encode(['status' => 101, 'msg' => 'Remark is required.']);
    return;
}
$membership = runFatch("SELECT * FROM zarud_membership_purchase WHERE id = $id");
if(!$membership){
    echo json_encode(['status' => 101, 'msg' => 'Something went wrong.']);
    return;
}

$duration = $membership[0]['duration'];
$userid = $membership[0]['userid'];
$response = runUpdate("UPDATE zarud_membership_purchase SET status = 2, remark = '{$text}' WHERE id = $id");
    if($response){
        echo json_encode(['status' => 200, 'msg' => 'Request rejected.']);
        return;
    }else{
        echo json_encode(['status' => 100, 'msg' => 'Something went wrong.']);
        return;
    }
?>
