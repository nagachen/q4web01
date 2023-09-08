<?php
$row=$Order->find($_GET['id']);
?>
<div class="all ct">
    <h3>訂單編號<?=$row['no'];?>的詳細資料</h3>
    <table>
        <tr>
            <td class="tt">會員帳號</td>
            <td class="pp"><?=$row['acc'];?></td>
        </tr>
        <tr>
            <td class="tt">姓名</td>
            <td class="pp"><?=$row['name'];?></td>
        </tr>
        <tr>
            <td class="tt">電子信箱</td>
            <td class="pp"><?=$row['email'];?></td>
        </tr>
        <tr>
            <td class="tt">聯絡地址</td>
            <td class="pp"><?=$row['addr'];?></td>
        </tr>
        <tr>
            <td class="tt">聯絡電話</td>
            <td class="pp"><?=$row['tel'];?></td>
        </tr>
        <tr>
            <th class="tt">商品名稱</th>
            <th class="tt">編號</th>
            <th class="tt">數量</th>
            <th class="tt">單價</th>
            <th class="tt">小計</th>
        </tr>
        <?php
        $goods=unserialize($row['cart']);
        foreach($goods as $id=>$qt){
            $good=$Good->find($id);
        ?>
        <tr>
            <td class="pp"><?=$good['name'];?></td>
            <td class="pp"><?=$good['no'];?></td>
            <td class="pp"><?=$qt?></td>
            <td class="pp"><?=$good['price'];?></td>
            <td class="pp"><?=(intval($qt)*intval($good['price']));?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <div class="ct"><td class="tt">總價:<?=$row['total'];?></td></div>        
        </tr>
        
    </table>
    <div class="ct">
        <input type="button" value="返回" onclick="location.href='?do=order'">
    </div>
</div>