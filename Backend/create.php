<?php
include "db_config.php";

    if(isset($_POST["submit"]))
    {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $age = intval($_POST["age"]);
        $gender = $_POST["gender"];
        $hometown = $_POST["hometown"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }

    $sql_stmt = $conn->prepare("INSERT INTO users (first_name, last_name, age, gender, hometown, email, password) 
    VALUES (?,?,?,?,?,?,?)");
    $sql_stmt->bind_param("ssissss",$first_name, $last_name, $age, $gender, $hometown, $email, $password);
    $result = $sql_stmt->execute();
    
    if($result == TRUE)
    {
        header("Location: http://localhost/UserBase/Frontend/view_display.php");
        exit();
    }
    else
    {
        echo "Error: ".htmlspecialchars($sql_stmt->error);
    }

    $sql_stmt->close();
    $conn->close();
?>


