<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{

    public function category(){
        $categories = Category::all();
        $this->render('home.category',['categories'=>$categories]);
    }
    public function addCate(){
        $categories = Category::all();
        $this->render('home.add-category',['categories'=>$categories]);
    }

    public function saveAddCate(){
        $requestData = $_POST;
        $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: '. BASE_URL . 'category');
    }

    public function editCate(){
        $id = $_GET['id'];
        $model = Category::find($id);
        $categories = Category::all();
        // var_dump($model);die;
        $this->render('home.edit-category',['model'=>$model]);

    }

    public function saveEditCate(){
        $id = $_GET['id'];
        $model = Category::find($id);

        if(!$model){
            header("location: " . BASE_URL .'category');
        }
        $model->fill($_POST);
        $model->save();
        header('location: ' . BASE_URL . 'category');
    }

    public function deleteCate(){
        $id = $_GET['id'];
        Category::destroy($id);
        header("location:" . BASE_URL . 'category');
    }

}

?>