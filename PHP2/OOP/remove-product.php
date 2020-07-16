<?php 

require_once './Product.php';
require_once './Model.php';
$id = $_GET[id];
Product::delete($id);
header("location:index.php");


?>

