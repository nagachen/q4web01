<div class="all ct">
    <h3>商品分類</h3>
    <div>新增大分類<input type="text" name="big" id="big"><input type="button" value="新增"></div>
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
        <input type="button" value="新增">
    </div>
    <table style="width:100%">
        <?php
        $bigs = $Type->all(['big' => 0]);
        foreach ($bigs as $big) {
            ?>
            <tr>
                <td class="tt">
                    <?= $big['name']; ?>
                </td>
                <td class="pp">
                    <input type="button" value="修改">
                    <input type="button" value="刪除">
                </td>
            </tr>
            <?php
            $mids = $Type->all(['big' => $big['id']]);
            foreach ($mids as $mid) {
                ?>
                <tr>
                    <td class="pp">
                        <?= $mid['name']; ?>
                    </td>
                    <td class="pp"><input type="button" value="修改">
                        <input type="button" value="刪除">
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>

</div>

<div class="all ct">
    <h3>商品管理</h3>
    <div><input type="button" value="新增商品"></div>
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
                    <input type="button" value="修改">
                    <input type="button" value="刪除">
                    <input type="button" value="上架">
                    <input type="button" value="下架">
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</div>