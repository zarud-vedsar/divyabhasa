<?php
require "./class/config.php";

$res = [];
if (isset($_POST['end_time']) && !empty($_POST['end_time'])) {
    $end_time = filter($_POST['end_time']);
} else {
    $res['msg'] = 'End time is required';
    $res['status'] = 101;
}
if (isset($_POST['start_time']) && !empty($_POST['start_time'])) {
    $start_time = filter($_POST['start_time']);
} else {
    $res['msg'] = 'Start time is required';
    $res['status'] = 101;
}
if (isset($_POST['start_date']) && !empty($_POST['start_date'])) {
    $start_date = filter($_POST['start_date']);
} else {
    $res['msg'] = 'Start date is required';
    $res['status'] = 101;
}
if (isset($_POST['video']) && !empty($_POST['video'])) {
    $video = filter($_POST['video']);
} else {
    $res['msg'] = 'Video Url is required';
    $res['status'] = 101;
}

if (isset($_POST['title']) && !empty($_POST['title'])) {
    $title = filter($_POST['title']);
} else {
    $res['msg'] = 'Title is required';
    $res['status'] = 101;
}
if (isset($_POST['video_input']) && !empty($_POST['video_input'])) {
    $video_input = filter($_POST['video_input']);
} else {
    $video_input = '';
}
if (isset($_POST['class_id']) && !empty($_POST['class_id'])) {
    $class_id = filter($_POST['class_id']);
} else {
    $res['msg'] = 'Class is required';
    $res['status'] = 101;
}

if (isset($_POST['hidden_id']) && !empty($_POST['hidden_id'])) {
    $id = filter($_POST['hidden_id']);
}

if (isset($_FILES['thumb']) && !empty($_FILES['thumb']['name'])) {
    $filename = $_FILES['thumb']['name'];
    $tmpname = $_FILES['thumb']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        $thumb = strtotime(date("Y-m-d-h:i")) . "_" . rand(100000, 9999999) . "." . $extension;
        $path = "../../../upload/" . $thumb;
        move_uploaded_file($tmpname, $path);
    } else {
        $res['status'] = 101;
        $res['msg'] = 'Select An Proper Thumb Image !!';
    }
}

if (!$res) {

   
    if (isset($id) && intval($id)) {

        $video_id= $_POST['video_id'];
      

        if (isset($_FILES['thumb']) && !empty($_FILES['thumb']['name'])) {
            $update_query = "UPDATE tbl_youtube SET video_id='$video_id', thumb='$thumb', class_id='$class_id', title='$title', video='$video', start_date = '$start_date', start_time = '$start_time', end_time = '$end_time' WHERE id = '$id'";

        }else{
            if(!empty($video_input)){
                $update_query = "UPDATE tbl_youtube SET thumb = '$video_input', video_id='$video_id', class_id='$class_id', title='$title', video='$video',start_date = '$start_date', start_time = '$start_time', end_time = '$end_time' WHERE id = '$id'";
            }else{
                $update_query = "UPDATE tbl_youtube SET video_id='$video_id', class_id='$class_id', title='$title', video='$video',start_date = '$start_date', start_time = '$start_time', end_time = '$end_time' WHERE id = '$id'";
            }
        }

       
        $update = runUpdate($update_query);
        if ($update) {

            $res['status'] = 102;
            $res['msg'] = 'Successfully Updated';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    } else {
       $video_id= $_POST['video_id'];
        if (isset($_FILES['thumb']) && !empty($_FILES['thumb']['name'])) {
            $insert_query = "INSERT INTO tbl_youtube (video_id,class_id, title, video,thumb, start_date, start_time, end_time) VALUES ('$video_id','$class_id', '$title', '$video','$thumb', '$start_date', '$start_time', '$end_time')";
        
        }else{
            $insert_query = "INSERT INTO tbl_youtube (thumb, video_id,class_id, title, video, start_date, start_time, end_time) 
            VALUES ('$video_input', '$video_id','$class_id', '$title', '$video', '$start_date', '$start_time', '$end_time')";
        
        }


$insert = runInsert($insert_query);

        if ($insert) {

            $res['status'] = 100;
            $res['msg'] = 'Inserted Successfully';
        } else {
            $res['status'] = 101;
            $res['msg'] = 'An Error Occured';
        }
    }
}

echo json_encode($res);
