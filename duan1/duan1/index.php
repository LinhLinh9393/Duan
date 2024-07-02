<?php
session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/binhluan.php";
    include "model/bill.php";
    include "model/giohang.php";
    include "global.php";
    include "view/header.php";
    
    // if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=list_home();
    $dsdm=list_dm();
    $dstop5=list_top5();
    $dstop8=list_top8();
    $listcart=list_cart();
    if(isset($_GET['act'])&&($_GET['act'])!=""){
        $act=$_GET['act'];
        switch($act){
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $tendm= load_ten_dm($iddm);
                $dssp=list_sanpham($kyw, $iddm);
                include "view/sanpham.php";
                break;
            case "chitietsp":
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['idpro'], $_POST['noidung']);
                }
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $onesp=loadone_sp($_GET['idsp']);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $onesp['iddm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/chiTietsp.php";
                }else{
                    include "view/home.php";
                }
        
                break;
            
            case "addtocart":
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong * $price;
                    insert_cart($name,$img,$price,$soluong,$ttien);
                }
                    include "view/giohang.php";
        
                break;
            case "delcart":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_cart($_GET['id']);
                }
                include "view/giohang.php";
                break;
            case "viewcart":
                $listcart=list_cart();
                include "view/giohang.php";
                break;
            
            case "bill":
                if(isset($_POST['bill']) && ($_POST['bill'])){
                    $name=$_POST['name'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $tong=$tong+$ttien;
                    insert_bill($name,$address,$tel,$pttt,$tong);
                }
                include "view/bill.php";
                break;


            default:
                include "view/home.php";
                break;

        }
    }else{
        include "view/home.php";
    }
  
    include "view/footer.php";


?>