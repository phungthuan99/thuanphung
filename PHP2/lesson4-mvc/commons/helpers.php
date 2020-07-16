<?php
define('BASE_URL', 'http://localhost:81/PHP2/lesson4-mvc/');
define('ADMIN_ASSET_URL', BASE_URL . 'public/admin/');

define('DEFAULT_IMAGE',  BASE_URL . 'public/images/default-image.jpg');


function dd($val){
    echo "<pre>";
    var_dump($val);die;
}