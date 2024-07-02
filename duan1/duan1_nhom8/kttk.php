<?php  
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";

    if(isset($_SESSION['email'])){
        if($_SESSION['email']['role'] == "1"){
            header("Location:admin/index.php");
        }elseif($_SESSION['email']['role'] == "0") {
            header("Location:sanpham.php");
        }
    }else {
        header("Location:index.php");
    }
?>