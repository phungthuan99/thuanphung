<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class Product extends Model{
        protected $table = 'products';
        public $timestamps = false;
        protected $fillable = ['name','price','views','image','cate_id','short_desc','star','detail'];

        public function getCateName(){
            $cate = Category::find($this->cate_id);
            if($cate){
                return $cate->cate_name;
            }
    
            return null;
        }
}

?>