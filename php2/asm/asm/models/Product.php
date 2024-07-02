<?php
    require_once "db.php";
class Product extends db{
    function getAllProduct(){
        $sql = "SELECT kh.id, kh.name, kh.image, kh.price, dm.namedm FROM khoahoc AS kh INNER JOIN danhmuc AS dm ON dm.id = kh.iddm;";
        return $this->getData($sql);
    }
    

    function insertProduct($name, $price, $image, $iddm){
        $sql = "INSERT INTO khoahoc(id, name, price, image, iddm) VALUES('null','$name','$price','$image','$iddm');";
        return $this->getData($sql);
    }

    function getProduct($product_id) {
        $sql = "SELECT kh.id, kh.name, kh.image, kh.price, dm.namedm FROM khoahoc AS kh INNER JOIN danhmuc AS dm ON dm.id = kh.iddm WHERE kh.id = '{$product_id}';";
        return $this->getData($sql, false);
    }
    
    function updateProduct($product_id, $name, $price, $image, $iddm) {
        $sql = "UPDATE khoahoc SET name='{$name}', price='{$price}', image='{$image}', iddm='{$iddm}' WHERE id='{$product_id}' ";
        return $this->getData($sql, false);
    }
    
    function deleteProduct($product_id) {
        $sql = "DELETE FROM khoahoc WHERE id='{$product_id}'";
        return $this->getData($sql, false);
    }
}
?>