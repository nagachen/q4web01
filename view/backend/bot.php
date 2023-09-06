<?php

    if(!empty($_POST)){
        $_POST['id']=1;
        $Bottom->save($_POST);
    }
?>
<div class="all ct">
    <h3>編輯頁尾版權區</h3>
    <form action="?do=bot" method="post">
        <table>
            <?php
            $row=$Bottom->find(1);
            ?>
            <tr>
                <td class="tt">頁尾宣告內容</td>
                <td><input type="text" name="bottom" value="<?=$row['bottom'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="編輯"><input type="button" value="清除" onclick="clean()"></td>
            </tr>
        </table>

    </form>
</div>
<script>
    function clean(){
        $("input[name=bottom]").val('');
    }
</script>