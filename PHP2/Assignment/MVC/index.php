<?php
$url = isset($_GET['url']) ? $_GET['url']: "/";



require_once'./common/util.php';
require_once'./vendor/autoload.php';
require_once'./common/database.php';



use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use App\Controllers\UserController;


//Product
switch($url){
    case '/':
        $ctr = new HomeController();
        $ctr->index();
    break;
    case 'product-galleries':
        $ctr = new ProductController();
        $ctr->productGalleries();
    break;
    case 'product':
        $ctr = new ProductController();
        $ctr->product();
    break;
    case 'delete-product':
        $ctr = new ProductController();
        $ctr->delete();
    break;
    case 'chi-tiet-product':
        $ctr = new ProductController();
        $ctr->detail('id');
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
    case 'product-galleries':
        $ctr = new ProductController();
        $ctr->productGallery();
        break;
        


        //Invoices
    case 'invoice':
        $ctr = new InvoiceController();
        $ctr->invoice();
        break;
    case 'invoice-detail':
        $ctr = new InvoiceController();
        $ctr->invoiceDetail();
        break;
    case 'chi-tiet-hoa-don':
        $ctr = new InvoiceController();
        $ctr->chiTietHD('id');
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

        //User
    case 'user':
        $ctr = new UserController();
        $ctr->user();
        break;
    case 'add-user':
        $ctr = new UserController();
        $ctr->addUser();
        break;
    case 'saveAdd-user':
        $ctr = new UserController();
        $ctr->saveAddUser();
        break;
    case 'hello-pt15112-web':
        $ctr = new HomeController();
        $ctr->hello();
        break;

    default:
        echo "đường dẫn không tồn tại";
    break;
}
?>
