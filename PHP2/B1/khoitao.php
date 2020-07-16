<?php

class SinhVien{

    //  __construct()
    //Hàm được thực thi ngay khi một thực thể mới được tạo ra
    // 1. set Giá trị cho các thuộc tính của thực thể ngay lập tức
    function __construct()
    {
        $this->table = "sinhvien";
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=pt15112-web","root","");

    }
    
    function getAll(){
        $sql = "select * from $this->table";
        $stmt = $this->connect->prepare($sql);
        $stmt = execute();
        $result = $stmt->fetchAll();
        return $result;

    }
}

$student = new SinhVien();
$dsSinhVien = $student->getAll();
var_dump($dsSinhVien);

?>