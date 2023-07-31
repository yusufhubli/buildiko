<?php 
require "../backend/connect.php";

$query = "select * from orders" ;

$result = mysqli_query($connect,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
</head>
<body>
    <table style="justify-content:center;border: 1px solid black">
    <tr>
        <th>Order id</th>
        <th>Name</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Category</th>
        <th>Order Time</th>
        <th>Delete</th>
    </tr>

    <?php 
    while ($rows = mysqli_fetch_assoc($result))
    {

    ?>
    <tr>
        <td><?php echo $rows['orderid'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['type'] ?></td>
        <td><?php echo $rows['qty'] ?></td>
        <td><?php echo $rows['price'] ?></td>
        <td><?php echo $rows['category'] ?></td>
        <td><?php echo $rows['orderdate'] ?></td>
        <td><a href="deleteusers.php?orderid=<?php echo $rows['orderid'] ?>">Delete</a></td>

    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>