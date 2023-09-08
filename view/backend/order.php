<div class="all ct">
    <h3>訂單管理</h3>
    <table>
        <tr>
            <th class="tt">訂單編號</th>
            <th class="tt">金額</th>
            <th class="tt">會員帳號</th>
            <th class="tt">姓名</th>
            <th class="tt">下單時間</th>
            <th class="tt">操作</th>
        </tr>
    <?php
    $rows=$Order->all();
    foreach($rows as $row){
    ?>
        <tr>
            <td class="pp"><a href="?do=order_detail&id=<?=$row['id'];?>"><?=$row['no'];?>></a></td>
            <td class="pp"><?=$row['total'];?></td>
            <td class="pp"><?=$row['acc'];?></td>
            <td class="pp"><?=$row['name'];?></td>
            <td class="pp"><?=$row['orderdate'];?></td>
            <td class="pp"><input type="button" value="刪除"></td>
        </tr>
        <?php
    }
    ?>
    
    </table>
</div>