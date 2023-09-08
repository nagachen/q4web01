<?php
include_once "../base.php";

$Good->save($_GET);
to("../backend.php?do=th");
?>