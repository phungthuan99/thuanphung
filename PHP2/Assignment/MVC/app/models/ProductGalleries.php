<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class ProductGalleries extends Model{
        protected $table = 'product_galleries';
        public $timestamps = false;
        protected $fillable = ['id','product_id'];

        public function getProductId(){
            $pro = Product::find($this->product_id);
            if($pro){
                return $pro->name;
            }
    
            return null;
        }
}

?>