<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "duan1_team12";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(mysqli_connect_errno()){
        echo "Connection failed: " . mysqli_connect_errno();
        exit();
    }
?>