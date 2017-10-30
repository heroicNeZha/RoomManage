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
    $sqlTheStudent="SELECT * FROM tbl_student LEFT JOIN tbl_stu_dor ON tbl_stu_dor.stu_ID = tbl_student.stu_ID WHERE tbl_student.stu_ID='".$_GET["stu"]."'";

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
            if($resTS=mysqli_query($db,$sqlTheStudent)) {
            ?>
            <div class="well">
                <div align="center">
                    <table width="668" border="1">
                        <tbody>
                        <?php
                        if ($rowsTS=mysqli_fetch_assoc($resTS)){
                            echo "<tr align='center'>";
                            echo "  <td width='125'>学号</td>";
                            echo "<td width='95'>".$_GET['stu']."</td>";
                            echo "  <td width='82'>姓名</td>";
                            echo "<td width='83'>".$rowsTS["stu_name"]."</td>";
                            echo "<tr align='center'>";
                            echo "<td>性别</td>";
                            $sex=$rowsTS["stu_sex"]?"女":"男";
                            echo "<td>".$sex."</td>";
                            echo "  <td>班级</td>";
                            echo "<td>".$rowsTS["stu_class"]."</td>";
                            echo '</tr>';
                            echo '<tr align="center">';
                            echo '    <td>楼号</td>';
                            echo '    <td colspan="">'.$rowsTS["dor_ID"].'</td>';
                            echo '    <td>宿舍号</td>';
                            echo '    <td colspan="">'.$rowsTS["room_ID"].'</td>';
                            echo '</tr>';
                        }
                        ?>


                        </tbody>
                    </table>

                </div>
            </div><?php
            }
            else{
                echo "查无此人!";
            }
            include("footer_bottom.php"); ?>
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


