<?php
require "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = file_get_contents("php://input");
    $user = json_decode($data,true);
   // var_dump($user);
   foreach($user as $u){
         $email = $u['email'];
         $pass = $u['password'];
   
         $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass'";
         $res = mysqli_query($connect,$sql);
         $row = mysqli_fetch_assoc($res);
       if(mysqli_num_rows($res)>0){
               echo $row['userid'];
              // var_dump($row['cid']);
               }else{
                    echo "";
                }
           }    }

?>