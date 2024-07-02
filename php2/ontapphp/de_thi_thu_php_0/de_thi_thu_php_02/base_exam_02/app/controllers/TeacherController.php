<?php
namespace App\Controllers;
use App\Models\Teacher;
// include_once 'app/models/Teacher.php';
// include_once 'app/controllers/BaseController.php';
class TeacherController extends BaseController{
    public $teacher;

    public function __construct(){
        $this->teacher= new Teacher();
    }
    public function getTeacher() {
    $teachers = $this->teacher->getListTeacher();
    // var_dump($teachers);
    // die;
    return $this->render('teacher.index',compact('teachers'));
    }

    public function addTeacher(){
        return $this->render('teacher.add');
    }
    public function postTeacher(){
        if (isset($_POST['btn-submit'])){
            $error = [];
            if(empty($_POST['name'])){
                $error[] = 'Vui lòng nhập tên';
            }
            if(empty($_POST['email'])){
                $error[] = 'Vui lòng nhập email';
            }
            if(empty($_POST['salary'])){
                $error[] = 'Vui lòng nhập salary';
            }
            if(empty($_POST['school'])){
                $error[] = 'Vui lòng nhập school';
            }
            if(count($error)>=1){
                redirect('errors',  $error, 'add-teacher');
            }else{
                $check = $this->teacher->addTeacher(NULL, $_POST['name'], $_POST['email'], $_POST['salary'], $_POST['school']);
                if ($check){
                    redirect('success',  "Thêm thành công", 'add-teacher');
                }

            }

        }
    }

    public function detailTeacher($id){
        $detail = $this->teacher->detailTeacher($id);
        return $this->render('teacher.edit',compact('detail'));
    }

    public function editTeacher($id){
        if (isset($_POST['btn-submit'])){
            $error = [];
            if(empty($_POST['name'])){
                $error[] = 'Vui lòng nhập tên';
            }
            if(empty($_POST['email'])){
                $error[] = 'Vui lòng nhập email';
            }
            if(empty($_POST['salary'])){
                $error[] = 'Vui lòng nhập salary';
            }
            if(empty($_POST['school'])){
                $error[] = 'Vui lòng nhập school';
            }
            $route ='detail-teacher/'.$id;
            if(count($error)>=1){
                redirect('errors',  $error, $route);
            }else{
                $check = $this->teacher->editTeacher($id, $_POST['name'], $_POST['email'], $_POST['salary'], $_POST['school']);
                if ($check){
                    redirect('success',  "Sửa thành công", 'list-teacher');
                }

            }

        }

    }

    public function deleteTeacher($id){
        $check= $this->teacher->deleteTeacher($id);        
        if($check){
            redirect('success',  "Xoá thành công", 'list-teacher');
        }
    }
}