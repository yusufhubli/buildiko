<?php 
require "../backend/connect.php";

$query = "select * from sand" ;

$result = mysqli_query($connect,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://cdn.tailwindcss.com/3.3.0"></script>
    <title>Manage Sand</title>
</head>
<body class="bg-yellow-200">
<h1 class="text-center mt-10 text-2xl font-bold">Sand Table</h1>
    <table class="mb-14 mt-10 mx-16 bg-white">
    <tr>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">id</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">Image</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">Name</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">Type</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">Quantity</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">Price</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36">Category</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-36" colspan="2">Operation</th>
    </tr>

    <?php 
    while ($rows = mysqli_fetch_assoc($result))
    {

    ?>
    <tr>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><?php echo $rows['id'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><img src="../frontend/home/<?php echo $rows['image'] ?>" width="80" height="80" alt=""></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><?php echo $rows['name'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><?php echo $rows['type'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><?php echo $rows['qty'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><?php echo $rows['price'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><?php echo $rows['category'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><a class="px-6 py-1 text-white rounded-md bg-blue-500 font-bold"  href="updatesand.php?id=<?php echo $rows['id'] ?>">Update</a></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-36"><a class="px-6 py-1 text-white rounded-md bg-red-500 font-bold"  href="deletesand.php?id=<?php echo $rows['id'] ?>">Delete</a></td>

    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>