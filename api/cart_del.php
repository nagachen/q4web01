<?php

include_once "../base.php";
unset($_SESSION['cart']["{$_POST['id']}"]);
to("../index.php?do=cart");


?>