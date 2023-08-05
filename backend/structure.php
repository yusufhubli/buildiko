<?php
class cement{
    public $id;
    public $images;
    public $name;
    public $type;
    public $qty;
    public $price;
    public $category;
    function __construct($id,$images,$name,$type,$qty,$price,$category){
     $this->id =$id;
     $this->images =$images;
     $this->name=$name;
     $this->type =$type;
     $this->qty =$qty;
     $this->price =$price;
     $this->category=$category;
    }
} 

class steel{
    public $id;
    public $images;
    public $name;
    public $type;
    public $qty;
    public $price;
    public $category;
    function __construct($id,$images,$name,$type,$qty,$price,$category){
     $this->id =$id;
     $this->images =$images;
     $this->name=$name;
     $this->type =$type;
     $this->qty =$qty;
     $this->price =$price;
     $this->category=$category;
    }
} 
class sand{
    public $id;
    public $images;
    public $name;
    public $type;
    public $qty;
    public $price;
    public $category;
    function __construct($id,$images,$name,$type,$qty,$price,$category){
     $this->id =$id;
     $this->images =$images;
     $this->name=$name;
     $this->type =$type;
     $this->qty =$qty;
     $this->price =$price;
     $this->category=$category;
    }
} 
class users{
    public $userid;
    public $image;
    public $name;
    public $email;
    public $address;
    public $phone;
    function __construct($userid,$image,$name,$email,$address,$phone){
     $this->userid =$userid;
     $this->image =$image;
     $this->name=$name;
     $this->email =$email;
     $this->address=$address;
     $this->phone=$phone;
    }
}
class order{
    public $orderid;
    public $name;
    public $type;
    public $qty;
    public $price;
    public $category;
    public $userid;
    public $orderdate;
    function __construct($orderid,$name,$type,$qty,$price,$category,$userid,$orderdate){
     $this->orderid =$orderid;
     $this->name=$name;
     $this->type =$type;
     $this->qty =$qty;
     $this->price =$price;
     $this->category=$category;
     $this->$userid=$userid;
     $this->orderdate=$orderdate;
    
    }
} 
?>