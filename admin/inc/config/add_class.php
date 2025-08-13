<?php
require "./class/config.php";

$res = [];

// print_r($_REQUEST);
// die();

if (isset($_POST['desc']) && !empty($_POST['desc'])) {
    $desc = filter($_POST['desc']);
} else {
    $res['msg'] = 'Class Description is required';
    $res['status'] = 101;
}
if (isset($_POST['class_fee']) && !empty($_POST['class_fee'])) {
    $class_fee = filter($_POST['class_fee']);
} else {
    $res['msg'] = 'Class Fee is required';
    $res['status'] = 101;
}

if (isset($_POST['start_time']) && !empty($_POST['start_time'])) {
    $start_time = filter($_POST['start_time']);

    if (isset($_POST['end_time']) && !empty($_POST['end_time'])) {
        $end_time = filter($_POST['end_time']);

        if($end_time<= $start_time)
        {
            $res['msg'] = 'End Time Should be greater than Start Time';
            $res['status'] = 101;
        }
    } else {
        $res['msg'] = 'End Time is required';
        $res['status'] = 101;
    }

} else {
    $res['msg'] = 'Start Time is required';
    $res['status'] = 101;
}

if (isset($_POST['start_date']) && !empty($_POST['start_date'])) {
    $start_date = filter($_POST['start_date']);

    if (isset($_POST['end_date']) && !empty($_POST['end_date'])) {
        $end_date = filter($_POST['end_date']);
        if($end_date<= $start_date)
        {
            $res['msg'] = 'End Date Should be greater than Start Date';
            $res['status'] = 101;
        }
    } else {
        $res['msg'] = 'End Date is required';
        $res['status'] = 101;
    }

} else {
    $res['msg'] = 'Start Date is required';
    $res['status'] = 101;
}

if (isset($_POST['student_capacity']) && !empty($_POST['student_capacity'])) {
    $student_capacity = filter($_POST['student_capacity']);
} else {
    $res['msg'] = 'Total Student Intake is required';
    $res['status'] = 101;
}

if (isset($_POST['title']) && !empty($_POST['title'])) {
    $title = filter($_POST['title']);
} else {
    $res['msg'] = 'Class Title is required';
    $res['status'] = 101;
}

if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        $image = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path = "../../../upload/" . $image;
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper Class Image !!';
    }
} elseif (isset($_POST['hidden_image']) && !empty($_POST['hidden_image'])) {
    $image = filter($_POST['hidden_image']);
} else {
    $res['status'] = 101;
    $res['msg'] = "Class Image is required";
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (!$res) {

    if (isset($id) && intval($id)) {
        $sql_image="SELECT  `image` FROM `tbl_class` WHERE `id`='$id'";
        $result= runFatch($sql_image);
        $old_image= $result[0]['image'];
        
        $update_query = "UPDATE `tbl_class` SET 
                                            `image`='$image',
                                            `title`='$title',
                                            `start_date`='$start_date',
                                            `end_date`='$end_date',
                                            `start_time`='$start_time',
                                            `end_time`='$end_time',
                                            `student_capacity`='$student_capacity',
                                            `desc`='$desc',
                                            `class_fee`='$class_fee' 
                                            WHERE  id = '$id'";

        $update = runUpdate($update_query);
        if ($update) {
            if (isset($path) && !empty($path)) {
                $file_to_delete = "../../../upload/" . $old_image;
                unlink($file_to_delete);//delete the previous file
                move_uploaded_file($tmpname, $path);
            }

            $res['status'] = 102;
            $res['msg'] = 'Successfully Updated';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    } else {

        
        $insert_query = "INSERT INTO `tbl_class`(`image`, `title`, `start_date`, `end_date`, `start_time`, `end_time`, `student_capacity`, `desc`,`class_fee`) VALUES 
                                                ('$image','$title','$start_date','$end_date','$start_time','$end_time','$student_capacity','$desc','$class_fee')";
        $insert = runInsert($insert_query);

        if ($insert) {

            if (isset($path) && !empty($path)) {
                move_uploaded_file($tmpname, $path);
            }

            $res['status'] = 100;
            $res['msg'] = 'Class Added Successfully';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    }
}

echo json_encode($res);
