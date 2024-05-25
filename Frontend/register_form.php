<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
</head>
<body>
    <form action="../Backend/create.php" method="POST">
        <h1>Enter Your Information</h1>
       
        <label>First Name: </label><br>
        <input type="text" name="first_name" />
        <br><br>
        <label>Last Name: </label><br>
        <input type="text" name="last_name" />
        <br><br>
        <label>Age: </label><br>
        <input type="text" name="age" />
        <br><br>
        <label>Gender: </label><br>
        <input type="text" name="gender" />
        <br><br>
        <label>Hometown: </label><br>
        <input type="text" name="hometown" />
        <br><br>
        <label>Email: </label><br>
        <input type="text" name="email" />
        <br><br>
        <label>Password: </label><br>
        <input type="password" name="password" />
        <br><br>

        <input type="submit" name="submit" />
    </form>
    <div style="margin: 20px 2px 10px;  font-size: 30 ;font-weight: 900;">
            <form action="./view_display.php" method="POST">
                <button>View the users list</button>
            </form>
    </div>
</body>
</html>