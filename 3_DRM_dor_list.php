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
    $stu_ID = $_GET["LoginName"];
    $sqlTheDor = "SELECT *,(select COUNT(*) FROM tbl_stu_dor WHERE room_ID = tbl_room.room_ID AND dor_ID = tbl_room.dor_ID) now_num FROM tbl_stu_dor LEFT JOIN tbl_room ON tbl_stu_dor.room_ID = tbl_room.room_ID AND tbl_stu_dor.dor_ID = tbl_room.dor_ID LEFT JOIN tbl_dormitory ON tbl_room.dor_ID= tbl_dormitory.dor_ID WHERE stu_ID = $stu_ID";
    if ($resTD = mysqli_query($db, $sqlTheDor)) {
        ?>
        <div class="well">
            <div align="center">
                <table width="668" border="1">
                    <tbody>

                    <?php
                    while ($rowsTD = mysqli_fetch_assoc($resTD)) {
                        ?>

                        <tr align="center">
                            <th width="125">楼号</th>
                            <td width="95" colspan="1">&nbsp;<?php echo $rowsTD["dor_address"]; ?></td>
                            <th width="74">寝室号</th>
                            <td width="87">&nbsp;<?php echo $rowsTD["room_ID"]; ?></td>
                        </tr>
                        <tr align="center">
                            <th>应住人数</th>
                            <td colspan="5"><?php echo $rowsTD["room_num"]; ?></td>
                        </tr>
                        <tr align="center">
                            <th>实住人数</th>
                            <td colspan="5"><?php echo $rowsTD["now_num"]; ?></td>
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
