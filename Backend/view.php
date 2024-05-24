<?php 
    include "db_config.php";

    $sql = "SELECT * FROM users";
    $users = $conn->query($sql);

    print_r($users);
?>