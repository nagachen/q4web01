<?php

$row=$User->find(['acc'=>$_SESSION['User']]);
if(isset($_SESSION['cart'])){
?>

<div class="all ct">
    <h3>填寫資料</h3>
    <table style="width:100%">
        <tr>
            <td class="tt">登入帳號</td>
            <td class="pp"><input type="text" name="acc" value="<?=$row['acc'];?>"></td>
        </tr>
        <tr>
            <td class="tt">姓名</td>
            <td class="pp"><input type="text" name="name" value="<?=$row['name'];?>"></td>
        </tr>
        <tr>
            <td class="tt">電子信箱</td>
            <td class="pp"><input type="text" name="email" value="<?=$row['email'];?>"></td>
        </tr>
        <tr>
            <td class="tt">聯絡地址</td>
            <td class="pp"><input type="text" name="addr" value="<?=$row['addr'];?>"></td>
        </tr>
        <tr>
            <td class="tt">聯絡電話</td>
            <td class="pp"><input type="text" name="tel" value="<?=$row['tel'];?>"></td>
        </tr>
        <tr>
            <th class="tt">商品名稱</th>
            <th class="tt">編號</th>
            <th class="tt">數量</th>
            <th class="tt">單價</th>
            <th class="tt">小計</th>
        </tr>
        <?php
        $sum=0;
        foreach($_SESSION['cart'] as $id=>$qt){
            $good=$Good->find($id);
            $sum=($sum + (intval($good['price']) * intval($qt)));
        ?>
        <tr>
            <td class="pp"><?=$good['name'];?></td>
            <td class="pp"><?=$good['no'];?></td>
            <td class="pp"><?=$qt?></td>
            <td class="pp"><?=$good['price'];?></td>
            <td class="pp"> <?= (intval($good['price']) * intval($qt)); ?></td>

        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan=5 class="tt ct"> 合計<?=$sum;?></td>
            
        </tr>
    </table>
    <div class="all ct">
     
       
     <input type="button" value="確定送出"  id="buy">

  
        <a href=""><input type="button" value="返回修改訂單"></a>

    </div>
</div>
<?php
}else{
    echo "<h3>購物車內沒有東西</h3>";
}
?>
<script>
    $("#buy").click(function(){
        
        let data={
            acc:$("input[name='acc']").val(),
            name:$("input[name='name']").val(),
            email:$("input[name='email']").val(),
            addr:$("input[name='addr']").val(),
            tel:$("input[name='tel']").val(),
         
        }
        $.post('./api/order_add.php',data,(res)=>{
            if(res>0){
                alert("訂購成功\n感謝你的選購");
                location.reload();
            }
        })
    })
</script>
