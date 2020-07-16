<?php
// hàm sinh static là loại hàm có thể thực thi ngay mà không cần tạo thực thể mới
// Cú pháp : static function tenham(){}
//thực thi ClassName::
class SinhVien{

    // construct
    function __construct()
    {
        $this->table = "sinhvien";
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=pt15112-web;charset=utf8","root","");

    }
    // static
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
    
    static function where($ten, $like, $giatricantim){
        //return ra kết quả câu lệnh
        // select * from sinh vien where cot phepsosanh giatri
        $model = new static();
        $sql = "select * from $model->table where ten like  '$giatricantim'";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}

$dsSinhVien = SinhVien::where('ten', 'like', '%Huu%');
// $dsSinhVien = SinhVien::find(2);
// $dsSinhVien = SinhVien::all();
echo "<pre>";
var_dump($dsSinhVien);

?>