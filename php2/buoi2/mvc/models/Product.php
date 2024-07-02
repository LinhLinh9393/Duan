<?php
    require_once "db.php";

class Product extends db{
    public function getAllProduct(){
        $sql="SELECT * FROM sanpham";
        return $this->getData($sql);
    }
    
}
    function add_sanpham($tensp,$gia){
        $sql = "INSERT INTO `sanpham`(`id`, `tensanpham`, `gia`) VALUES ('','$tensp','$gia')";
        return($sql);
    }
?>