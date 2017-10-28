<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"]) &&$_SESSION["right"]==2 && $_SESSION["un"]==$_GET["LoginName"]){
    if(isset($_GET["LoginName"])) {
    ?>
</head>
<body>
<?php include("3_DRM_footer_body.php") ?>
<div class="content">
    <div class="header">
        <h1 class="page-title">寝室信息</h1>
    </div>
    <?php
    $sqlTheDor = "SELECT * FROM user,bedroom WHERE user.RoomId=bedroom.RoomId AND LoginName='" . $_GET["LoginName"] . "'";
    if ($resTD = mysqli_query($db, $sqlTheDor)) {
        ?>
        <div class="well">
            <div align="center">
                <table width="668" height="134" border="1">
                    <tbody>

                    <?php
                    while ($rowsTD = mysqli_fetch_assoc($resTD)) {
                        ?>

                        <tr align="center">
                            <td width="125">寝室号</td>
                            <td width="95" colspan="1">&nbsp;<?php echo $rowsTD["RoomId"]; ?></td>
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
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
        <?php
    }
    }
    ?>
</div>
</body>
<?php
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
