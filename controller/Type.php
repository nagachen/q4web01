<?php
include_once "DB.php";
class Type extends DB
{
    function __construct()
    {
        parent::__construct('types');
    }

    function show_nav()
    {      
        //全部商品 
        echo "<div class='big'>";
        $total = (new Good)->count(); 
        echo " <a href='?do=good'>全部商品({$total})</a>";
        echo "</div>";
        $rows = $this->all(['big' => 0]);
//大分類
        foreach ($rows as $row) {
            echo "<div class='big'>";
            $total = $this->count(['big' => $row['id']]);
            echo " <a href='#'>{$row['name']}($total)</a>";

            $midtype = $this->all(['big' => $row['id']]);
            //中分類
            if (!empty($midtype)) {
                foreach ($midtype as $mid) {
                    echo "<div style='margin-left:25px;display:none;' class='mid'>";
                    echo "<a href='?do=good&id={$mid['id']}'>{$mid['name']}</a>";
                    echo "</div>";
                }
            }
            echo "</div>";
        }
    }

    
}

?>