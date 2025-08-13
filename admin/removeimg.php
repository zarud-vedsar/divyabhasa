<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "karpad_kaushal";

// $servername = "localhost";
// $username = "gqecsftsky";
// $password = "S46Y4tScxE";
// $database = "gqecsftsky";

$dataTables = [
    'banner' => 'tbl_banner',
    'gallery' => 'tbl_gallery',
    'contact' => 'tbl_contact',
    'trainer' => 'tbl_trainer',
    'class' => 'tbl_class',
    'faq' => 'tbl_faq',
    'notice' => 'tbl_notice',
    'users' => 'tbl_users',
    'tutorial' => 'tbl_tutorial',
];

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
};
function runFatch($sqlQuery)
{
    global $conn;

    $queryResult = $conn->query($sqlQuery);
    $response = [];

    while ($result = $queryResult->fetch_assoc()) {
        $response[] = $result;
    }

    return $response;
}

function runUpdate($sqlQuery)
{
    global $conn;

    $updateResult = $conn->query($sqlQuery);

    return $updateResult;
}



// Check if the video ID is provided in the request
if (isset($_GET['id'])) {
    $tutorial_id = $_GET['id'];

    $select_tutorial = runFatch("SELECT * FROM tbl_tutorial WHERE id = '{$tutorial_id}'");

    

    $file=@$select_tutorial[0]['thumb'];

    $path = "../upload/".$file;
    

    if(file_exists($path)){
        unlink($path);
        $update_query = "UPDATE tbl_tutorial SET thumb=''  WHERE id = '$tutorial_id'";
        $update = runUpdate($update_query);
        echo 1;die;
   
    }
} 
?>
