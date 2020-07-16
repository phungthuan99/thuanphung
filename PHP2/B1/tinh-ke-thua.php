<?php
// Tính kế thừa
// nếu lớp B là lớp con của lớp A(B kế thừa A), thì các thực thể được tạo ra 
// từ lớp B sẽ được truy cập vào các thuộc tính và phương thức định nghĩa của lớp A
/*
class Animal {
    var $ten = "cat";
    var $tuoi = 20;
    var $cannang = 100;

    function dichoi(){
        return $this->$ten. "đang được dắt đi chơi";
    }
    function duocan($kg){
        $this->cannang +=$kg;
    }
}

class ConMeo extends Animal{

}
$thuan = new ConMeo();
echo $thuan->dichoi();
// var_dump($thuan);
*/
class BaseModel{

    function __construct()
    {
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=pt15112","root","");

    }
    static function all(){
        $model = new static();
        $sql = "select * from $model->table";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    static function find($id){
        $model = new static();
        $sql = "select * from $model->table where id = $id";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}
class Category extends BaseModel{
    var $table = "categories";

}
class Product extends BaseModel{
    var $table = "products";

}
// $cates = Category::all();
$pros = Product::all(3);
$pros = Product::find(3);



echo "<pre>";
var_dump($pros);
?>