<?php
require "connect.php";
require 'structure.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    $sql = "SELECT *FROM `steel`";
    $result = mysqli_query($connect,$sql);
    if($result){
    $product = Array();
    while($res = mysqli_fetch_assoc($result)){
    array_push($product,new steel($res['id'],$res['image'],$res['name'],$res['type'],$res['qty'],$res['price'],$res['category']));
    }
   echo json_encode($product);
  }
}
?>