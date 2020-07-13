<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
class UserController extends BaseController{
    
    public function user(){
        $users = User::all();
        return $this->render('home.user',['users'=>$users]);
    }

    public function addUser(){
        $users = User::all();
        $this->render('home.add-user',['users'=>$users]);
    }

    public function saveAddUser(){
        $requestData = $_POST;
        $imgFile = $_FILES['avatar'];

        $model = new User();
        $model->fill($requestData);

        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            $destination = 'app/public/upload/products' . $filename;
            move_uploaded_file($imgFile['tmp_name'], $destination);
            $filename = $destination;
        }
        $model->avatar = $filename;
        $model->save();
        // dd($model);
        header('location: '. BASE_URL . 'user');
    }

}

?>