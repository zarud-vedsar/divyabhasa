<?php
session_start();

if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '192.168.29.248') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "karpad_kaushal";
} else {
    $servername = "localhost"; // Change this if your remote server has a different address
    $username = "gqecsftsky";
    $password = "S46Y4tScxE";
    $database = "gqecsftsky";
}


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

    $select_tutorial = runFatch("SELECT * FROM tbl_youtube WHERE id = '{$tutorial_id}'");

    $file=@$select_tutorial[0]['thumb'];

    $path = "../upload/".$file;
    

    if(file_exists($path)){
        unlink($path);
        $update_query = "UPDATE tbl_youtube SET thumb=''  WHERE id = '$tutorial_id'";
        $update = runUpdate($update_query);
        echo 1;die;
   
    }
} 
?>
