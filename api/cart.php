<?php
include_once "../base.php";

$data=$Good->find($_POST['id']);

$_SESSION['cart']["{$_POST['id']}"]=$_POST['count'];

to("../index.php?do=cart");
