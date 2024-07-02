<?php
namespace App\Models;

class Product extends BaseModel{
    protected $table = 'product';
   public function getListProduct() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}