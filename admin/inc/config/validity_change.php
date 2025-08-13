<?php
require "./class/config.php";


$res = [];

// print_r($_REQUEST);
// die();

if (isset($_POST['new_validity']) && !empty($_POST['new_validity'])) {
    $valid_till = filter($_POST['new_validity']);
} else {
    $res['msg'] = 'Please Select Valid till Date';
    $res['status'] = 101;
}
if (isset($_POST['cls_id']) && !empty($_POST['cls_id'])) {
    $cls_id = filter($_POST['cls_id']);
} else {
    $res['msg'] = 'Please Select Valid till Date';
    $res['status'] = 101;
}


$today=date('Y-m-d');
$valid_t=date('Y-m-d',strtotime($valid_till));

if (!$res) {

    
if ($today <= $valid_t) {
   

    $check= runUpdate("UPDATE `zarud_batch` SET `validtill`='$valid_t',`status`='0' WHERE `id`='$cls_id'");

        if ($check) {
            $res['status'] = 100;
            $res['msg'] = 'Validity Change Successfull';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }

  }else{
    $res['status'] = 101;
    $res['msg'] = 'Enter a valid date';
  }
    
}

echo json_encode($res);