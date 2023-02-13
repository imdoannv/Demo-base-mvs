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
}