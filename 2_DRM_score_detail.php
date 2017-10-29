<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==1){
    if(isset($_GET["stu"])){
    ?>
</head>
<body class="">

<?php include("2_DRM_footer_body.php"); ?>

<div class="content">

    <div class="header">

        <h1 class="page-title">详细信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="2_DRM_index.php">返回首页</a> /<a href="2_DRM_score_list.php">查寝管理</a> /<span class="divider">详细信息</span>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">

            <?php
            $sqlScore="SELECT * FROM tbl_score 
LEFT JOIN tbl_teacher ON tbl_score.sco_tea_ID = tbl_teacher.tea_ID
LEFT JOIN tbl_student ON tbl_score.sco_stu_ID = tbl_student.stu_ID
WHERE tbl_score.sco_stu_ID='".$_GET["stu"]."'";
            ?>
            <div class="well">
                <div align="center">
                    <table width="668" border="1">
                        <tbody>
                        <?php
                        if($resS=mysqli_query($db,$sqlScore)){
                        if ($rows=mysqli_fetch_assoc($resS)){?>
                            <tr align="center">
                                <td width="125">学号</td>
                                <td width="95" colspan="2">&nbsp;<?php echo $rows["sco_stu_ID"];?></td>
                                <td width="74">姓名</td>
                                <td width="87" colspan="2">&nbsp;<?php echo $rows["stu_name"];?></td>
                            </tr>
                            <tr align="center">
                                <td>成绩</td>
                                <td colspan="1">&nbsp;<?php echo $rows["sco_score"];?></td>
                                <td>老师</td>
                                <td colspan="1"><?php echo $rows["tea_name"];?>&nbsp;</td>
                                <td>打分日期</td>
                                <td colspan="1"><?php echo $rows["sco_dateTime"];?>&nbsp;</td>
                            </tr>
                            <?php
                        }
                        while($rows=mysqli_fetch_assoc($resS)){
                            ?>
                            <tr align="center">
                                <td>成绩</td>
                                <td colspan="1">&nbsp;<?php echo $rows["sco_score"];?></td>
                                <td>老师</td>
                                <td colspan="1"><?php echo $rows["tea_name"];?>&nbsp;</td>
                                <td>打分日期</td>
                                <td colspan="1"><?php echo $rows["sco_dateTime"];?>&nbsp;</td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div><?php
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


