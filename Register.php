<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db= "testregister";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(!$conn){
        die("Connection Error".mysqli_connect_error);
    }
    echo "Connected successfully";
?>