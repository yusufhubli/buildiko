<?php
require "connect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
     $category = $_POST['category'];
     $type = $_POST['type'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $userid = $_POST['userid'];
    $insertquery = "INSERT into orders(Name,type,qty,price,category,userid) values ('$name','$type','$qty','$price','$category','$userid')" ;
    
     $res = mysqli_query($connect,$insertquery);
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-start mt-16 bg-yellow-50">
   
   <div class=" w-full h-full flex justify-center items-center">
         <div class="w-96 h-40 shadow-sm shadow-gray-500 p-4 rounded-md text-center bg-white">
            <h1 class="text-2xl font-bold text-green-500 my-5">
                <?php if($res){
                     echo "Ordered successfully";
                     }?></h1>
            <a class="py-1 px-5 rounded-md bg-yellow-400 shadow-sm shadow-gray-500 text-black font-bold"
             href="http://localhost/phpprograms/buildiko/frontend/home2.html">Back to Home</a>
         </div>
   </div>
   <script>
    let remove =()=>{
    localStorage.removeItem('data')
    }
    remove()
   </script>
</body>
</html>