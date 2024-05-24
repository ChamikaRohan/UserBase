<?php
    require "UserBase_env.php";

    $servername = "localhost";
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $database = "userbase";
    
    $conn  = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>