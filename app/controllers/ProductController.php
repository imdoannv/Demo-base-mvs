<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController{
    public $product;
    public function __construct(){
        $this->product = new Product();
    }
    public function index(){
        // Goi phuong thuc getproduct trong nay
        $products = $this->product->getProduct();

        // Gọi view index vào đây và băn dứ liệu products sang
        $this->render('product.index',compact('products'));

    }
    public function add(){
        $this->render('product.add');
    }
    public function postProduct(){
        if(isset($_POST['them'])){
            delete_er_sc();
            // Khởi tạo 1 mảng error bằng rỗng
            $errors = [];
            // Nếu như bỏ trống tên sản phẩm
            if(empty($_POST['ten_sp'])){
                // Push lỗi vào trong sản phẩm
                $errors[] = "Không được bỏ trống tên sản phẩm";
            }
            if(empty($_POST['don_gia'])){
                // Push lỗi vào trong sản phẩm
                $errors[] = "Không được bỏ trống giá sản phẩm";
            }
            // Nếu có lỗi thì error có phần tử
            if(count($errors) > 0){
                $_SESSION['errors'] = $errors;
                header('location:'.BASE_URL.'add-product');
            }else{
                $result = $this->product->addProduct(null,$_POST['ten_sp'],$_POST['don_gia']);
                if($result){
                    $_SESSION['success'] = "Thêm sản phẩm thành công";
                    header('location:'.BASE_URL.'add-product');
                }
            }
        }
    }
}