<?php
include_once "../base.php";

$Good->del($_GET['id']);
to("../backend.php?do=th");
?>