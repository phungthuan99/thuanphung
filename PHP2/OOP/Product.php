<?php

require_once './Model.php';
require_once './Category.php';
class Product extends Model{
    protected $table = "products";
    public function getCateName(){
        $cate = Category::find($this->cate_id);
        if (!$cate) {
            return null;
        }
        return $cate->cate_name;
    }
    
}

?> 