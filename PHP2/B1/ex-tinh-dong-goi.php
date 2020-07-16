<?php
// Tính đóng gói
class ConCho{

    protected $cannang = 20;
    private $ten = "Lucky";
    private $tuoi = 5;
    private $maulong = "vàng";
    private $chieucao = 80;


    protected $sothich = "sủa";
    protected $crush = "chó hàng xóm";
    protected $tocchay = 80;
    protected $ghet = "Exciter";
    protected $thich = "Ăn";


    public $khuugiac = 1000000;
    public $tamnhin = 3;
    public $hohang = "Sói";
    public $totien = "Sói ";
    public $thucan = "Ăn tạp";


    
}
class ConMeo extends ConCho{
    public function thongTin(){
        echo $this->cannang;
    }
}

$dog = new ConMeo();
echo " Cân nặng là: " .$dog->thongTin(20);


?>