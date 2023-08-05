<?php 
require '../backend/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://cdn.tailwindcss.com/3.3.0"></script>
    
    <title>Add Steel</title>
</head>

<body class="bg-yellow-200 flex justify-center">
    <div id="login" class=" w-[500px] h-[485px] bg-white rounded-md shadow-md mt-7 shadow-gray-400">
        <h2 class=" text-2xl font-bold text-center py-2">Add Steel</h2>
        <div id="signup">
            <form class="text-center" method="post" enctype="multipart/form-data">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="text" name="id" placeholder="id">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="file" name="image" placeholder="image">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="text" name="name" placeholder="name">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="text" name="type" placeholder="type">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="number" name="qty" placeholder="qty">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="number" name="price" placeholder="price">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2"  type="text" name="category" placeholder="category">
                <input name="submit" class="w-80 px-2 py-1 hover:bg-yellow-300 text-lg rounded-md bg-yellow-400 font-bold my-3" type="submit" value="Add">
            </form>
        </div>
    </div>

    </body>

    </html>

    <?php

    if (isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $image = $_FILES['image']['name'];

        $tmp_name = $_FILES['image']['tmp_name'];
        $uploadDir = "upload/" ;
        move_uploaded_file($tmp_name,$uploadDir.$image);

        $insertquery = "insert into steel(id,image,name,type,qty,price,category) values('$id','$image','$name','$type','$qty','$price','$category')";

        $res = mysqli_query($connect,$insertquery);

        if ($res)
        {
            ?>
            <script>
                alert("Item added successfully!");
            </script>
            <?php
        }

        else 
        {
            ?>
            <script>
                alert("Something went wrong!");
            </script>
            <?php
        }
    }

    ?>