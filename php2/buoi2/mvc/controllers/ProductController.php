<?php
//Tạo ra từng hàm để thực thi từng chức năng riêng biệt 
require_once "models/Product.php";
class ProductController{
    public function listProduct(){
        $product = new Product();
        $product= $product->getAllProduct();
        // var_dump($product);
        // die();
        include "view/Product/list.php";
    }

    public function addProduct($tensp,$gia){
        $product= add_sanpham($tensp,$gia);
        
        include "view/Product/add.php";
    }

    public function editProduct(){
        echo "Sửa";
    }
}

?>