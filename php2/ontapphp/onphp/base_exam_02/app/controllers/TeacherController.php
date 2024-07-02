<?php
// include_once 'app/models/Teacher.php';
// include_once 'app/controllers/BaseController.php';
namespace App\Controllers;
use App\Models\Teacher;
class TeacherController extends BaseController{
    public $teacher;
    public function __construct(){
        $this->teacher=new Teacher();
    }
    public function getTeacher() {
    $teachers = $this->teacher->getListTeacher();
    return $this->render('teacher.index',compact('teachers'));
}
}