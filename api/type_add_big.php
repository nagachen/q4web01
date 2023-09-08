<?php
include "../base.php";
// dd($_POST);
$_POST['name']=$_POST['big'];
unset($_POST['big']);
$Type->save($_POST);
to("../backend.php?do=th");
?>