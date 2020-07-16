<?php
$url = isset($_GET['url']) ? $_GET['url']: "/";



require_once'./common/util.php';
require_once'./vendor/autoload.php';
require_once'./common/database.php';



use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;


//Product
switch($url){
    case '/':
        $ctr = new HomeController();
        $ctr->index();
    break;
    case 'product':
        $ctr = new ProductController();
        $ctr->product();
    break;
    case 'delete-product':
        $ctr = new ProductController();
        $ctr->delete();
    break;
    case 'chi-tiet':
        $ctr = new ProductController();
        $ctr->detail('');
    break;
    case 'add-product':
        $ctr = new ProductController();
        $ctr->addForm();
    break;
    case 'saveAdd-product':
        $ctr = new ProductController();
        $ctr->saveAddProduct();
    break;
    case 'demo-layout':
        $ctr = new HomeController();
        $ctr->testLayout();
        break;
    case 'edit-product':
        $ctr = new ProductController();
        $ctr->editForm();
        break;
    case 'save-edit':
        $ctr = new ProductController();
        $ctr->saveEdit();
        break;



        
        //Category
    case 'add-category':
        $ctr = new CategoryController();
        $ctr->addCate();
        break;
    case 'saveAdd-category':
        $ctr = new CategoryController();
        $ctr->saveAddCate();
        break;
    case 'category':
        $ctr = new CategoryController();
        $ctr->category();
        break;
    case 'delete-category':
        $ctr = new CategoryController();
        $ctr->deleteCate();
        break;
    case 'edit-category':
        $ctr = new CategoryController();
        $ctr->editCate();
        break;
    case 'saveEdit-category':
        $ctr = new CategoryController();
        $ctr->saveEditCate();
        break;
    default:
        echo "đường dẫn không tồn tại";
    break;
}
?>
