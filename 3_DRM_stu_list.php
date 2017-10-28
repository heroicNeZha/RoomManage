<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"]) &&$_SESSION["right"]==2&& $_SESSION["un"]==$_GET["LoginName"]){
    if(isset($_GET["LoginName"])) {
    ?>
</head>
<body>
<?php include("3_DRM_footer_body.php") ?>
<div class="content">
    <div class="header">
        <h1 class="page-title">学生信息</h1>
    </div>
    <?php
    $sqlTheStudent = "SELECT * FROM user WHERE LoginName='" . $_GET["LoginName"] . "'";
    if ($resTS = mysqli_query($db, $sqlTheStudent)) {
        ?>
        <div class="well">
            <div align="center">
                <table width="668" height="134" border="1">
                    <tbody>
                    <?php
                    if ($rowsTS = mysqli_fetch_assoc($resTS)) {
                        echo "<tr align='center'>";
                        echo "  <td width='125'>姓名</td>";
                        echo "<td width='95'>" . $rowsTS["UserName"] . "</td>";
                        echo "<td width='82'>性别</td>";
                        $sex = $rowsTS["Sex"] ? "女" : "男";
                        echo "<td width='83'>" . $sex . "</td>";
                        echo "<td width='74'>创建日期</td>";
                        echo "<td width='87'>" . $rowsTS["CreateDate"] . "</td>";
                        echo '<tr align="center">';
                        echo '<td>电子邮箱</td>';
                        echo '<td colspan="5">' . $rowsTS["Email"] . '</td>';
                        echo '</tr>';
                        echo '<tr align="center">';
                        echo '    <td>联系电话</td>';
                        echo '    <td colspan="5">' . $rowsTS["Tel"] . '</td>';
                        echo '</tr>';
                        echo '<tr align="center">';
                        echo '    <td>寝室</td>';
                        echo '    <td colspan="5">' . $rowsTS["RoomId"] . '</td>';
                        echo '</tr>';
                        echo '<tr align="center">';
                        echo '    <td>最后更新日期</td>';
                        echo '    <td colspan="5">' . $rowsTS["UpdateDate"] . '</td>';
                        echo '</tr>';
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
