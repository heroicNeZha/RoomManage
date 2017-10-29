<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if (isset($_SESSION["right"]) && $_SESSION["right"] == 0){
    if (isset($_GET["dor"])){
?>
</head>

<body class="">

<?php include("1_DRM_footer_body.php"); ?>

<div class="content">

    <div class="header">

        <h1 class="page-title">详细信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<a href="1_DRM_turn_list.php">费用信息</a> /<span
                    class="divider">详细信息</span>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">

            <?php

            if (isset($_GET["ExpensesId"])) {
            $sqlTheFeed = "SELECT * FROM expenses WHERE RoomId='" . $_GET["dor"] . "' AND ExpensesId='".$_GET["ExpensesId"]."'";

            } else {
                $sqlTheFeed = "SELECT * FROM expenses WHERE RoomId='" . $_GET["dor"] . "'";
            }
            if ($resTF = mysqli_query($db, $sqlTheFeed)) {
                include("footer_DRM_score_table.php");
            }

            ?>
            <?php include("footer_bottom.php"); ?>

        </div>
    </div>
</div>

<!--导航动态下拉框-->
<script src="lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function () {
        $('.demo-cancel-click').click(function () {
            return false;
        });
    });
</script>

</body>
</html>

<?php
} else {
}
} else {
    ?>
    <script>
        alert("未登录或权限不足！");
        window.location = "sign-in.php";
    </script>
    <?php
}
}else{}

