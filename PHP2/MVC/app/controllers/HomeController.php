<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class HomeController extends BaseController{
    

    public function index(){
        $products = Product::all();
        return $this->render('home.trang-chu',['products'=>$products]);
    }
}

?>