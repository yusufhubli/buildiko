<?php 
require '../backend/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        head,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 250, 223);

        }

        input[type='checkbox'] {
            margin-left: 45px;
            margin-top: 8px;
            width: 15px;
            height: 15px;
        }

        #login {
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
            margin-left: 440px;
            margin-top: 50px;
            border: none;
            width: 370px;
            height: 420px;
            background-color: rgba(255, 255, 255, 0.717);
            border-radius: 15px;
            padding-left: 15px;
        }

        .log::placeholder {
            color: black;
        }

        .log {
            background-color: white;
            outline: none;
            margin-left: 32px;
            margin-top: 25px;
            margin-right: 50px;
            padding: 8px 15px;
            border: none;
            border-radius: 17px;
            width: 252px;
            box-shadow: 2px 2px 2px rgb(77, 76, 76);

        }

        #sub {
            margin-top: 20px;
            padding: 6px 75px;
            border: none;
            text-decoration: none;
            margin-left: 33px;
            border-radius: 15px;
            background-image: url(nav/aq7.jpg);
            background-position: center;
            background-size: cover;
            /*linear-gradient(to right,red,white);*/
            color: rgb(0, 0, 0);
            width: 280px;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
        }

        #sub:hover {
            color: rgb(255, 255, 255);
        }

        .btn {
            margin-left: 33px;
            margin-top: 10px;
            width: 121px;
            border-radius: 17px;
            font-size: 15px;
            padding: 5px 15px 7px 15px;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(236, 201, 48);
            letter-spacing: 1px;
            color: rgb(0, 0, 0);
            border: none;
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
        }

        .btn:hover {
            border: none;
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
        }

        .btn a {
            text-decoration: none;
            color: black;
        }

        .btn1 {
            font-size: 10px;
            text-align: center;
            width: 280px;
            margin-top: 20px;
            margin-left: 32px;
            padding: 3px 0px 8px 0px;
            border: none;
            border-radius: 17px;
            background-color: white;
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
        }

        .btn1:hover {
            background-color: rgb(237, 250, 246);
        }

        #gender {
            margin-left: 62px;
            margin-top: 30px;
            margin-right: 60px;
            padding: 7px 66px;
            border-radius: 15px;
            border: 1.5px solid black;
            outline: none;
            width: 355px;
            text-align: center;
        }

        #sub:hover {
            background-color: rgb(255, 212, 58);
        }

        .img {
            margin-left: 0px;

        }

        .b {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            margin-left: 35px;
        }

        #line {
            margin-top: 15px;
            display: inline-flex;
        }

        #line2 {
            margin-top: 15px;
            display: inline-flex;
        }

        #or {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            margin: -2px 10px;
            font-weight: bold;
        }

        h2 {
            color: rgb(0, 0, 0);
            padding-top: 15px;
            margin: 0px 0px 0px 140px;
            font-weight: bolder;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
    <title>Add Cement</title>
</head>

<body>
    <div id="login">
        <h2>Add Cement</h2>
        <div id="signup">
            <form method="post" enctype="multipart/form-data">
                <input class="log"  type="text" name="id" placeholder="id">
                <input class="log"  type="file" name="image" placeholder="image">
                <input class="log"  type="text" name="name" placeholder="name">
                <input class="log"  type="text" name="type" placeholder="type">
                <input class="log"  type="number" name="qty" placeholder="qty">
                <input class="log"  type="number" name="price" placeholder="price">
                <input class="log"  type="text" name="category" placeholder="category">
                <input name="submit" type="submit" value="Add">
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

        $insertquery = "insert into cement(id,image,name,type,qty,price,category) values('$id','$image','$name','$type','$qty','$price','$category')";

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