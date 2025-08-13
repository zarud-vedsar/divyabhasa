<?php
require "./class/config.php";

$res = [];
if (isset($_POST['map_iframe']) && !empty($_POST['map_iframe'])) {
    $map_iframe = filter($_POST['map_iframe']);
} else {
    $res['msg'] = 'Map Iframe is required';
    $res['status'] = 101;
}

if (isset($_POST['address']) && !empty($_POST['address'])) {
    $address = filter($_POST['address']);
} else {
    $res['msg'] = 'Address is required';
    $res['status'] = 101;
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = filter($_POST['email']);
} else {
    $res['msg'] = 'Email is required';
    $res['status'] = 101;
}

if (isset($_POST['contact']) && !empty($_POST['contact'])) {
    $contact = filter($_POST['contact']);

    if (strlen($contact) !== 10) {
        $res['msg'] = 'Contact should be 10 characters long';
        $res['status'] = 101;
    } elseif (!in_array(substr($contact, 0, 1), ['6', '7', '8', '9'])) {
        $res['msg'] = 'Contact should start with 6, 7, 8, or 9';
        $res['status'] = 101;
    }
} else {
    $res['msg'] = 'Contact is required';
    $res['status'] = 101;
}

if (isset($_FILES['white_logo']) && !empty($_FILES['white_logo']['name'])) {
    $filename = $_FILES['white_logo']['name'];
    $tmpname3 = $_FILES['white_logo']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        $white_logo = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path3 = "../../../upload/" . $white_logo;
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper White Logo Image !!';
    }
} elseif (isset($_POST['hidden_white_logo']) && !empty($_POST['hidden_white_logo'])) {
    $white_logo = filter($_POST['hidden_white_logo']);
} else {
    $res['status'] = 101;
    $res['msg'] = "White Logo is required";
}

if (isset($_FILES['dark_logo']) && !empty($_FILES['dark_logo']['name'])) {
    $filename = $_FILES['dark_logo']['name'];
    $tmpname2 = $_FILES['dark_logo']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        $dark_logo = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path2 = "../../../upload/" . $dark_logo;
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper Dark Logo Image !!';
    }
} elseif (isset($_POST['hidden_dark_logo']) && !empty($_POST['hidden_dark_logo'])) {
    $dark_logo = filter($_POST['hidden_dark_logo']);
} else {
    $res['status'] = 101;
    $res['msg'] = "Dark Logo is required";
}

if (isset($_FILES['favicon']) && !empty($_FILES['favicon']['name'])) {
    $filename = $_FILES['favicon']['name'];
    $tmpname = $_FILES['favicon']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        $favicon = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path = "../../../upload/" . $favicon;
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper About Image !!';
    }
} elseif (isset($_POST['hidden_favicon']) && !empty($_POST['hidden_favicon'])) {
    $favicon = filter($_POST['hidden_favicon']);
} else {
    $res['status'] = 101;
    $res['msg'] = "Favicon is required";
}

if (isset($_POST['website_title']) && !empty($_POST['website_title'])) {
    $website_title = filter($_POST['website_title']);
} else {
    $res['msg'] = 'Website Title is required';
    $res['status'] = 101;
}


if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (!$res) {
    $update_query = "UPDATE tbl_website_setting SET favicon='$favicon',
                                                    dark_logo='$dark_logo',
                                                    white_logo='$white_logo',
                                                    website_title='$website_title',
                                                    contact='$contact',
                                                    email='$email',
                                                    address='$address',
                                                    map_iframe='$map_iframe' WHERE id = '$id'";

    $update = runUpdate($update_query);
    if ($update) {
        if (isset($path) && !empty($path)) {
            move_uploaded_file($tmpname, $path);
        }
        if (isset($path2) && !empty($path2)) {
            move_uploaded_file($tmpname2, $path2);
        }
        if (isset($path3) && !empty($path3)) {
            move_uploaded_file($tmpname3, $path3);
        }

        $res['status'] = 102;
        $res['msg'] = 'Successfully Updated';
    } else {
        $res['status'] = 101;
        $res['msg'] = 'An Error Occured';
    }
}

echo json_encode($res);
