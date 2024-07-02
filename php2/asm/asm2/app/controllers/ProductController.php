<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController extends BaseController{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function getStudent() {
        $products = $this->product->getListProduct();
        return $this->render('product.index',compact('products'));
    }
}