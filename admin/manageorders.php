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
    <script  src="https://cdn.tailwindcss.com/3.3.0"></script>
    <title>Manage Orders</title>
</head>
<body class="bg-yellow-200">
<h1 class="text-center mt-10 text-2xl font-bold">Orders Table</h1>
    <table class="mb-14 mt-10 mx-16 bg-white">
    <tr>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Order id</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Name</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Type</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Quantity</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Price</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Category</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Order Time</th>
        <th class="border-2 border-gray-800 border-collapse py-4 w-40">Delete</th>
    </tr>

    <?php 
    while ($rows = mysqli_fetch_assoc($result))
    {

    ?>
    <tr>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['orderid'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['name'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['type'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['qty'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['price'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['category'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><?php echo $rows['orderdate'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-4 w-40"><a class="px-6 py-1 text-white rounded-md bg-red-500 font-bold" href="deleteusers.php?orderid=<?php echo $rows['orderid'] ?>">Delete</a></td>

    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>