<?php
namespace App\Models;
class Catelory extends BaseModel{
public function Catelory(){
        $sql = "SELECT * FROM catelory ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}