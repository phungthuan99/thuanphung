<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'views', 'image', 'cate_id', 'short_desc', 'star', 'detail'];

    public function getCateName()
    {
        $cate = Category::find($this->cate_id); //Product
        if ($cate) {
            return $cate->cate_name; //category
        }

        return null;
    }


    public function countProduct()
    {
        $count = Product::all();
        // dd($count);

    }
}
