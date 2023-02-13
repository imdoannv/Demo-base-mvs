<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController{
    public $category;
    public function __construct(){

        $this->category = new Category();
    }

    public function index(){
        // Goi phuong thuc getcategy trong nay
        $categories = $this->category->getCategory();

        $this->render('category.index',compact('categories'));



    }
}