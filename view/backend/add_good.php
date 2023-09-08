<div class="all ct">
    <h3>新增商品</h3>
    <form action="./api/good_add.php" method="post" enctype="multipart/form-data">
    <table style="width:100%">
        <tr>
            <td class="tt">所屬大分類</td>
            <td class="pp">
                <select name="big" id="big">
                    <?php
                    $bigs = $Type->all(['big' => 0]);
                    foreach ($bigs as $big) {
                        ?>
                        <option value="<?= $big['id']; ?>"><?= $big['name']; ?></option>
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
                        <option value="<?= $mid['id']; ?>"><?= $mid['name']; ?></option>
                        <?php
                    }
                    ?>

                </select>
            </td>
        </tr>
        <tr>
            <td class="tt">商品編號</td>
            <td class="pp">完成後分類後自動分配</td>
        </tr>
        <tr>
            <td class="tt">商品名稱</td>
            <td class="pp"><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td class="tt">商品價格</td>
            <td class="pp"><input type="text" name="price" id=""></td>
        </tr>
        <tr>
            <td class="tt">規格</td>
            <td class="pp"><input type="text" name="spec" id=""></td>
        </tr>
        <tr>
            <td class="tt">庫存量</td>
            <td class="pp"><input type="text" name="stock" id=""> </td>
        </tr>
        <tr>
            <td class="tt">商品圖片</td>
            <td class="pp"><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td class="tt">商品介紹</td>
            <td class="pp"><input type="text" name="intro" id=""></td>
        </tr>
        
    </table>
    <div class="ct">
            
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <button><a href="?do=th">返回</a></button>
            

                </div>
    </form>
</div>