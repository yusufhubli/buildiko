<?php
require "connect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = file_get_contents("php://input");
    $user = json_decode($data,true);
   // var_dump($user);
   foreach($user as $u){
         $name = $u['name'];
         $email = $u['email'];
         $pass = $u['password'];
         //echo $name;
         $sql = "SELECT * FROM `users` WHERE `name`='$name' OR `email`='$email' OR `password`='$pass'";
        $res = mysqli_query($connect,$sql);
        if(mysqli_num_rows($res)>0){
    /*    if($row['name']==$name && $row['email'] == $email && $row['password']== $pass){
         echo 'old'; **/
         echo "";
           }
  
          else{
               $sql2 = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email','$pass')";
               $res2 = mysqli_query($connect,$sql2);
               $get = "SELECT *FROM `users` Where `email`= '$email'";
               $res3 = mysqli_query($connect,$get);
               $row = mysqli_fetch_assoc($res3);
               echo $row['userid'] ;
         }
       
      }
    }
?>
