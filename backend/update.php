<?php
require "connect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];   
    $image = $_FILES['image']['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
        echo $id;
         $sql = "SELECT *FROM `users` WHERE `userid` ='$id'";
         $res = mysqli_query($connect,$sql);
         if(mysqli_num_rows($res)>0){
            $insert =  "UPDATE `users` SET `image` = '$image',`name` = '$name', `email` = '$email',`address`='$address', `phone` = '$phone' WHERE `users`.`userid` = '$id'"; 
            $res2 =mysqli_query($connect,$insert);
            if($res2){
            move_uploaded_file($_FILES['image']['tmp_name'],"C:/xampp/htdocs/phpprograms/buildiko/frontend/profile/$image");
           // echo "<script>alert('inserted')</script>";
            }
         }else{
          //  echo mysqli_error($conn);
         }
    // "INSERT INTO `house` (`image`,`name`,`email`,`phone`) VALUES ('$image','$name','$email','$phone')"
        }
        header("location:http://localhost/phpprograms/buildiko/frontend/profile.html");
?>
