<?php
//Tạo ra từng hàm để thực thi từng chức năng riêng biệt 
require_once "models/danhmuc.php";
require_once "models/Product.php";
class ProductController{
     function listProduct(){
        $product = new Product();
        $istKhoaHoc = $product->getAllProduct();
        // echo "<pre>";
        // var_dump($istProduct);
        // die();
        include "view/Product/list.php";
    }

    function addProduct(){
        $danhmuc = new danhmuc();
        $listDanhMuc= $danhmuc->getAllDanhMuc();
        include "view/Product/add.php";
    }

    function addPro($name, $price, $image, $iddm){
        $product = new Product();
        // thư mục sẽ được lưu ảnh vào thư mục image
        $targetDir = "img/";
        //Đường dẫn đến file được lưu
        $targetFile = $targetDir.$image['name'];
        // Tiến hành upload file ảnh
        if(move_uploaded_file($image['tmp_name'],$targetFile)){
            $image_url = $targetFile;
        }
        $check = $product->insertProduct($name,$price,$image_url,$iddm);
        if (!$check){
            echo '<script>alert("Thêm khoá học thành công")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    }

    function updateView(){
        $products = new Product();
        $danhmuc = new danhmuc();
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
        $listDanhMuc= $danhmuc->getAllDanhMuc();
        $product = $products->getProduct($product_id);
        include "view/Product/update.php";
    }

function postUpdateProduct($name, $price, $image, $iddm){
    $products = new Product();
    $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

    $product = $products->getProduct($product_id);
    if ($image['size'] != 0) {
        $targetDir = "img/";
        $targetFile = $targetDir . $image['name'];
        if (move_uploaded_file($image['tmp_name'], $targetFile)) {
            $image_url = $targetFile;
        }
    } else {
        $image_url = $product['image'];
    }


    $check = $products->updateProduct($product_id, $name, $price, $image_url, $iddm);

    if (!$check) {
        echo '<script>alert("Cập nhật khoá học thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Cập nhật khoá học thất bại")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
}

function postDeleleProduct(){
    $product = new Product();
    $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
    $product->deleteProduct($product_id);
    echo '<script>alert("Xoá sản phẩm thành công")</script>';
    echo '<script>window.location.href = "index.php";</script>';
}

}
?>