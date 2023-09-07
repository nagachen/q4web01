<div class="ct all">
    <input type="button" value="新增管理帳號" class="pp" onclick="location.href='?do=add_admin'">
    <table >
        <tr>
            <th class="tt">帳號</th>
            <th class="tt">密碼</th>
            <th class="tt">管理</th>
        </tr>
        <?php
        $rows = $Admin->all();
        foreach ($rows as $row) {
            ?>
            <tr>
                <td class="pp">
                    <?= $row['acc']; ?>
                </td>
                <td class="pp">
                    <?= str_repeat("*", strlen($row['pw'])); ?>
                </td>
                <td class="pp">
                    <?php
                    if ($row['acc'] == 'admin') {
                        echo "此帳號為最高權限";
                    } else {
                        ?>
                        <input type="button" value="修改" onclick="location.href='?do=updateAdmin&id=<?=$row['id'];?>'">
                        <input type="button" value="刪除" onclick="location.href='./api/admin_del.php?id=<?=$row['id'];?>'">

                        <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>