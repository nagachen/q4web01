<div class="all ct">
    <h3>商品分類</h3>
    <form action="./api/type_add_big.php" method="post">
        <div>新增大分類
            <input type="text" name="big" id="big">
            <input type="submit" value="新增">
        </div>
    </form>
    <form action="./api/type_add_mid.php" method="post">
        <div>
            新增中分類 <select name="opt" id="opt">
                <?php
                $rows = $Type->q(" select * from `types` where `big` != 0");
                foreach ($rows as $row) {
                    ?>
                    <option value=<?= "{$row['big']}"; ?>><?= $row['name']; ?></option>
                    <?php
                }
                ?>
            </select>
            <input type="text" name="optName" id="optName">
            <input type="submit" value="新增">
        </div>
    </form>
    <table style="width:100%">
        <?php
        $bigs = $Type->all(['big' => 0]);
        foreach ($bigs as $big) {
            ?>
            <tr>
                <td class="tt">
                    <input type="text" data-id="<?= $big['id']; ?>" class="bigName" value="<?= $big['name']; ?>">
                </td>
                <td class="pp">
                    <input type="button" value="修改" class="typeEdit">
                    <input type="button" value="刪除" class="typeDel">
                </td>
            </tr>
            <?php
            $mids = $Type->all(['big' => $big['id']]);
            foreach ($mids as $mid) {
                ?>
                <tr>
                    <td class="pp">
                        <input type="text" data-id="<?= $mid['id']; ?>" class="midName" value="<?= $mid['name']; ?>">
                    </td>
                    <td class="pp">
                        <input type="button" value="修改" class="typeEdit">
                        <input type="button" value="刪除" class="typeDel">
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>

</div>
<script>
    $(".typeEdit").click(function () {
        let name = $(this).parent().parent().find("input").val();
        let id = $(this).parent().parent().find("input").data('id');


        $.post("./api/type_edit.php", { id, name }, () => {

        })
    })
    $(".typeDel").click(function () {
       
        let id = $(this).parent().parent().find("input").data('id');
        console.log(id)
        $.post("./api/type_del.php", { id }, () => {
            location.reload();
        })
    })
</script>


<div class="all ct">
    <h3>商品管理</h3>
    <div><a href="?do=add_good"><input type="button" value="新增商品"></a></div>
    <table style="width:100%">
        <tr>
            <th class="tt">編號</th>
            <th class="tt">商品名稱</th>
            <th class="tt">庫存量</th>
            <th class="tt">狀態</th>
            <th class="tt">操作</th>
        </tr>
        <?php
        $goods = $Good->all();
        foreach ($goods as $good) {
            ?>
            <tr>
                <td class="pp">
                    <?= $good['no']; ?>
                </td>
                <td class="pp">
                    <?= $good['name']; ?>
                </td>
                <td class="pp">
                    <?= $good['stock']; ?>
                </td>
                <td class="pp">
                    <?= ($good['sh'] == 1) ? '販售中' : '已下架'; ?>
                </td>
                <td class="pp">
                    <a href="?do=edit_good&id=<?=$good['id'];?>"><input type="button" value="修改"></a>
                    <a href="./api/good_del.php?id=<?=$good['id'];?>"><input type="button" value="刪除"></a>
                    <a href="./api/good_sh.php?id=<?=$good['id'];?>&sh=1"><input type="button" value="上架"></a>
                    <a href="./api/good_sh.php?id=<?=$good['id'];?>&sh=0"><input type="button" value="下架"></a>

                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</div>
<script>

</script>