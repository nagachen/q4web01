<?php

include_once "../base.php";
$Admin->del($_GET['id']);
to("../backend.php?do=admin");


?>