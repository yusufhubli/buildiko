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
    <script  src="https://cdn.tailwindcss.com/3.3.0"></script>
    <title>Manage users</title>
</head>
<body class="bg-yellow-200">
<h1 class="text-center mt-10 text-2xl font-bold">User Table</h1>
    <table class="mb-14 mt-10 mx-16 bg-white">
    <tr>
        <th class="border-2 border-gray-800 border-collapse py-2 w-56">Id</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-56">Name</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-56">Email</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-56">Password</th>
        <th class="border-2 border-gray-800 border-collapse py-2 w-56">Delete</th>
    </tr>

    <?php 
    while ($rows = mysqli_fetch_assoc($result))
    {

    ?>
    <tr>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-56"><?php echo $rows['userid'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-56"><?php echo $rows['name'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-56"><?php echo $rows['email'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-56"><?php echo $rows['password'] ?></td>
        <td class="border-2 text-center border-gray-800 border-collapse py-2 w-56"><a class="px-6 py-1 text-white rounded-md bg-red-500 font-bold"  href="deleteusers.php?userid=<?php echo $rows['userid'] ?>">Delete</a></td>

    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>