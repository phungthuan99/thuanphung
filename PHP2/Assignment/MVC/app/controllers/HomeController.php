<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class HomeController extends BaseController{
    

    public function index(){
        $products = Product::all();
        return $this->render('home.trang-chu',['products'=>$products]);
    }

    public function hello(){
        include_once './app/views/home/hello-pt15112-web.php';
    }
    
}

?>