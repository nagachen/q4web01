<?php
session_start();
date_default_timezone_set('Asia/Taipei');
include_once __DIR__ . "/controller/Type.php";

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

$Type=new Type;
?>