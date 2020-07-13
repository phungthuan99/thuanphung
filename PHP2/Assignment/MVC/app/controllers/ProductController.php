<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\ProductGalleries;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Category;
class ProductController extends BaseController{

    public function product(){
        $products = Product::all();
        return $this->render('home.product',['products'=>$products]);
    }

    public function productGalleries(){
        $product_galleries = ProductGalleries::all();
        return $this->render('home.product-galleries',['product_galleries'=>$product_galleries]);
    }

    public function detail($id){
        $id = $_GET['id'];
        $product = Product::find($id);
        $this->render('home.chi-tiet-product',['product'=>$product]);
    }
    public function delete(){
    	$id = $_GET['id'];
    	Product::destroy($id);
    	header("location: " . BASE_URL . 'product');
    }

    public function addForm(){
        $categories = Category::all();
        $this->render('home.add-product',['categories'=>$categories]);
    }

    public function saveAddProduct(){
        $requestData = $_POST;
        $imgFile = $_FILES['image'];

        $model = new Product();
        $model->fill($requestData);

        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            $destination = 'app/public/upload/products' . $filename;
            move_uploaded_file($imgFile['tmp_name'], $destination);
            $filename = $destination;
        }
        $model->image = $filename;
        $model->save();
        header('location: '. BASE_URL . 'product');
        
    }

    public function editForm(){
        $id = $_GET['id'];
        $model = Product::find($id);
        $categories = Category::all();
        $this->render('home.edit-product',['model'=>$model]);

    }

    public function saveEdit(){
        $id = $_GET['id'];
        $model = Product::find($id);
        if(!$model){
            header("location: " . BASE_URL .'product');
        }
        // gán dữ liệu cho model
        $model->fill($_POST);
        
        // upload ảnh
        $file = $_FILES['image'];
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            $destination = "app/public/upload/products/" . $filename;
            move_uploaded_file($file['tmp_name'], $destination);
            $model->image = ltrim($destination);
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL . 'product');
        die;
    }

    public function productGallery(){
        
    }
    public function countProduct(){
        $count = Product::count('id');
        // dd($count);
        
    }

    

}

?>