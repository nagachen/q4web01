
<?php
$row=$Good->find($_GET['id']);   
?>
<div style="display:flex;margin:3px;flex-wrap:wrap">
                    <div style="width:40%;" class="pp">
                        <img src="./icon/<?= $row['img'] ?>.jpg" width="80%" alt="" style="padding:15px;">
                    </div>
                    <div style="flex-direction:column;width:60%">
                        <div class="tt ct">
                            <?php
                            $big=$Type->find($row['big']);
                            $mid=$Type->find($row['mid']);
                            ?>
                         分類:<?=$big['name'];?> >  <?= $mid['name']; ?>
                        </div>
                        <div class="pp">
                            編號:<?= $row['no']; ?>                                                        
                        </div>
                        <div class="pp">價格:
                            <?= $row['price']; ?>
                        </div>
                        <div class="pp">簡介:
                            <?= $row['intro']; ?>
                        </div>
                        <div class="pp">庫存:
                            <?= $row['stock']; ?>
                        </div>
                    </div>
                    <div>
                      <form action="./api/cart.php" method="post">購買數量: 
                        <input type="number" name="count" id="count">
                        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                      <button type=submit style="border:none"><img src="./icon/0402.jpg" alt="" ></button>
                    </form>
                    </div>
                </div>
