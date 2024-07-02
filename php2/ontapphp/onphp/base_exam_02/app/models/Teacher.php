<?php
// require_once 'app/models/BaseModel.php';
namespace App\Models;
use App\Models\BaseModel;
class Teacher extends BaseModel{
    protected $table='teacher';
    public function getListTeacher() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>