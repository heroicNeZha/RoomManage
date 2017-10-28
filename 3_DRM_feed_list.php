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
        <h1 class="page-title">成绩信息</h1>
    </div>
    <?php
    $sqlThefeed = "SELECT *,tea_name FROM tbl_score,tbl_student,tbl_teacher WHERE tbl_score.sco_tea_ID = tbl_teacher.tea_ID AND tbl_score.sco_stu_ID = tbl_student.stu_ID AND tbl_student.stu_userName='" . $_GET["LoginName"] . "'";
    if ($resTF = mysqli_query($db, $sqlThefeed)) {
        ?>
        <div class="well">
            <div align="center">
                <table width="668" height="100" border="1">
                    <tbody>
                    <?php
                    while ($rowsTF = mysqli_fetch_assoc($resTF)) {
                        ?>
                        <tr align="center">
                            <th>学生姓名</th>
                            <td >&nbsp;<?php echo $rowsTF["stu_name"]; ?></td>
                            <th>成绩</th>
                            <td >&nbsp;<?php echo $rowsTF["sco_score"]; ?>&nbsp;</td>
                        </tr>
                        <tr align="center">
                            <th >查寝老师</th>
                            <td >&nbsp;<?php echo $rowsTF["tea_name"]; ?></td>
                            <th >查寝时间</th>
                            <td >&nbsp;<?php echo $rowsTF["sco_dateTime"]; ?></td>
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
