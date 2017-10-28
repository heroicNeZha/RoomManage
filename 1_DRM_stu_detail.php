<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==0){
        if(isset($_GET["stu"])){
$sqlTheStudent="SELECT * FROM user WHERE LoginName='".$_GET["stu"]."'";

    ?>
</head>

<body class="">

<?php include("1_DRM_footer_body.php"); ?>

<div class="content">

    <div class="header">

        <h1 class="page-title">详细信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<a href="1_DRM_stu_list.php">学生信息</a> /<span class="divider">详细信息</span>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">


            <?php
            if($resTS=mysqli_query($db,$sqlTheStudent)){
                include("footer_DRM_stu_table.php");
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
}
}else{
    ?>
    <script>
        alert("未登录或权限不足！");
        window.location = "sign-in.php";
    </script>
    <?php
}
}
else{
    ?>
    <script>
        window.location = "sign-in.php";
    </script>
    <?php
}


