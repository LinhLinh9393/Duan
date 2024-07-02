<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/thongke.php";
include "../model/taikhoan.php";
include "../model/donhang.php";
include "../model/binhluan.php";
include "global.php";

include "header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "list-dm":
            $listdanhmuc = loadall_danhmuc1();
            include "danhmuc/list-dmuc.php";
            break;
        case "add-dm":
            if (isset($_POST['themmoi'])) {
                    $tendm = $_POST['name'];
                    insert_danhmuc($tendm);
                    echo '<script>alert("Bạn đã thêm danh mục thành công.");</script>';
                    
            }
            include "danhmuc/add-dmuc.php";
            break;
        case 'xoa-dm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc1();
            include "danhmuc/list-dmuc.php";
            break;
        case 'sua-dm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $danhmuc = loadone_danhmuc1($_GET['id']);
            }
            include "danhmuc/update-dmuc.php";
            break;
        case 'update-dm':
            if (isset($_POST['capnhat'])) {
                    $tendm = $_POST['tendm'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tendm);
                    echo '<script>alert("Bạn đã cập nhật danh mục thành công.");</script>';
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list-dmuc.php";
            break;
        case 'list-sp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
            } else {
                    $kyw = '';
                    $iddm = 0;
            }
            $listsanpham = loadall_sanpham1();
            $listdanhmuc = loadall_danhmuc1();
            include "sanpham/list-spham.php";
            break;
 
        case "addsp";
            $listdanhmuc = loadall_danhmuc();
            if (isset($_POST['btn-add'])) {

                $name = htmlspecialchars($_POST['name']);
                $price = htmlspecialchars($_POST['price']);
                $desc = htmlspecialchars($_POST['desc']);
                $cate = htmlspecialchars($_POST['cate']);
                $image = null;
                if (isset($_FILES) && $_FILES['file']['name'] != "") {
                    $dir = "img/";
                    $image = $_FILES['file']['full_path'];
                    $file_name = $dir . basename($_FILES['file']['name']);
                    $tmp_name = $_FILES['file']['tmp_name'];
                    if (move_uploaded_file($tmp_name, $file_name)) {
                        echo "Upload hinh thanh cong";
                    } else {
                        echo "Upload hinh that bai";
                    }
                } else {
                    $image = "";
                }
                if (!insert_sanpham($name, $price, $image, $desc, $cate)) {
                    echo "<script>";
                    echo "alert('Thêm sản phẩm thành công')";
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "alert('Thêm sản phẩm thất bại')";
                    echo "</script>";
                }
            }
            include "sanpham/add.php";
            break;
        case "suasp";
            if (isset($_GET['idsp'])) {
                $idsp = (int)$_GET['idsp'];
                $thongtinsp = get_info($idsp);
                $listdanhmuc = loadall_danhmuc();
                if (isset($_POST['btn-update'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $price = htmlspecialchars($_POST['price']);
                    $desc = htmlspecialchars($_POST['desc']);
                    $cate = htmlspecialchars($_POST['cate']);
                    $image = null;
                    if (isset($_FILES) && $_FILES['file']['name'] != "") {
                        $dir = "img/";
                        $image = $_FILES['file']['full_path'];
                        $file_name = $dir . basename($_FILES['file']['name']);
                        $tmp_name = $_FILES['file']['tmp_name'];
                        if (move_uploaded_file($tmp_name, $file_name)) {
                            echo "Upload hinh thanh cong";
                        } else {
                            echo "Upload hinh that bai";
                        }
                    } else {
                        $image = $thongtinsp['img'];
                    }
                    if (!update_sanpham($idsp, $cate, $name, $price, $desc, $image)) {
                        echo "<script>";
                        echo "alert('Cập nhật sản phẩm thành công')";
                        echo "</script>";
                        $thongtinsp = get_info($idsp);
                    } else {
                        echo "<script>";
                        echo "alert('Cập nhật sản phẩm thất bại')";
                        echo "</script>";
                    }
                }
                include "sanpham/edit.php";
            }
            break;
            case 'xoa-sp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                     delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham1("", 0);
                include "sanpham/list-spham.php";
                break;
            break;
        case "bieudo":
            $data = getdata();
            include "sanpham/bieudo.php";
            break;
        case "addsp";
            $listdanhmuc = loadall_danhmuc();
            if (isset($_POST['btn-add'])) {

                $name = htmlspecialchars($_POST['name']);
                $price = htmlspecialchars($_POST['price']);
                $desc = htmlspecialchars($_POST['desc']);
                $cate = htmlspecialchars($_POST['cate']);
                $image = null;
                if (isset($_FILES) && $_FILES['file']['name'] != "") {
                    $dir = "img/";
                    $image = $_FILES['file']['full_path'];
                    $file_name = $dir . basename($_FILES['file']['name']);
                    $tmp_name = $_FILES['file']['tmp_name'];
                    if (move_uploaded_file($tmp_name, $file_name)) {
                        echo "Upload hinh thanh cong";
                    } else {
                        echo "Upload hinh that bai";
                    }
                } else {
                    $image = "";
                }
                if (!insert_sanpham($name, $price, $image, $desc, $cate)) {
                    echo "<script>";
                    echo "alert('Thêm sản phẩm thành công')";
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "alert('Thêm sản phẩm thất bại')";
                    echo "</script>";
                }
            }
            include "sanpham/add.php";
            break;
        case "listsp":
            if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                $keyw = $_POST['keyw'];
                $iddm = $_POST['iddm'];
            } else {
                $keyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyw, $iddm);
            include "sanpham/list.php";
            break;
            case 'list-tk':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list-tkhoan.php";
                break;
           case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                     delete_taikhoan($_GET['id']);
                }
                $listkhachhang = loadall_taikhoan("", 0);
                include "taikhoan/list-tkhoan.php";
                break;
           case 'suatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                     $khachhang = loadone_khachhang($_GET['id']);
                }
                include "khachhang/update.php";
                break;
 
           case 'updatetk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                     $user_name = $_POST['user'];
                     $pass = $_POST['pass'];
                     $email = $_POST['email'];
                     $tel = $_POST['tel'];
                     $address = $_POST['address'];
                     $id = $_POST['id'];
                     $role = $_POST['role'];
                     // $tk = update_tk($id,$user_name,$email,$tel,$pass, $address,$role);
                     header("Location:index.php?act=updatetk");
                }
                include "khachhang/list.php";
                break;
           case "binhluan":
                $listbinhluan = load_binhluan();
                include "binhluan/list-bluan.php";
                break;
           case "list-dh":
                $listhoadon = loadall_hoadon($id);
                include "donhang/list-dhang.php";
                break;
           case 'xoabl';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                     delete_binhluan($_GET['id']);
                }
                $listbinhluan = load_binhluan(0);
                include "binhluan/list-bluan.php";
                break;
        case "thongke":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/list.php";
            break;
        case "chart":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/chart.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
