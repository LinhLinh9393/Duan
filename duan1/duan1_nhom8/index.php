<?php 
session_start();

include "./model/pdo.php";
include "./model/taikhoan.php";
include "./model/sanpham.php";
include "model/binhluan.php";
include "./model/danhmuc.php";
include "./model/order.php";
include "./global.php";

    include "view/header.php";
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $dstop6 = loadall_sanpham_top6();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listCart":
                // Kiểm tra xem giỏ hàng có dữ liệu hay không
                if (!empty($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
    
                    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                    $productId = array_column($cart, 'id');
                    
                    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                    $idList = implode(',', $productId);
                    
                    // Lấy sản phẩm trong bảng sản phẩm theo id
                    $dataDb = loadone_sanphamCart($idList);
                    // var_dump($dataDb);
                }
                include './view/listCartOrder.php';
                break;
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
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case "order":
                if (isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    // print_r($cart);
                    if (isset($_POST['order_confirm'])) {
                        $txthoten = $_POST['txthoten'];
                        $txttel = $_POST['txttel'];
                        $txtemail = $_POST['txtemail'];
                        $txtaddress = $_POST['txtaddress'];
                        $pttt = $_POST['pttt'];
                        // date_default_timezone_set('Asia/Ho_Chi_Minh');
                        // $currentDateTime = date('Y-m-d H:i:s');
                        if (isset($_SESSION['user'])) {
                            $id_user = $_SESSION['user']['id'];
                        } else {
                            $id_user = 0;
                        }
                        $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
                        // foreach ($cart as $item) {
                        //     addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                        // }
                        unset($_SESSION['cart']);
                        $_SESSION['success'] = $idBill;
                        header("Location: index.php?act=success");
                    }
                    include "view/order.php";
                } else {
                    header("Location: index.php?act=listCart");
                }
                break;
            case "success":
                if (isset($_SESSION['success'])) {
                    include 'view/success.php';
                } else {
                    header("Location: index.php");
                }
                break;
            case "sanphamct":
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['idsp'], $_POST['noidung']);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    include "./view/chitietsp.php";
                }else{
                    include "./view/home.php";            
                }
                break;
            case "dangky":
                if(isset($_POST['dangky']) && ($_POST['dangky']!="")){
                        $email = $_POST['email'];
                        $name = $_POST['user'];
                        $pswd = $_POST['pass'];
                        insert_taikhoan($email, $name,$pswd);
                        $thongbao="Đăng ký thành công. Vui lòng đăng nhập!";
                }
                include "view/login/dangky.php";
                break;
            case "dangnhap": 
                if (isset($_POST['dangnhap'])) {
                    $loginMess = dangnhap($_POST['email'], $_POST['pass']);
                    
                }include "view/login/dangnhap.php";
                break;
            case "dangxuat":
                dangxuat();
                include "view/login/dangnhap copy.php";
                break;
            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $sendMailMess = sendMail($email);
                }
                include "view/login/quenmk.php";
                break;
            
        }
    }else{
        include "./view/home.php";
    }
    include "./view/footer.php";
?>
    
    
     
    