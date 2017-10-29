<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==0){
    if(isset($_GET["dor_ID"])&&isset($_GET["room_ID"])){
    $sqlTheDor="SELECT * FROM tbl_stu_dor WHERE room_ID='".$_GET["room_ID"]."' AND dor_ID='".$_GET["dor_ID"]."'";

    ?>
</head>
<body class="">

<?php include("1_DRM_footer_body.php"); ?>

<div class="content">

    <div class="header">

        <h1 class="page-title">详细信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<a href="1_DRM_dor_list.php">寝室信息</a> /<span class="divider">详细信息</span>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">

            <?php
            if($resTD=mysqli_query($db,$sqlTheDor)) {
                ?>
                <div class="well">
                <div align="center">
                <table width="668" border="1">
                <tbody>

                <?php
                while ($rowsTD = mysqli_fetch_assoc($resTD)) {
                    ?>

                    <tr align="center">
                        <td width="125">寝室号</td>
                        <td width="95" colspan="1">&nbsp;<?php echo $rowsTD["room_ID"]; ?></td>
                        <td width="74">创建日期</td>
                        <td width="87">&nbsp;<?php echo $rowsTD["CreateDate"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>应住人数</td>
                        <td colspan="5"><?php echo $rowsTD["Number"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>实住人数</td>
                        <td colspan="5"><?php echo $rowsTD["UserNum"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>最后更新日期</td>
                        <td colspan="5">&nbsp;<?php echo $rowsTD["UpdateDate"]; ?></td>
                    </tr>
                    </tbody>
                    </table>

                    </div>
                    </div><?php
                }
            }
            else{
                echo "查无此人！";
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


