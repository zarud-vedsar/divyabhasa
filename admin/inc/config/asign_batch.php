<?php
require "./class/config.php";

$res = [];

// print_r($_REQUEST);
// die();

if (isset($_POST['valid_till']) && !empty($_POST['valid_till'])) {
    $valid_till = filter($_POST['valid_till']);
} else {
    $res['msg'] = 'Please Select Valid till Date';
    $res['status'] = 101;
}


if (isset($_POST['class']) && !empty($_POST['class'])) {
    $class = filter($_POST['class']);
} else {
    $res['msg'] = 'Please Select the Class';
    $res['status'] = 101;
}


if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
    $user_id = filter($_POST['user_id']);
} else {
    $res['msg'] = 'User ID  is required';
    $res['status'] = 101;
}







if (!$res) {

    $check= runFatch("SELECT * FROM `zarud_batch` WHERE `userid`='$user_id' AND `classid`='$class' AND `status`='0'");

       if(!$check){


        $insert_query = "INSERT INTO `zarud_batch`( `userid`, `classid`,  `validtill`) VALUES 
                                                    ('$user_id','$class','$valid_till')";
        $insert = runInsert($insert_query);

        if ($insert) {

            

            $res['status'] = 100;
            $res['msg'] = 'Student Assigned with the batch Successfully';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }

    }
    else{
        $res['status'] = 101;
            $res['msg'] = 'Student Already Registered With this Batch';
    }
    
}

echo json_encode($res);
