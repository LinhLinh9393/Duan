<?php
    require_once "controllers/ProductController.php";
    $url= isset($_GET['url'])? $_GET['url'] : "home";
    switch($url){
        case "home":
            $productController=new ProductController();
           $productController->listProduct();
            break;
        case "add_product":
            $productController=new ProductController();
            if (isset($_POST['Save'])) {
                $productController->addPro($_POST['name'], $_POST['price'],$_FILES['image'],$_POST['iddm']);
            }
            $productController->addProduct();
            break;
        case 'update-product':
            $productController=new ProductController();
            if (isset($_POST['update'])) {
                $productController->postUpdateProduct($_POST['name'], $_POST['price'],$_FILES['image'],$_POST['iddm']);
            }
            $productController->updateView();
            break;
        case 'delete-product':
            $productController=new ProductController();
            $productController->postDeleleProduct();
            break;
    }
