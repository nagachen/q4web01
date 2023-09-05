<?php
include_once "DB.php";
class Type extends DB
{
    function __construct()
    {
        parent::__construct('types');
    }

    function show()
    {
        
        echo "<div class='big'>";
        $total = $this->q("select count(*) as total from $this->table where `big` != 0");
       
        echo " <a href='#'>全部商品({$total[0]['total']})</a>";
        echo "</div>";
        $rows = $this->all(['big' => 0]);
        foreach ($rows as $row) {
            echo "<div class='big'>";
            $total = $this->count(['big' => $row['id']]);
            echo " <a href='#'>{$row['name']}($total)</a>";

            $midtype = $this->all(['big' => $row['id']]);
            if (!empty($midtype)) {
                foreach ($midtype as $mid) {
                    echo "<div style='margin-left:25px;display:none;' class='mid'>";
                    echo "<a href='do=good&id={$row['id']}'>{$mid['name']}</a>";
                    echo "</div>";
                }
            }
            echo "</div>";
        }
    }
}

?>