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
    $stu_ID = $_GET["LoginName"];
    $sqlTheStudent = "SELECT * FROM tbl_student LEFT JOIN tbl_stu_dor ON tbl_student.stu_ID = tbl_stu_dor.stu_ID WHERE tbl_student.stu_ID= 1503050116";
    if ($resTS = mysqli_query($db, $sqlTheStudent)) {
        ?>
        <div class="well">
            <div align="center">
                <table width="668" border="1">
                    <tbody>
                    <?php
                    if ($rowsTS = mysqli_fetch_assoc($resTS)) {
                        echo "<tr align='center'>";
                        echo "<th width='125'>学号</th>";
                        echo "<td width='95'>" . $rowsTS["stu_ID"] . "</td>";
                        echo "<th width='82'>姓名</th>";
                        echo "<td width='83'>" . $rowsTS["stu_name"] . "</td>";
                        echo "</tr>";
                        echo "<tr align='center'>";
                        echo "<th >班级</th>";
                        echo "<td colspan='1'>" . $rowsTS["stu_class"] . "</td>";
                        echo "<th >性别</th>";
                        $sex = $rowsTS["stu_sex"] ? "女" : "男";
                        echo "<td colspan='1'>$sex</td>";
                        echo "</tr>";
                        echo "<tr align='center'>";
                        echo "<th>楼号</th>";
                        echo "<td colspan='1'>" . $rowsTS["room_ID"] . "</td>";
                        echo "<th>寝室号</th>";
                        echo "<td colspan='1'>" . $rowsTS["dor_ID"] . "</td>";
                        echo "</tr>";
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
