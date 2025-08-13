<?php
require '../../admin/inc/config/class/config.php';

$res = [];

if (isset($_POST['cpassword']) && !empty($_POST['cpassword'])){
    $cpassword= filter($_POST['cpassword']);

    if($_POST['password'] != $cpassword){
        $res['msg'] = 'Confirm Password and Password  did not matched';
        $res['status'] = 101;
    }
}
else{
    $res['msg'] = 'Confirm Password is required';
    $res['status'] = 101;
}

if (isset($_POST['password']) && !empty($_POST['password'])){
    $password= md5($_POST['password']);
}
else{
    $res['msg'] = 'Password is required';
    $res['status'] = 101;
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = filter($_POST['email']);

    $email_query = "SELECT count(*) as total FROM `tbl_users` WHERE `email`='$email'";

    $user = runFatch($email_query);

    if($user[0]['total']>0)
    {
        $res['msg'] = 'Email already Registered';
        $res['status'] = 101;
    }
} else {
    $res['msg'] = 'email is required';
    $res['status'] = 101;
}

if (isset($_POST['phone']) && !empty($_POST['phone'])) {
    $phone = filter($_POST['phone']);

    $phone_query = "SELECT count(*) as total FROM `tbl_users` WHERE `phone`='$phone'";

    $user = runFatch($phone_query);

    if($user[0]['total']>0)
    {
        $res['msg'] = 'Phone Number already Registered';
        $res['status'] = 101;
    }

    if (strlen($phone) !== 10) {
        $res['msg'] = 'Phone should be 10 characters';
        $res['status'] = 101;
    } elseif (!in_array(substr($phone, 0, 1), ['6', '7', '8', '9'])) {
        $res['msg'] = 'Phone should start with 6, 7, 8, or 9';
        $res['status'] = 101;
    }

} else {
    $res['msg'] = 'Phone Number is required';
    $res['status'] = 101;
}

if (isset($_POST['gender']) && !empty($_POST['gender'])) {
    $gender = filter($_POST['gender']);
} else {
    $res['msg'] = 'Please select your gender';
    $res['status'] = 101;
}

if (isset($_POST['dob']) && !empty($_POST['dob'])) {
    $dob = filter($_POST['dob']);
} else {
    $res['msg'] = 'Date of Birth is required';
    $res['status'] = 101;
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = filter($_POST['name']);
} else {
    $res['msg'] = 'Full Name is required';
    $res['status'] = 101;
}


if (!$res) {

    $insert_query = "INSERT INTO `tbl_users`( `name`, `phone`, `email`, `gender`, `dob`, `password`) 
                                    VALUES ('$name','$phone','$email','$gender','$dob','$password')";

    $insert = runInsert($insert_query);
    if ($insert) {

        $res['status'] = 100;
        $res['msg'] = 'Successfully Registered Login to Continue';
    } else {
        $res['status'] = 101;
        $res['msg'] = 'An Error Occured';
    }
}

echo json_encode($res);
