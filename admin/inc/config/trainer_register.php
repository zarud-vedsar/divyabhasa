<?php
require "./class/config.php";

$res = [];

if (isset($_POST['city_id']) && !empty($_POST['city_id'])) {
    $city_id = filter($_POST['city_id']);
} else {
    $city_id = '';
}

if (isset($_POST['state_id']) && !empty($_POST['state_id'])) {
    $state_id = filter($_POST['state_id']);
} else {
    $state_id = '';
}

if (isset($_POST['zip_code']) && !empty($_POST['zip_code'])) {
    $zip_code = filter($_POST['zip_code']);
} else {
    $zip_code = '';
}

if (isset($_POST['address']) && !empty($_POST['address'])) {
    $address = filter($_POST['address']);
} else {
    $address = '';
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = filter($_POST['email']);
} else {
    $email = '';
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
    $res['msg'] = 'Phone No is required';
    $res['status'] = 101;
}

if (isset($_POST['designation']) && !empty($_POST['designation'])) {
    $designation = filter($_POST['designation']);
} else {
    $res['msg'] = 'Designation is required';
    $res['status'] = 101;
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = filter($_POST['name']);
} else {
    $res['msg'] = 'Name is required';
    $res['status'] = 101;
}

if (isset($_FILES['profile']) && !empty($_FILES['profile']['name'])) {
    $filename = $_FILES['profile']['name'];
    $tmpname = $_FILES['profile']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        $profile = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path = "../../../upload/" . $profile;
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper Profile Image !!';
    }
} elseif (isset($_POST['hidden_profile']) && !empty($_POST['hidden_profile'])) {
    $profile = filter($_POST['hidden_profile']);
} else {
    $res['status'] = 101;
    $res['msg'] = "Profile Image is required";
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (!$res) {

    if (isset($id) && intval($id)) {
        $update_query = "UPDATE tbl_trainer SET profile='$profile',
                                                name='$name',  
                                                designation='$designation',  
                                                phone='$phone', 
                                                email='$email', 
                                                address='$address', 
                                                zip_code='$zip_code', 
                                                state_id='$state_id', 
                                                city_id='$city_id' WHERE id = '$id'";

        $update = runUpdate($update_query);
        if ($update) {
            if (isset($path) && !empty($path)) {
                move_uploaded_file($tmpname, $path);
            }

            $res['status'] = 102;
            $res['msg'] = 'Successfully Updated';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    } else {

        $insert_query = "INSERT INTO tbl_trainer (profile, name, designation, phone, email, address, zip_code, state_id, city_id) VALUES ('$profile', '$name', '$designation', '$phone', '$email', '$address', '$zip_code', '$state_id', '$city_id')";
        $insert = runInsert($insert_query);

        if ($insert) {

            if (isset($path) && !empty($path)) {
                move_uploaded_file($tmpname, $path);
            }

            $res['status'] = 100;
            $res['msg'] = 'Inserted Successfully';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    }
}

echo json_encode($res);
