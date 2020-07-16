<h1 style = "color: red;text-align:center;font-style;">4 tính chất</h1>
<?php

// Tính Đa Hình: Lớp B kế thừa lớp A thì trong nội dung của lớp B được phép định nghĩa lại/ ghi đè lên những giá trị, thuộc tính/phương thức 
// do lớp A định nghĩa ra. Các thực thể được tạo ra từ lớp B sẽ được ưu tiên thực thi các thiết lập của lớp B.

class PhepTinh{
    var $so1;
    var $so2;

    function __construct($so1,$so2){
        $this->so1 = $so1;
        $this->so2 = $so2;
    }
    function phepTinh(){
        return ($this->so1 + $this->so2)/4;
    }
}
class PhepTinhCon extends phepTinh{
    function phepTinh(){
        return ($this->so1 + $this->so2)/2;
        
    }
}
$thuan = new PhepTinh(3,5);
echo "Tính đa hình"."<pre>";
echo $thuan->phepTinh();

// tính kế thừa
class ConMeo{
    var $ten = "Meo";

    function tenmeo(){
        $name = $this->ten;
    }
}
class ConMeoCon extends ConMeo{

}
$thuan = new ConMeo('meo');
echo $thuan->tenmeo()
?>
