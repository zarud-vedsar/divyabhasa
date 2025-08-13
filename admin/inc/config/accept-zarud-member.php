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

$class_id = $membership[0]['class_id'];
$amount = $membership[0]['amount'];
$userid = $membership[0]['userid'];
$response = runUpdate("UPDATE zarud_membership_purchase SET status = 1, remark = '{$text}' WHERE id = $id");
    if($response){
        // $date = date('Y-m-d');
        // $endDate = date('Y-m-d', strtotime("+$duration months"));

        $insert=runInsert("INSERT INTO `zarud_batch`(`userid`, `classid`,  `purchase_price`) VALUES ('$userid','$class_id','$amount')");
        // $response = runUpdate("UPDATE tbl_users SET membership = 1, amount = '$amount', duration = $duration, activateDate = '{$date}', endDate = '{$endDate}' WHERE id = $userid");
        if($insert){
            echo json_encode(['status' => 200, 'msg' => 'Class Alloted successfully.']);
            return;
        }else{
            echo json_encode(['status' => 100, 'msg' => 'Something went wrong.']);
            return;
        }
    }else{
        echo json_encode(['status' => 100, 'msg' => 'Something went wrong.']);
        return;
    }
?>
