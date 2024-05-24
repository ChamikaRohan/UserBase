<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  include "../Backend/view.php"; ?>
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
                    <form action="../Backend/update.php/id=<?php echo $user['id']; ?>" method="POST">
                        <input type="submit" value="Edit" name="edit" />
                    </form>
                </td>
                <td>
                    <form action="../Backend/delete.php/id=<?php echo $user['id'] ?>" method="POST">
                        <input type="submit" value="Delete" name="delete" /></td>
                    </form>
            </tr>
            <?php $count=$count+1; ?>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>