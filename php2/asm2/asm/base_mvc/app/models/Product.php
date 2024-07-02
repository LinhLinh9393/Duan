<?php
namespace App\Models;
class Product extends BaseModel{
    protected $table ="product";
    public function getProduct(){
        $sql= "SELECT pr.id, pr.name, pr.gia, ct.namedm FROM $this->table AS pr INNER JOIN catelory AS ct ON pr.iddm = ct.id;";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addProduct($id,$name,$gia,$iddm){
        $sql= "INSERT INTO $this->table VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$gia,$iddm]);
    }

    public function detailProduct($id){
        $sql = "SELECT * FROM $this->table WHERE id= ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateProduct($id, $name,$gia,$iddm){
        $sql = "UPDATE `product` SET name=?,gia=?,iddm=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute([$name,$gia,$iddm,$id]);
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
     }
}