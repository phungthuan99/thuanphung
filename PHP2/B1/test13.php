<?php 		

/**
 * 
 */
class Chim
{
	function an($gamthucan){
		$this->cannang+=$gamthucan;
	}


	function divesinh(){

		if ($this->cannang>500) {
			$this->cannang-=50;

		}else {
			$this->cannang-=10;
		}
	}

	function biban($giamtuoitho){

		if ($this->tuoitho>0) {
			$this->tuoitho-=$giamtuoitho;
		}
		if ($this->tuoitho<=0){

			$this->tuoitho="Đ";	
		}


	}


}
echo "<pre>";
$ha=new Chim();
$ha->ma="ph08987";
$ha->cannang="150";
$ha->maulong="đỏ";
$ha->tuoitho="10";


$nhu=new Chim();
$nhu->ma="ph0000";
$nhu->cannang="500";
$nhu->maulong="vàng";

// var_dump($ha);
// $ha->an(100);
// var_dump($ha);
// $ha->divesinh();
var_dump($ha);
$ha->biban(rand(1, 10));
var_dump($ha);

// var_dump($nhu);
// $nhu->an(100);
// var_dump($nhu);
// $nhu->divesinh();
// var_dump($nhu);

?>