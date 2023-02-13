<?php

namespace App\Models;
 class Product extends BaseModel{
    protected $table = "product";


// Ham lay danh sach Product
    public function getProduct(){
        $sql = "select * from $this->table";
        // Set cau truy van cho class basemodel
        $this -> setQuery($sql);
        return $this->loadAllRows();
    }
 }