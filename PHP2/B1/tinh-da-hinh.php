<?php

//TÍnh đa hình: Lớp B kế thừa lớp A thì trong nội dung của lớp B được phép định nghĩa lại/ ghi đè lên những giá trị, thuộc tính/phương thức 
// do lớp A định nghĩa ra. Các thực thể được tạo ra từ lớp B sẽ được ưu tiên thực thi các thiết lập của lớp B.

class PhuHuynh{
    var $ten;
    var $toan;
    var $van;
    var $tanh;

    function __construct($ten,$toan,$van,$tanh){
        $this->ten = $ten;
        $this->toan = $toan;
        $this->van = $van;
        $this->tanh = $tanh;
    }

    function tinhDiemTB(){
        return round(($this->toan + $this->van +$this->tanh)/3,2);
    }
    function soSanhDiem(){
        $diemNgayXua = parent::tinhDiemTB();
        $diemNgayNay = $this->tinhDiemTB();
        return "Điểm trung bình tính theo cách cũ: $diemNgayXua - theo cách tính ngày nay $diemNgayNay";
    }
}

class SinhVien extends PhuHuynh{
    function tinhDiemTB(){
        return round((($this->toan*3) + $this->van +($this->tanh*2))/6,2);
    }
}
$thuan = new PhuHuynh('Thuan', 9, 8, 8);
echo $thuan->soSanhDiem();

?>