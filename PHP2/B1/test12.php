<?php 

/**
 * 
 */
class Nguoiyeu
{
	// dịnh nghĩa thuộc tính
	
	var $ten;
	var $tuoi;
	var $diachi;
}

echo "<pre>";
//var_dump(1);
$ha= new Nguoiyeu();
$ha->ten="luong thi nhu";
$ha->tuoi="19";
$ha->diachi="thai binh";
$thuan= new Nguoiyeu();
$thuan->ten="thuan skyyy";
$thuan->tuoi="19";
$thuan->diachi="hoa binh";
var_dump($ha,$thuan);
//var_dump($thuan);

 ?>