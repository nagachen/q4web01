<?php
session_start();
date_default_timezone_set('Asia/Taipei');
include_once __DIR__ . "/controller/Type.php";
include_once __DIR__ . "/controller/Good.php";
include_once __DIR__ . "/controller/Admin.php";
include_once __DIR__ . "/controller/User.php";
include_once __DIR__ . "/controller/Bottom.php";
include_once __DIR__ . "/controller/Order.php";





function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

$Type=new Type;
$Good=new Good;
$Admin=new Admin;
$User=new User;
$Bottom=new Bottom;
$Order=new Order;


?>