<?php
// tạo lớp ConNguoi
// gồm các thuộc tính
//tên, ngày sinh, giới tính, chiều cao, cân nặng.
//tạo 1 thực thể thuộc lớp connguoi với đầy đủ các giá trị cho các thuộc tính trên
//tính BMI (cân nặng / bình phương chiều  cao) x 100

class ConNguoi{
    var $ten;
    var $ngaysinh;
    var $gioitinh;
    var $chieucao;
    var $cannang;
    var $muaoto = [];
    var $concai = [];

    function getBMI(){
        $binhphuong = $this->chieucao/100;
        $bmi = ($this->cannang / pow( $binhphuong, 2));
        return $bmi;
    }

    function getAge(){
        // dựa vào ngày sinh thực thể đang thực thi hành động, lấy ra số tuổi của người này
        //lấy năm hiện tại
        // lấy năm ngày sinh
        // lấy năm hiện tại trừ năm ngày sinh
        // trả về kết quả
        $now = getDate();
        $currentYear = $now['year'];

        $date = DateTime::createFromFormat('Y/m/d', $this->ngaysinh);
        $birthYear = $date->format('Y');
        $age = $currentYear - $birthYear;
        return $age;

    }
    function sinhCon($ten, $gioitinh, $ngaysinh, $chieucao, $cannang){
        // tạo ra thực thể với lớp con người
        // với các thông số được cung cấp bởi các tham số
        // add thực thể vừa được tạo ra thanh một phần tử con của thực thể
        // đang thực thi hành động
        
        $obj = new ConNguoi();
        $obj->ten = $ten;
        $obj->gioitinh = $gioitinh;
        $obj->ngaysinh = $ngaysinh;
        $obj->chieucao = $chieucao;
        $obj->cannang = $cannang;
        $this->concai[] = $obj;
    }
    function muaOto($hangxe, $mauxe, $giatien){
        $obj =  new Oto();
        $obj->hangxe = $hangxe;
        $obj->mauxe = $mauxe;
        $obj->giatien = $giatien;
        $this->muaoto = $obj;
    }
}
class Oto{
    
}
    $thuan = new ConNguoi();
    $thuan->ten = "Phùng Khắc Thuận";
    $thuan->gioitinh = "Nam";
    $thuan->ngaysinh = "1999/11/02";
    $thuan->chieucao = 166;
    $thuan->cannang = 52;

    // $thuan->sinhCon('Vợ Của Thuận', 'Nữ', '2000/04/22', 160, 46);
    // $thuan->sinhCon('Con Của Thuận', 'Nam', '2020/01/22', 45, 4);
    // $thuan->sinhCon('Mẹ Của Thuận', 'Nữ', '1971/03/22', 154, 49);

    $thuan->muaOto('Lexus', 'trắng', '5 tỷ');
    $thuan->muaOto('Audi', 'Đỏ', '6 tỷ');


    echo "<pre>";
    var_dump($thuan);
    // echo $thuan->getBMI();
    // echo "<pre>";
    // echo $thuan->getAge();
?>