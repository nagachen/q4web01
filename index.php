<?php include_once "./base.php"; ?>

<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>┌精品電子商務網站」</title>
        <link href="./css/css.css" rel="stylesheet" type="text/css">
        <script src="./js/jquery-3.4.1.min.js"></script>
</head>

<body>

        <div id="main">
                <div id="top" style="display:flex;flex-wrap:wrap">
                        <div style="width:50%">
                                <a href="index.php">
                                        <img src="./icon/0416.jpg" style="width:100%">
                                </a>
                        </div>

                        <div style="width:50%;float:right">
                                <div style="float:right">
                                        <a href="?">回首頁</a> |
                                        <a href="?do=news">最新消息</a> |
                                        <a href="?do=look">購物流程</a> |
                                        <a href="?do=buycart">購物車</a> |
                                        <?php
                                        if (isset($_SESSION['User'])) {
                                                echo "<a href='./api/logout.php?table=User'>會員登出</a> |";
                                        } else {
                                                echo "<a href='?do=login'>會員登入</a> |";
                                        } ?>
                                        <a href="?do=admin">管理登入</a>
                                </div>

                        </div>
                        <div>
                                <marquee>
                                        年終特賣會開跑了 &nbsp;&nbsp;&nbsp; 即日期至年底，凡會員購物滿仟送佰，買越多送越多~
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 情人節特惠活動 &nbsp;&nbsp;&nbsp;&nbsp;
                                        為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~
                                </marquee>
                        </div>
                </div>
                <div id="left" class="ct">
                        <div style="min-height:400px;">
                                <?php
                                $Type->show_nav();
                                ?>
                        </div>
                        <span>
                                <div>進站總人數</div>
                                <div style="color:#f00; font-size:28px;">
                                        00005 </div>
                        </span>
                </div>
                <div id="right">
                        <?php
                        $do = $_GET['do'] ?? 'good';
                        $table = ucfirst($do);

                        $file = "./view/front/" . $do . ".php";

                        if (file_exists($file)) {
                                include $file;
                        } elseif (isset($$table)) {
                                $$table->show();
                        } else {
                                include "./view/front/good.php";
                        }
                        ?>
                </div>
                <div id="bottom" style="position:relative;line-height:70px;background:url(icon/bot.png); color:#FFF;"
                        class="ct">
                        <img src="./icon/bot" alt="">
                        <div style="position:absolute;left:50%;">Copyright 2023頁尾版權宣告 </div>
                </div>
        </div>

</body>

</html>

<script>
        $(".big").hover(function () {
                $(this).find('.mid').show();
        }, function () {
                $(this).find('.mid').hide();
        })

</script>