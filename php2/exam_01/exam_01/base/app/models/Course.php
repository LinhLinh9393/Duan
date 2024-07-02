<?php
// require_once 'app/models/BaseModel.php';
namespace App\Models;
use App\Models\BaseModel;
class Course extends BaseModel{
    protected $table='course';
    public function getListCourse() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addCourse($id,$name,$price,$teacher,$description){
        $sql = "INSERT INTO $this->table VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$price,$teacher,$description]);
    }

    public function deleteCourse($id){
        $sql = "DELETE FROM  $this->table WHERE id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

    public function detailCourse($id){
        $sql = "select * from  $this->table WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function editCourse($id,$name,$price,$teacher,$description){
        $sql = "UPDATE $this->table SET course_name=?,price=?,teacher_name=?,description=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute([$name,$price,$teacher,$description,$id]);
    }
}
?>