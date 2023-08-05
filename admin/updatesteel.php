<?php 
require '../backend/connect.php';
?>

<?php

$ids = $_GET['id'];

$showquery = "select * from steel where id = '$ids' " ;

$showdata = mysqli_query($connect,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['submit']))
{
    $idupdate = $_GET['id'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $category = $_POST['category'];


    $updatequery = "update steel set id='$id',name='$name',type='$type',qty='$qty',price='$price',category='$category' where id = '$idupdate'" ;

    $res = mysqli_query($connect,$updatequery);

    if ($res)
    {
        ?>
        <script>
            alert("Item Updated successfully!");
            location.replace("managesteel.php");
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://cdn.tailwindcss.com/3.3.0"></script>
    
    <title>Add Steel</title>
</head>

<body>
    <div id="login" class="bg-yellow-200 flex justify-center">
        <h2 class=" text-2xl font-bold text-center py-2">Update Steel</h2>
        <div id="signup">
            <form class="text-center" method="post" enctype="multipart/form-data">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2" type="text" name="id" placeholder="id" value="<?php echo $arrdata['id'] ?>">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2" type="text" name="name" placeholder="name" value="<?php echo $arrdata['name'] ?>">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2" type="text" name="type" placeholder="type" value="<?php echo $arrdata['type'] ?>">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2" type="number" name="qty" placeholder="qty" value="<?php echo $arrdata['qty'] ?>">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2" type="number" name="price" placeholder="price" value="<?php echo $arrdata['price'] ?>">
                <input class="border-2 placeholder:text-black border-yellow-400 w-80 px-2 py-1 rounded-md outline-none my-2" type="text" name="category" placeholder="category" value="<?php echo $arrdata['category'] ?>">
                <input class="w-80 px-2 py-1 hover:bg-yellow-300 text-lg rounded-md bg-yellow-400 font-bold my-3" name="submit" type="submit" value="Update">
            </form>
        </div>
    </div>

    </body>

    </html>

   