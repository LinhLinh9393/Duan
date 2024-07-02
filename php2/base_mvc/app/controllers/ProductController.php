<?php
namespace App\Controllers;
class ProductController extends BaseController{
    public function __construct(){
        echo "Đây là file ProdectController";
    }
    public function index(){
        echo "1 2 3";
        return $this->render(viewFile: 'product.list');
    }
}