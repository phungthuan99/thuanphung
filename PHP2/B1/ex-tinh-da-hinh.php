<?php

// Tạo lớp động vật có các thuộc tính:
// tên
// chiều cao
// cân nặng
// định nghĩa ra hàm tinhBMI()

// tạo ra thực thể, nhập thông tin và lấy video

// tạo lớp ConNguoi kế thừa DongVat()
// bổ sung
//BMI <18 = gầy
// 18 < BMI <= 24  = bình thường
// BMI < 24 = béo
// y/c viết  nội dung bổ sung cho hàm tinhBMI() của lớp ConNguoi() => thực thể có chỉ số BMI = xxx,cơ thể gầy/bình thường/béo.

class DongVat{
    var $ten;
    var $cannang;
    var $chieucao;

    function __construct($ten,$cannang,$chieucao){
        $this->ten = $ten;
        $this->cannang = $cannang;
        $this->chieucao = $chieucao;
    }
    function tinhBMI(){
        return round($this->cannang / ($this->chieucao * 2),2);

    }
}

// $thuan = new DongVat('thuan', 52, 1.67);

// echo $thuan->tinhBMI();


class ConNguoi extends DongVat{
    function tinhBMI(){
        $bmi = parent::tinhBMI();
        $trangthai = "";
        if ($bmi < 18) {
            $trangthai = " gầy";
        } else if($bmi >=18 && $bmi <=24 ) {
            $trangthai = " bình thường";
        }else{
            $trangthai = " béo";
        }
        return $trangthai;
    }
}
// $thuan = new ConNguoi('thuan',52,1.66);
// echo $thuan->tinhBMI();


class ConKhi extends DongVat{
    function tinhBMI(){
        return round(($this->cannang+($this->cannang*0.3)) / ($this->chieucao *2),2);
        $trangthai = "";
        if ($bmi <= 16) {
            $trangthai = " gầy";
        } else if($bmi >=16 && $bmi <=22 ) {
            $trangthai = " bình thường";
        }else{
            $trangthai = " béo";
        }
        return $trangthai;
    }
        
}

$pkt = new ConKhi('pkt',16,1.1);
echo $pkt->tinhBMI();

?>