<?php

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

function runDelete($sqlQuery)
{
    global $conn;

    $deleteResult = $conn->query($sqlQuery);

    return $deleteResult;
}

function runUpdate($sqlQuery)
{
    global $conn;

    $updateResult = $conn->query($sqlQuery);

    return $updateResult;
}

function runInsert($sqlQuery)
{
    global $conn;

    $insertResult = $conn->query($sqlQuery);

    return $insertResult;
}



// function filter(String $string = ''): String
// {
//     $string = htmlspecialchars($string);
//     $string = stripslashes($string);
//     $string = str_replace("'", '', $string);

//     return $string;
// }

function filter( $string ) 
{
    $string = htmlspecialchars($string);
    $string = stripslashes($string);
    $string = str_replace("'", '', $string);

    return $string;
}

function checkValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


