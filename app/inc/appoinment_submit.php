<?php
require '../admin/inc/config/class/config.php';

$res = [];

if (isset($_POST['message']) && !empty($_POST['message'])) {
    $message = filter($_POST['message']);
} else {
    $res['msg'] = 'Message is required';
    $res['status'] = 101;
}

if (isset($_POST['appoinment_date']) && !empty($_POST['appoinment_date'])) {
    $appoinment_date = filter($_POST['appoinment_date']);
} else {
    $res['msg'] = 'Appoinment date is required';
    $res['status'] = 101;
}

if (isset($_POST['subject']) && !empty($_POST['subject'])) {
    $subject = filter($_POST['subject']);
} else {
    $res['msg'] = 'Subject is required';
    $res['status'] = 101;
}

if (isset($_POST['phone']) && !empty($_POST['phone'])) {
    $phone = filter($_POST['phone']);

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

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = filter($_POST['name']);
} else {
    $res['msg'] = 'Name is required';
    $res['status'] = 101;
}


if (!$res) {
    $insert_query = "INSERT INTO tbl_appoinment (name,
                                              appoinment_date,
                                              phone,
                                              subject,
                                              message) VALUE ('$name',
                                                              '$appoinment_date',
                                                              '$phone',
                                                              '$subject',
                                                              '$message')";

    $insert = runInsert($insert_query);
    if ($insert) {

        $res['status'] = 100;
        $res['msg'] = 'Successfully Insert';
    } else {
        $res['status'] = 101;
        $res['msg'] = 'An Error Occured';
    }
}

echo json_encode($res);
