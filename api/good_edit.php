<?php
include "../base.php";
dd($_POST);

if(isset($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../icon/".$_FILES['img']['name']);
}



$Good->save($_POST);
to("../backend.php?do=th");
?>