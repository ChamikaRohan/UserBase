<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  include "../Backend/read.php"; ?>
    <h1>User details</h1>

    <table>
        <thead>
            <tr>
                <th>Num</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Hometown</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $count=0; foreach($users as $user): ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $user["first_name"]; ?></td>
                <td><?php echo $user["last_name"]; ?></td>
                <td><?php echo $user["age"]; ?></td>
                <td><?php echo $user["gender"]; ?></td>
                <td><?php echo $user["hometown"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td>
                    <form action="../Frontend/update_form.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
                        <input type="submit" value="Edit" />
                    </form>
                </td>
                <td>
                    <form action="../Backend/delete.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
                        <button type="submit" class="button">Delete</button>
                    </form>
            </tr>
            <?php $count=$count+1; ?>
            <?php endforeach;?>
        </tbody>
    </table>
    <div style="margin: 20px 2px 10px;  font-size: 30 ;font-weight: 900;">
            <form action="./register_form.php" method="POST">
                <button>Add a new user</button>
            </form>
    </div>
</body>
</html>