<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    //controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name=$_POST['name'];
                    insert_dm($name);
                    $dm=list_dm();
                    include "danhmuc/list.php";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $dm=list_dm();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    $dm=loadone($_GET['id']);
                 }
                include "danhmuc/edit.php";
                break;
            case 'editdm':
                if(isset($_POST['edit']) && ($_POST['edit'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    edit($id, $name);
                }
                $dm=list_dm();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_dm($_GET['id']);
                }
                $dm=list_dm();
                include "danhmuc/list.php";
                break;
            //sp
            case 'addsp':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $name=$_POST['name'];
                    //anh
                    $anh=$_FILES['anh']['name'];
                    $target_dir = "../img/";
                    $target_file= $target_dir . basename($_FILES["anh"]["name"]);
                    if(move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)){
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "has been uploaded";
                    }else{
                        // echo "Ảnh của bạn không thể tải được.";
                    }

                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    insert_sp($name,$giasp,$anh,$mota,$iddm);
                }
                $dm=list_dm();
                // var_dump($dm);
                include "sanpham/add.php";
                break;
            case 'listsp':
                // if(isset($_POST['listok']) && ($_POST['listok']!='')){
                //     $kyw=$_POST['kyw'];
                //     $iddm=$_POST['iddm'];
                // }else{
                //     $kyw='';
                //     $iddm=0;
                // }
                $dm=list_dm();
                // var_dump($dm);
                $sp=list_sp();
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    $sp=loadone_sp($_GET['id']);
                 }
                 $dm=list_dm();
                include "sanpham/edit.php";
                break;
            case 'editsp':
                if(isset($_POST['edit']) && ($_POST['edit'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $anh=$_FILES['anh']['name'];
                    $target_dir = "../img/";
                    $target_file= $target_dir . basename($_FILES["anh"]["name"]);
                    if(move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)){
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "has been uploaded";
                    }else{
                        // echo "Ảnh của bạn không thể tải được.";
                    }

                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $iddm=$_POST['iddm'];
                    edit_sp($id,$name,$giasp,$anh,$mota,$iddm);
                }
                $dm=list_dm();
                $sp=list_sp();
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_sp($_GET['id']);
                }
                $sp=list_sp();
                include "sanpham/list.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else {
            include "home.php";
        }


?>