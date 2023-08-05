<?php
  require 'structure.php';
  require "connect.php";
   if($_SERVER['REQUEST_METHOD']=='GET'){
   $sql = "SELECT *FROM `users`";
   $result = mysqli_query($connect,$sql);
   if($result){
   $product = Array();
   while($res = mysqli_fetch_assoc($result)){
   array_push($product,new users($res['userid'],$res['image'],$res['name'],$res['email'],$res['address'],$res['phone']));
   }
  echo json_encode($product);
 }
}
?>