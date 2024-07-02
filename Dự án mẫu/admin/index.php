<?php
include "header.php";
include "../model/pdo.php";
include "../model/list_category.php";
include "../model/list_product.php";
include "../model/account.php";
include "../model/comment.php";




if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_category':
            if (isset($_POST['add_new']) && ($_POST['add_new'])) {
                $tenloai = $_POST['tenloai'];


                insert_list_category($tenloai);
                $notifi = "Success";
            }
            include "category/add.php";
            break;
        case 'list_category':
            $list_category = load_all_list_category();
            include "category/list.php";
            break;
        case 'delete_category':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql = "delete from categories where id=" . $_GET['id'];
                // pdo_execute($sql);
                delete_list_category($_GET['id']);
            }
            $list_category = load_all_list_category();
            include "category/list.php";
            break;

        case 'edit_category':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $list = load_once_list_category($_GET['id']);
            }
            include "category/update.php";
            break;
        case 'update_category';
            if (isset($_POST['update']) && ($_POST['update'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_list_category($id, $tenloai);
                $notifi = "Cập nhật thành công";
            }
            $list_category = load_all_list_category();
            include "category/list.php";
            break;



            // Product




        case 'add_product':
            if (isset($_POST['add_new']) && ($_POST['add_new'])) {
                $id_category = $_POST['id_category'];
                $name_product = $_POST['name'];
                $price = $_POST['price'];
                // Upload file image
                $file_before = "../upload/";
                $image = $_FILES['image']['name'];
                $target_file = $file_before . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // echo "The file". htmlspecialchars(basename($_FILES['image']['tmp_name'])). " has been uploaded ";
                } else {
                    // echo "Sorry, there was an error uploading your file";
                };
                $description = $_POST['description'];

                insert_list_product($name_product, $price, $image, $description, $id_category);
                $notifi = "Success";
            }
            $list_category = load_all_list_category();
            include "product/add.php";
            break;
        case 'list_product':
            if (isset($_POST['list_submit']) && ($_POST['list_submit'])) {
                $keyword = $_POST['keyword'];
                $id_category = $_POST['id_category'];
            } else {
                $keyword = '';
                $id_category = 0;
            }
            $list_category = load_all_list_category();
            $list_product = load_all_list_product($keyword, $id_category);
            include "product/list.php";
            break;
        case 'delete_product';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql = "delete from categories where id=" . $_GET['id'];
                // pdo_execute($sql);
                delete_list_product($_GET['id']);
            }
            $list_product = load_all_list_product("", 0);
            include "product/list.php";
            break;

        case 'edit_product';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = load_once_list_product($_GET['id']);
            }
            $list_category = load_all_list_category();
            include "product/update.php";
            break;
        case 'update_product';
            if (isset($_POST['update']) && ($_POST['update'])) {
                $id = $_POST['id'];
                $id_category = $_POST['id_category'];
                $name_product = $_POST['name'];
                $price = $_POST['price'];
                // Upload file image
                $file_before = "../upload/";
                $image = $_FILES['image']['name'];
                $target_file = $file_before . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // echo "The file". htmlspecialchars(basename($_FILES['image']['tmp_name'])). " has been uploaded ";
                } else {
                    // echo "Sorry, there was an error uploading your file";
                };
                $description = $_POST['description'];

                update_list_product($id, $name_product, $price, $image, $description, $id_category);

                $notifi = "Cập nhật thành công";
            }
            // $list_category = load_all_list_category();
            $list_product = load_all_list_product();
            include "product/list.php";
            break;

            // Account
        case 'list_customers':
            $list_account = load_all_list_account();
            include "account/list.php";
            break;
            // Comment
        case 'list_comment':
            $list_comment = load_all_list_comment(0);
            include "comment/list.php";
            break;

        case 'delete_comment';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql = "delete from categories where id=" . $_GET['id'];
                // pdo_execute($sql);
                delete_list_comment($_GET['id']);
            }
            $list_comment =  load_all_list_comment(0);
            include "comment/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
