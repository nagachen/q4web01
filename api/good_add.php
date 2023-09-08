<?php
include "../base.php";
 dd($_POST);
 dd($_FILES);
if(isset($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../icon/".$_FILES['img']['name']);
}
$_POST['sh']=1;

$_POST['no']=rand(100000,999999);
$Good->save($_POST);
to("../backend.php?do=th");
?>