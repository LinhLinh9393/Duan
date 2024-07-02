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

   public function addTeacher($id,$name,$email,$salary,$school){
    $sql="INSERT INTO $this->table VALUES (?,?,?,?,?)";
    $this->setQuery($sql);
    return $this->execute([$id,$name,$email,$salary,$school]);
   }

   public function deleteTeacher($id){
    $sql="DELETE FROM  $this->table WHERE id=?";
    $this->setQuery($sql);
    return $this->execute([$id]);
   }

   public function detailTeacher($id){
    $sql = "select * from $this->table WHERE id=?";
    $this->setQuery($sql);
    return $this->loadRow([$id]);
   }

   public function editTeacher($id,$name,$email,$salary,$school){
    $sql="UPDATE `teacher` SET name=?,email=?,salary=?,school=? WHERE id=?";
    $this->setQuery($sql);
    return $this->execute([$name,$email,$salary,$school,$id]);
   }

}
?>