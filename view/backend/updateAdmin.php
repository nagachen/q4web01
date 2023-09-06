<div class="all ct">
    <h3 class="ct">修改管理員權限</h3>
<form action="./api/save_admin.php" method="post">
<table>
    <?php
    $row=$Admin->find($_GET['id']);
    $row['pr']=unserialize($row['pr']);
    ?>
    <tr>
        <td class="tt">帳號</td>
        <td><input type="text" name="acc" value="<?=$row['acc'];?>"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td><input type="password" name="pw" value="<?=$row['acc'];?>"></td>
    </tr>
    <tr>
        <td class="tt">權限</td>
        <td>
           
            <div><input type="checkbox" name="pr[]" <?=(in_array(1,$row['pr']))?'checked':'';?> value="1">商品分類與管理</div>
            <div><input type="checkbox" name="pr[]" <?=(in_array(2,$row['pr']))?'checked':'';?> value="2">訂單管理</div>
            <div><input type="checkbox" name="pr[]" <?=(in_array(3,$row['pr']))?'checked':'';?> value="3">會員管理</div>
            <div><input type="checkbox" name="pr[]" <?=(in_array(4,$row['pr']))?'checked':'';?> value="4">頁尾版權區管理</div>
            <div><input type="checkbox" name="pr[]" <?=(in_array(5,$row['pr']))?'checked':'';?> value="5">最新消息管理</div>
           
        </td>
    </tr>
    <tr>
       
        <td>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>
</div>