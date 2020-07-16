<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'views', 'cate_id',
                            'short_desc', 'star', 'detail'];
    protected $attributes = [
        'image' => "public/images/default-image.jpg",
    ];

    public function getCategoryName(){
        $cate = Category::find($this->cate_id);
        if($cate){
            return $cate->cate_name;
        }

        return null;
    }
}


?>