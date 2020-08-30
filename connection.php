<?php

$db['server'] ="localhost";
$db['username'] ="root";
$db['password'] ="";
$db['database']="elearn4kid";  

function CloseConn($conn){

    return $conn->close(); 
}

function connection($db){

    $servername = $db['server'];
    $username = $db['username'];
    $password = $db['password'];
    $database = $db['database'];
// Create connection
    $conn = new mysqli($servername, $username, $password, $database);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        return $conn;
    }
}

?>