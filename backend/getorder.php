<?php
require "connect.php";
require 'structure.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    $sql = "SELECT *FROM `orders`";
    $result = mysqli_query($connect,$sql);
    if($result){
    $product = Array();
    while($res = mysqli_fetch_assoc($result)){
    array_push($product,new order($res['orderid'],$res['name'],$res['type'],$res['qty'],$res['price'],$res['category'],$res['userid'],$res['orderdate']));
    }
   echo json_encode($product);
  }
}
?>