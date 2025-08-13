<?php
require "./class/config.php";

$res = [];

if (isset($_POST['price']) && !empty($_POST['price'])) {
    $price = filter($_POST['price']);
} else {
    $res['msg'] = 'About description is required';
    $res['status'] = 101;
}

if (isset($_POST['duration']) && !empty($_POST['duration'])) {
    $duration = filter($_POST['duration']);
} else {
    $res['msg'] = 'Duration is required';
    $res['status'] = 101;
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (!$res) {
    $update_query = "UPDATE tbl_membership SET duration='$duration',  price='$price' WHERE id = '$id'";

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
