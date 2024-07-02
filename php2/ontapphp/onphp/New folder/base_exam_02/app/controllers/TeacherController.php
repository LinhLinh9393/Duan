<?php
// include_once 'app/models/Teacher.php';
// include_once 'app/controllers/BaseController.php';
namespace App\Controllers;
use App\Models\Teacher;
class TeacherController extends BaseController{
    public $teachers;
    public function __construct(){
        $this->teachers=new Teacher();
    }
    public function getTeacher() {
        $teachers = $this->teachers->getListTeacher();
        return $this->render('teacher.index',compact('teachers'));
    }

    public function addTeacher(){
        return $this->render('teacher.add');
    }

    public function postTeacher(){
        if(isset($_POST['btn-submit'])){
            $errorr=[];
            if(empty($_POST['name'])){
                $errorr[]='Vui lòng nhập lại tên';
            }
            if(empty($_POST['email'])){
                $errorr[]='Vui lòng nhập email';
            }
            if(empty($_POST['salary'])){
                $errorr[]='Vui lòng nhập salary';
            }
            if(empty($_POST['school'])){
                $errorr[]='Vui lòng nhập school';
            }
            if(count($errorr)>=1){
                redirect('errorrs',$errorr,'add-teacher');
            }else{
                $check=$this->teachers->addTeacher(NULL,$_POST['name'],$_POST['email'],$_POST['salary'],$_POST['school']);
                if($check){
                    redirect('success','Thêm thành công','list-teacher');
                }
            }
        }
    }

    public function detailTeacher($id){
        $detail = $this->teachers->detailTeacher($id);
        return $this->render('teacher.edit',compact('detail'));
    }

    public function editTeacher($id){
        if(isset($_POST['btn-submit'])){
            $errorr=[];
            if(empty($_POST['name'])){
                $errorr[]='Vui lòng nhập lại tên';
            }
            if(empty($_POST['email'])){
                $errorr[]='Vui lòng nhập email';
            }
            if(empty($_POST['salary'])){
                $errorr[]='Vui lòng nhập salary';
            }
            if(empty($_POST['school'])){
                $errorr[]='Vui lòng nhập school';
            }
            $route='detail-teacher/'.$id;
            if(count($errorr)>=1){
                redirect('errorr',$errorr,$route);
            }else{
                $check=$this->teachers->editTeacher($id,$_POST['name'],$_POST['email'],$_POST['salary'],$_POST['school']);
                if($check){
                    redirect('success','Sửa thành công','list-teacher');
                }
            }
        }
    }

    public function deleteTeacher($id){
        $check=$this->teachers->deleteTeacher($id);
        if($check){
            redirect('success', 'Xoá thành công', 'list-teacher');
        }
    }
}

