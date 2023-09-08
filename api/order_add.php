<?php
    include_once "../base.php";
$total=0;
foreach($_SESSION['cart'] as $id=>$qt){
    $price=($Good->find($id))['price'];
    $total += ((intval($price))*(intval($qt)));
}

$_POST['total']=$total;
$_POST['cart']=serialize($_SESSION['cart']);
$no=date('Ymd').rand(100000,999999);
$_POST['no']=$no;
 echo $Order->save($_POST);
 unset($_SESSION['cart']);






?>