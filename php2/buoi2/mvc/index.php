<?php
    require_once "controllers/ProductController.php";
    $url= isset($_GET['url'])? $_GET['url'] : "/";
    switch($url){
        case "/":
            $productController=new ProductController();
            $productController->listProduct();
            break;
        // case "add":
        //     if (isset($_POST['Save'])) {
        //         addProduct($_POST['tensanpham'], $_POST['gia']);
        //     }
        //     addProduct($tensp,$gia);
        //     break;
        // case "edit":
        //     editProduct();
        //     break;
        // case "delete":
        //     echo "Bạn về trang xoá";
        //     break;
    }












?>