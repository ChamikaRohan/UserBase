<?php 
    include "db_config.php";

    if(isset($_GET["id"]) && is_numeric($_GET["id"]))
    {
        $id = (int)$_GET["id"];
    }

    $sql_stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $sql_stmt->bind_param("i", $id);
    $result = &$sql_stmt->execute(); 
    
    if ($result == TRUE)
    {
        header("Location: http://localhost/UserBase/Frontend/view_display.php");
        exit();
    }
    else
    {
        echo "Error deleting user: " . htmlspecialchars($sql_stmt->error);
    }
    $sql_stmt->close();
    $conn->close();
?>