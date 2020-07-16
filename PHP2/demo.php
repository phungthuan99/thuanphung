
<?php

class Person{

    public $ten = "thuan";
    protected $tuoi = 20;
    private  $cannang = 51;

    
    protected function getTuoi(){
        return $this->tuoi;

    }
    private function getCanNang(){
        return $this->cannang;

    }
    
}
class Thuan extends Person{

    protected function getTuoi(){
        return $this->tuoi;
    }
    private function getCanNang(){
        return $this->cannang;
    }
}
$thuan = new Thuan();
echo "<pre>";
echo $thuan->ten;
echo "<pre>";
echo $thuan->getTuoi();
echo "<pre>";
echo $thuan->getCanNang();
echo "<pre>";

?>