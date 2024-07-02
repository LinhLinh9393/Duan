<?php
 namespace App\Controllers;
 use App\Models\Product;

class Login {
    
    // public $; 
    public function __construct() { 
    if(isset($_POST['gui'])){
     
        $error= [];
        
        if(empty($_POST['name'])){
            $error[] = "Bạn vui lòng nhập lại name"; 
        }
        if(empty($_POST['email'])){
            $error[] = "Bạn vui lòng nhập lại email"; 
        }
        if(empty($_POST['pass'])){
            $error[] = "Bạn vui lòng nhập lại pass"; 
        }
        if(count($error)>=1){
            flash('success','Xin chào admin','list-product');
        }else{
            echo "Bạn không phải admin";
        }
    }
}    
}