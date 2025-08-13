<?php
require "./class/config.php";

$res = [];

if (isset($_POST['ans']) && !empty($_POST['ans'])) {
    $ans = filter($_POST['ans']);
} else {
    $res['msg'] = 'Answer is required';
    $res['status'] = 101;
}

if (isset($_POST['que']) && !empty($_POST['que'])) {
    $que = filter($_POST['que']);
} else {
    $res['msg'] = 'Question is required';
    $res['status'] = 101;
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    $admin_id = filter($_SESSION['admin_id']);
} else {
    $res['msg'] = 'Session is Expired !';
    $res['status'] = 101;
}

if (!$res) {
    if (isset($id) && intval($id)) {
        $update_query = "UPDATE tbl_faq SET que='$que', ans='$ans' WHERE id = '$id'";

        $update = runUpdate($update_query);
        if ($update) {

            $res['status'] = 102;
            $res['msg'] = 'Successfully Updated';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    } else {

        $check_exist = runFatch("SELECT * FROM tbl_faq WHERE que = '$que' AND ans = '$ans'");

        if ($check_exist) {
            $res['status'] = 101;
            $res['msg'] = 'Faq Already Exists !';
        } else {
            $insert_query = "INSERT INTO tbl_faq (que, ans, create_by) VALUES ('$que', '$ans', '$admin_id')";

            $insert = runInsert($insert_query);
            if ($insert) {

                $res['status'] = 100;
                $res['msg'] = 'Successfully Insert';
            } else {
                $res['status'] = 101;
                $res['msg'] = 'An Error Occured';
            }
        }
    }
}

echo json_encode($res);
