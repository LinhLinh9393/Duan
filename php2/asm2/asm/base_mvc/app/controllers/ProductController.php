<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Catelory;

class ProductController extends BaseController {
    public $product;
    public $catelory;
   public function __construct(){
        $this->product = new Product();
        $this->catelory= new Catelory();
        //    echo "Đây là Product Controller";
   }
    
    public function index(){
        $products = $this->product->getProduct();
        // var_dump ($products);
        // die;
        return $this->render('product.list', compact(var_name:'products'));

    }

    public function addProduct(){
        $catelorys= $this->catelory->Catelory();
        return $this->render('product.add');
    }

    public function postProduct(){

        if(isset($_POST['gui'])){         
            $error= [];
            
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập lại name"; 
                
            }
            if(empty($_POST['gia'])){
                $error[] = "Bạn vui lòng nhập lại giá"; 
            }
            if(empty($_POST['iddm'])){
                $error[] = "Bạn vui lòng nhập lại "; 
            }
            
            if(count($error)>=1){
                flash('errors',$error,'add-product');
            }else{
                $check = $this->product->addProduct(null,$_POST['name'],$_POST['gia'],$_POST['iddm']);
                if($check){
                    flash('success',"Thêm thành công",'list-product');
                }
            }
        }
    }

    public function detail($id){
        // var_dump($id);
        // die();
        $products = $this->product->detailProduct($id);
        return $this->render('product.edit', compact('products'));
    }
    public function editProduct($id){
        if(isset($_POST['gui'])){
            $error= [];
          
            if(empty($_POST['name'])){
                $error[] = "Bạn vui lòng nhập lại tên"; 
            }
            if(empty($_POST['gia'])){
                $error[] = "Bạn vui lòng nhập lại giá"; 
            }
            if(empty($_POST['iddm'])){
                $error[] = "Bạn vui lòng nhập lại "; 
            }
            if(count($error)>=1){
                flash('errors',$error,'add-product');
            }else{
                $check = $this->product->updateProduct($id,$_POST['name'],$_POST['gia'],$_POST['iddm']);
                if($check){
                    flash('success',"Sửa thành công",'list-product');
                }
            }
        }
    }
    public function deleteProduct($id){
        $check = $this->product->deleteProduct($id);
        if($check){
            flash('success',  "Xóa thành công", 'list-product');
        }
    }
}