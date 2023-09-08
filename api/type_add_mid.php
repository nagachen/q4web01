<?php
include "../base.php";
dd($_POST);
$_POST['big']=$_POST['opt'];
$_POST['name']=$_POST['optName'];
unset($_POST['opt']);
unset($_POST['optName']);
$Type->save($_POST);
to("../backend.php?do=th");
?>