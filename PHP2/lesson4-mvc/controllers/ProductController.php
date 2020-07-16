<?php
namespace Controllers;
use Models\Product;
use Models\Category;
class ProductController extends BaseController {
	public function index(){
		// 1. Lấy toàn bộ sản phẩm
        $products = Product::all();
        $this->render('product.index', [
            'products' => $products
        ]);
	}

	public function remove($id){

        // lấy ra sản phẩm dựa vào id
        $product = Product::find($id);
        if($product == null){
            header("location: " . BASE_URL . "products?msg=id không tồn tại");
            die;
        }

        // xoá sản phẩm dựa vào id
        Product::destroy($id);
        header("location: " . BASE_URL . "products?msg=Xóa thành công!");
        die;
    }

    public function addForm(){

	    $cates = Category::all();

	    $this->render('product.add', [
	        'cates' => $cates
        ]);
    }

    public function editForm($id){
	    $cates = Category::all();
	    // lấy ra dữ liệu của sản phẩm theo id
        $product = Product::find($id);
        if(!$product){
            header("location: " . BASE_URL . "products?msg=id không tồn tại");
            die;
        }

        $this->render('product.edit', [
            'cates' => $cates,
            'product' => $product
        ]);
    }

    public function saveAdd(){
	    $model = new Product();
        // gán dữ liệu cho model
        $model->fill($_POST);
        // validate dữ liệu thêm 1 lần nữa bằng php => form
        // lưu file ảnh
        $image = $_FILES['image'];
        $filename = "";
        if($image['size'] > 0){
            $filename = "public/images/" . uniqid() . '-' . $image['name'];
            move_uploaded_file($image['tmp_name'], $filename);
        }
        $model->image = $filename;
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL . 'products');
        die;
    }

    public function saveEdit(){
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
        $model = Product::find($id);
        if(!$model){
            header("location: " . BASE_URL . "products?msg=id không tồn tại");
            die;
        }

        // gán dữ liệu cho model
        $model->fill($_POST);
        // validate dữ liệu thêm 1 lần nữa bằng php => form
        // lưu file ảnh
        $image = $_FILES['image'];
        $filename = $model->image;
        if($image['size'] > 0){
            $filename = "public/images/" . uniqid() . '-' . $image['name'];
            move_uploaded_file($image['tmp_name'], $filename);
        }
        $model->image = $filename;
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL . 'products');
        die;
    }

    public function checkNameExisted(){
	    $name = $_POST['name'];
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
	    $queryData = Product::where('name', $name);

	    if($id != -1){
	        $queryData->where('id', '!=', $id);
        }
        $numberRecord = $queryData->count();

	    echo $numberRecord == 0 ? "true" : "false";
    }
}

 ?>