<?php
namespace Controllers;
use Models\Product;
use Models\User;
use Models\Category;
class HomeController extends BaseController {


	public function index(){
		$products = Product::all();
		include_once './views/home/index.php';
	}

	public function dashboard(){
        $totalUser = User::count();
        $totalCategory = Category::count();
        $totalProduct = Product::count();

	    $this->render('admin.dashboard', [
	        'userCount' => $totalUser,
            'cateCount' => $totalCategory,
            'proCount' => $totalProduct
        ]);
    }
}


 ?>