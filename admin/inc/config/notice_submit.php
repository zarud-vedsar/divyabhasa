<?php
require "./class/config.php";

$res = [];

if (isset($_POST['des']) && !empty($_POST['des'])) {
    $des = filter($_POST['des']);
} else {
    $res['msg'] = 'Description is required';
    $res['status'] = 101;
}

if (isset($_POST['notice_type']) && !empty($_POST['notice_type'])) {
    $notice_type = filter($_POST['notice_type']);
} else {
    $res['msg'] = 'Notice type is required';
    $res['status'] = 101;
}

if (isset($_POST['title']) && !empty($_POST['title'])) {
    $title = filter($_POST['title']);
} else {
    $res['msg'] = 'Title is required';
    $res['status'] = 101;
}

if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    $admin_id = filter($_SESSION['admin_id']);
} else {
    $res['msg'] = 'Session is Expired !';
    $res['status'] = 101;
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (!$res) {

    if (isset($id) && intval($id)) {
        $update_query = "UPDATE tbl_notice SET title='$title',
                                                notice_type='$notice_type',
                                                des='$des' WHERE id = '$id'";

        $update = runUpdate($update_query);
        if ($update) {

            $res['status'] = 102;
            $res['msg'] = 'Successfully Updated';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    } else {

        $check_exist = runFatch("SELECT * FROM tbl_notice WHERE title = '$title' AND notice_type = '$notice_type' AND des = '$des' ");

        if ($check_exist) {
            $res['status'] = 101;
            $res['msg'] = 'Notice Already Exists !';
        } else {
            $insert_query = "INSERT INTO tbl_notice (title, notice_type, des, create_by) VALUES ('$title', '$notice_type', '$des', '$admin_id')";

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
