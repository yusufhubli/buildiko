<?php 
require "../backend/connect.php";

$query = "select * from steel" ;

$result = mysqli_query($connect,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Sand</title>
</head>
<body>
    <table style="justify-content:center;border: 1px solid black">
    <tr>
        <th>id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Category</th>
        <th colspan="2">Operation</th>
    </tr>

    <?php 
    while ($rows = mysqli_fetch_assoc($result))
    {

    ?>
    <tr>
        <td><?php echo $rows['id'] ?></td>
        <td><img src="upload/<?php echo $rows['image'] ?>" width="80" height="80" alt=""></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['type'] ?></td>
        <td><?php echo $rows['qty'] ?></td>
        <td><?php echo $rows['price'] ?></td>
        <td><?php echo $rows['category'] ?></td>
        <td><a href="updatesteel.php?id=<?php echo $rows['id'] ?>">Update</a></td>
        <td><a href="deletesteel.php?id=<?php echo $rows['id'] ?>">Delete</a></td>

    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>