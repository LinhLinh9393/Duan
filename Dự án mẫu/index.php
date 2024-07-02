<?php
session_start();
include "model/pdo.php";
include "model/list_category.php";
include "model/list_product.php";
include "model/account.php";


include "view/header.php";
include "global.php";

$new_product = load_all_list_home_product();
$list_category = load_all_list_category();
$list_top10 = load_all_list_home_top10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }
            if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
                $id_category = $_GET['id_category'];
            } else {
                $id_category = 0;
            }

            $list_product = load_all_list_product($keyword, $id_category);
            $name_category = load_name_list_category($id_category);
            include "view/product.php";
            break;
        case 'detail_product':

            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $id = $_GET['id_product'];
                $load_detail_once = load_once_list_product($id);
                extract($load_detail_once);
                $same_product = load_once_same_product($id, $id_category);
                include "view/product_detail.php";
            } else {
                include "view/home.php";
            }

            break;


        case 'register':
            if (isset($_POST['register']) && ($_POST['register'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_account($email, $user, $pass);
                $notifi = "Success";
            }
            include "view/account/register.php";
            break;

        case 'login':
            if (isset($_POST['login']) && ($_POST['login'] > 0)) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['username'] = $check_user;
                    header('location:index.php');
                    $notifi = "Login Success";
                } else {
                    $notifi = "check again";
                }
                $notifi = "Đăng ký thành công. Vui lòng đăng nhập";
            }
            include "view/account/register.php";
            break;
        case 'edit_account':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                update_account($user, $pass, $email, $address, $tel, $id);
                $_SESSION['username'] = check_user($user, $pass);
                header('loaction:index.php?act=edit_account');
            }
            include "view/account/edit_account.php";
            break;
        case 'forget_pass':
            if (isset($_POST['send_email']) && ($_POST['send_email'])) {
                $email = $_POST['email'];

                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $notifi = "Mật khẩu là:" . $check_email['password'];
                } else {
                    $notifi = "Không tồn tại";
                }
            }
            include "view/account/forget_password.php";
            break;
        case 'out':
            session_unset();
            header('location:index.php');
            include "view/about.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        case 'contact':

            include "view/contact.php";
            break;


        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
