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
?>