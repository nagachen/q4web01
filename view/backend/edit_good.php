<?php
$good = $Good->find($_GET['id']);
?>
<div class="all ct">
    <h3>修改商品</h3>
    <form action="./api/good_edit.php" method="post" enctype="multipart/form-data">
        <table style="width:100%">
            <tr>
                <td class="tt">所屬大分類</td>
                <td class="pp">
                    <select name="big" id="big">
                        <?php
                        $bigs = $Type->all(['big' => 0]);
                        foreach ($bigs as $big) {
                            ?>
                            <option value="<?= $big['id']; ?>" <?= ($good['big'] == $big['id']) ? 'selected' : ''; ?>><?= $big['name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="tt">所屬中分類</td>
                <td class="pp">
                    <select name="mid" id="">
                        <?php
                        $mids = $Type->q(" select * from `types` where `big` != 0");
                        foreach ($mids as $mid) {
                            ?>
                            <option value="<?= $mid['id']; ?>" <?= ($good['mid'] == $mid['id']) ? 'selected' : ''; ?>><?= $mid['name']; ?>><?= $mid['name']; ?></option>
                            <?php
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td class="tt">商品編號</td>
                <td class="pp">
                    <?= $good['no']; ?>
                </td>
            </tr>
            <tr>
                <td class="tt">商品名稱</td>
                <td class="pp">
                    <input type="text" name="name" value="<?=$good['name'];?>">
                </td>
            </tr>
            <tr>
                <td class="tt">商品價格</td>
                <td class="pp">
                    <input type="number" name="price" value="<?= $good['price']; ?>">
                </td>
            </tr>
            <tr>
                <td class="tt">規格</td>
                <td class="pp">
                    <input type="text" name="spec" value="<?= $good['spec']; ?>">
                </td>
            </tr>
            <tr>
                <td class="tt">庫存量</td>
                <td class="pp">
                    <input type="text" name="stock" value="<?= $good['stock']; ?>"> 
                </td>
            </tr>
            <tr>
                <td class="tt">商品圖片</td>
                <td class="pp"><input type="file" name="img" id=""></td>
            </tr>
            <tr>
                <td class="tt">商品介紹</td>
                <td class="pp">
                    <textarea name="intro" id="" cols="30" rows="10"><?= $good['intro']; ?></textarea></td>
            </tr>

        </table>
        <div class="ct">
        <input type="hidden" name="no" value=<?=$good['no'];?>>

            <input type="hidden" name="id" value=<?=$good['id'];?>>
            <input type="submit" value="修改">
            <input type="reset" value="重置">
            <button><a href="?do=th">返回</a></button>


        </div>
    </form>
</div>