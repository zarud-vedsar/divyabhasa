<?php
require "./class/config.php";

$res = [];

if (isset($_POST['terms_condition']) && !empty($_POST['terms_condition'])) {
    $terms_condition = filter($_POST['terms_condition']);
} else {
    $terms_condition = '';
}

if (isset($_POST['privacy_policy']) && !empty($_POST['privacy_policy'])) {
    $privacy_policy = filter($_POST['privacy_policy']);
} else {
    $res['msg'] = 'Privacy Policy is required';
    $res['status'] = 101;
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (!$res) {
    $update_query = "UPDATE tbl_privacy SET privacy_policy='$privacy_policy',
                                             terms_condition='$terms_condition' WHERE id = '$id'";

    $update = runUpdate($update_query);
    if ($update) {

        $res['status'] = 102;
        $res['msg'] = 'Successfully Updated';
    } else {
        $res['status'] = 101;
        $res['msg'] = 'An Error Occured';
    }
}

echo json_encode($res);
