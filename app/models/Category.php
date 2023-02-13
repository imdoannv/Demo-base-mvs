<?php
namespace App\Models;

class Category extends BaseModel{
    protected $table = "category";

    // Ham lay danh sach Category
    public function getCategory(){
        $sql = "select * from $this->table";
        // Set cau truy van cho class basemodel
        $this -> setQuery($sql);
        return $this->loadAllRows();
    }
}

