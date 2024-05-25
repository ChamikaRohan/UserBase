<?php 
    include "db_config.php";

    if(isset($_POST["submit"]))
    {
        $id = $_POST["id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $age = intval($_POST["age"]);
        $gender = $_POST["gender"];
        $hometown = $_POST["hometown"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }

    $sql_stmt = $conn->prepare("UPDATE users SET first_name = ?, last_name = ?, age = ?, gender = ?, hometown = ?, email = ?, password = ? WHERE id = ?");
    $sql_stmt->bind_param("ssissssi", $first_name, $last_name, $age, $gender, $hometown, $email, $password, $id);
    $result = $sql_stmt->execute();

    if ($result == TRUE)
    {
        header("Location: http://localhost/UserBase/Frontend/view_display.php");
        exit();
    }
    else
    {
        echo "Error: " .htmlspecialchars( $sql_stmt->error);
    }
    $sql_stmt->close();
    $conn->close();
?>