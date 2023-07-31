<?php 
require "../backend/connect.php";

$query = "select * from users" ;

$result = mysqli_query($connect,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage users</title>
</head>
<body>
    <table style="justify-content:center;border: 1px solid black">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
    </tr>

    <?php 
    while ($rows = mysqli_fetch_assoc($result))
    {

    ?>
    <tr>
        <td><?php echo $rows['userid'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><?php echo $rows['password'] ?></td>
        <td><a href="deleteusers.php?userid=<?php echo $rows['userid'] ?>">Delete</a></td>

    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>