<?php
require_once "db.php";
class danhmuc extends db{
function getAllDanhMuc(){
    $sql = "SELECT * FROM danhmuc";
    return $this->getData($sql);
}
}