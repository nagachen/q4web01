<?php
include_once "../base.php";
$chk=${$_POST['table']}->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if($chk>0){
    $_SESSION["{$_POST['table']}"]=$_POST['acc'];
   echo 1;
}else{
    echo 0;
}
?>