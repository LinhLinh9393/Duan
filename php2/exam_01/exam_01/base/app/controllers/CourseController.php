<?php
// include_once 'app/models/Course.php';
// include_once 'app/controllers/BaseController.php';
namespace App\Controllers;
use App\Models\Course;
class CourseController extends BaseController{
    public $course;
    public function __construct(){
        $this->course=new Course();
    }
    public function getCourse() {
        $courses = $this->course->getListCourse();
        return $this->render('course.index',compact('courses'));
    }

    public function addCourse(){
        return $this->render('course.add');
    }

    public function postCourse(){
        if(isset($_POST['btn-submit'])){
            $error=[];
            if(empty($_POST['name'])){
                $error[]='Vui lòng nhập lại tên khoá học';
            }
            if(empty($_POST['price'])){
                $error[]='Vui lòng nhập lại giá khoá học';
            }
            if(empty($_POST['teacher'])){
                $error[]='Vui lòng nhập lại tên giảng viên';
            }
            if(empty($_POST['description'])){
                $error[]='Vui lòng nhập lại description khoá học';
            }
            if(count($error)>=1){
                redirect('errors',$error,'add-course');
            }else{ 
                $check=$this->course->addCourse(NULL,$_POST['name'],$_POST['price'],$_POST['teacher'],$_POST['description']);
                if($check){
                    redirect('success','Thêm thành công','list-course');
                }       

            }
        }
    }

    public function deleteCourse($id) {
        $check=$this->course->deleteCourse($id,$_POST['name'],$_POST['price'],$_POST['teacher'],$_POST['description']);
        if($check){
            redirect('success','Xoá thành công','list-course');
        }   
    }

    public function detailCourse($id){
        $courses=$this->course->detailCourse($id);
        return $this->render('course.edit',compact('courses'));
    }

    public function editCourse($id){
        if(isset($_POST['btn-submit'])){
            $error=[];
            if(empty($_POST['name'])){
                $error[]='Vui lòng nhập lại tên khoá học';
            }
            if(empty($_POST['price'])){
                $error[]='Vui lòng nhập lại giá khoá học';
            }
            if(empty($_POST['teacher'])){
                $error[]='Vui lòng nhập lại tên giảng viên';
            }
            if(empty($_POST['description'])){
                $error[]='Vui lòng nhập lại description khoá học';
            }
            $route='detail-course/'.$id;
            if(count($error)>=1){
                redirect('errors',$error,$route);
            }else{ 
                $check=$this->course->editCourse($id,$_POST['name'],$_POST['price'],$_POST['teacher'],$_POST['description']);
                if($check){
                    redirect('success','Sửa thành công','list-course');
                }       

            }
        }
    }

}