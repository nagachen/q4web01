<?php
include_once "DB.php";
class Good extends DB
{
    function __construct()
    {
        parent::__construct('goods');
    }

    function show()
    {

        if (!isset($_GET['id'])) {
            echo "<h3>全部商品</h3>";
            $rows = $this->paginate(3);
            foreach ($rows as $row) {
                ?>
                <div style="display:flex;margin:3px;">
                    <div style="width:40%;" class="pp">
                    <a href="?do=intro&id=<?= $row['id']; ?>"><img src="./icon/0402.jpg" alt=""><img src="./icon/<?= $row['img'] ?>.jpg" width="80%" alt="" style="padding:15px;"></a>
                    </div>
                    <div style="flex-direction:column;width:58%">
                        <div class="tt ct">
                            <?= $row['name']; ?>
                        </div>
                        <div class="pp">
                            <div>價錢:
                                <?= $row['price']; ?>

                                <div style="float:right"><a href="?do=intro&id=<?= $row['id']; ?>"><img src="./icon/0402.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="pp">規格:
                            <?= $row['spec']; ?>
                        </div>
                        <div class="pp">簡介:
                            <?= $row['intro']; ?>
                        </div>
                    </div>
                </div>
                <?php
            }

            echo "<div class='ct'>{$this->links()}</div>";
        } else {
            $Type = new Type;
            $bigId = $Type->find($_GET['id'])['big'];
            $big = $Type->find($bigId)['name'];
            $mid = $Type->find($_GET['id'])['name'];
            echo "<h3>$big > $mid </h3>";
            $rows = $this->paginate(3, " where `mid`={$_GET['id']} ");
            foreach ($rows as $row) {
                ?>
                <div style="display:flex;margin:3px;">
                    <div style="width:40%;" class="pp">
                        <a href="?do=intro&id=<?= $row['id']; ?>">
                            <img src="./icon/<?= $row['img'] ?>.jpg" width="80%" alt="" style="padding:15px;"></a>F
                    </div>
                    <div style="flex-direction:column;width:58%">
                        <div class="tt ct">
                            <?= $row['name']; ?>
                        </div>
                        <div class="pp">
                            <div>價錢:
                                <?= $row['price']; ?>

                                <div style="float:right"><img src="./icon/0402.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="pp">規格:
                            <?= $row['spec']; ?>
                        </div>
                        <div class="pp">簡介:
                            <?= $row['intro']; ?>
                        </div>
                    </div>
                </div>
                <?php
            }

            echo "<div class='ct'>{$this->links()}</div>";
        }
    }



}

?>