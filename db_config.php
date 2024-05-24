<?php
    require "UserBase_env.php";
    
    $servername = "localhost";
    $username = "root";
    $password = "0716868110";
    $database = "userbase";

    $conn  = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>