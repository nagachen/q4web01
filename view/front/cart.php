
<div class="all ct">
    <h3>
        <?= $_SESSION['User']; ?>的購物車
    </h3>
    <table style="width:100%">
        <tr>
            <th class="tt">編號</th>
            <th class="tt">商品名稱</th>
            <th class="tt">數量</th>
            <th class="tt">庫存量</th>
            <th class="tt">單價</th>
            <th class="tt">小計</th>
            <th class="tt">刪除</th>
        </tr>
        <?php
        

        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id => $qt) {
                $row = $Good->find($id);
                ?>
                <tr>
                    <td class="pp">
                        <?= $row['no']; ?>
                    </td>
                    <td class="pp">
                        <?= $row['name']; ?>
                    </td>
                    <td class="pp"> 
                        <?= $qt; ?>
                    </td>
                    <td class="pp">
                        <?= $row['stock']; ?>
                    </td>
                    <td class="pp">
                        <?= $row['price']; ?>
                    </td>
                    <td class="pp">
                        <?= (intval($row['price']) * intval($qt)); ?>
                    </td>
                    
                    <td class="pp">
                        <form action="./api/cart_del.php" method="post">
                            <input type="hidden" name="id" value=<?=$row['id'];?>>
                            <button>
                                <img src="./icon/0415.jpg" alt="">
                            </button>
                        </form>
                    </td>
                    
                </tr>
                <?php
            }
        }
        ?>
    </table>

    <div class="all ct">
        <a href="index.php"> <img src="./icon/0411.jpg" alt="./icon/0411.jpg"></a>
        <a href="?do=cart_check"> <img src="./icon/0412.jpg" alt="./icon/0412.jpg"></a>

    </div>
</div>