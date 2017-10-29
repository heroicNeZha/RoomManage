<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==1) {
    if (isset($_POST["submit"]) && $_POST["submit"]) {
        $stu_ID = $_POST["stu_ID"];
        if ($_POST["submit"] == "确定") {
            $gpa = $_POST["sco_score"] / 10.0 - 5;
            $sco_dateTime = $_POST["sco_dateTime"];
            $tea_ID = $_SESSION["tea_ID"];
            $sqlInsertScore = "INSERT INTO tbl_score VALUE ($stu_ID,$gpa,'$tea_ID','$sco_dateTime')";
            if ($resIS = mysqli_query($db, $sqlInsertScore)) {
                ?>
                <script>
                    alert("插入成功！");
                    window.location = "2_DRM_score_list.php";
                </script>
            <?php
            }else{
                echo $sqlInsertScore;
                ?>
                <script>
                    alert("数据异常！");
                    window.location = "2_DRM_score_list.php";
                </script>
                <?php
            }
        }
        else if ($_POST["submit"] == "删除") {
        }
        else if ($_POST["submit"] == "编辑") {
        }
    }
    ?>
</head>
<body class="">
<?php include("2_DRM_footer_body.php"); ?>

<div class="content">
    <div class="header">
        <h1 class="page-title">学生信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">学生信息</span></li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>新建</font></a></button>
            </div>
            <!--搜索框-->
            <div class="search-well">
                <form class="form-inline" action="search_stu.php" method="post">
                    <input class="input-xlarge" name="stu" placeholder="根据学号查询" id="appendedInputButton" type="text">
                    <input class="btn" type="submit" name="submit" value="查询">
                </form>
            </div>
        </div>

    </div>
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th width="253">学号</th>
                <th width="271">姓名</th>
                <th width="209">楼号</th>
                <th width="209">寝室号</th>
                <th width="209">成绩</th>
                <th width="190">&nbsp;</th>
                <th width="39" style="width: 26px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sqlAllStudents="SELECT tbl_student.stu_ID,tbl_student.stu_name,tbl_student.stu_sex,tbl_dormitory.dor_address,tbl_stu_dor.room_ID,(SELECT AVG(tbl_score.sco_score) FROM tbl_score WHERE tbl_score.sco_stu_ID = tbl_student.stu_ID) avg_score FROM tbl_student
LEFT JOIN tbl_stu_dor ON tbl_student.stu_ID = tbl_stu_dor.stu_ID 
LEFT JOIN tbl_dormitory ON tbl_dormitory.dor_ID = tbl_stu_dor.dor_ID
WHERE stu_state = '1' ORDER BY tbl_student.stu_ID";
            if($resAS=mysqli_query($db,$sqlAllStudents)) {
                while ($rows = mysqli_fetch_assoc($resAS)) {
                    echo "<tr>";
                    echo "<td>" . $rows["stu_ID"] . "</td>";
                    echo "<td>" . $rows["stu_name"] . "</td>";
                    echo "<td>" . $rows["dor_address"] . "</td>";
                    echo "<td>" . $rows["room_ID"] . "</td><td>";
                    echo $rows["avg_score"]>=4?'A':($rows["avg_score"]>=3?'B':($rows["avg_score"]>=2?'C':($rows["avg_score"]>=1?'D':($rows["avg_score"]>0?'<font color="#8b0000">E</font>':'-'))));
                    echo "</td><td><a href='2_DRM_score_detail.php?stu=" . $rows["stu_ID"] . "'>详细信息</a></td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    <!--分页-->
    <div class="pagination">
        <ul>
            <li><a href="#">上一页</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">下一页</a></li>
        </ul>
    </div>

    <!--编辑信息-->
    <div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">编辑信息</h3>
        </div>
        <div class="modal-body">
            <form id="tab" action="2_DRM_score_list.php" method="post">
                <label>学号</label>
                <input type="text" name="stu_ID" value="" class="input-xlarge">
                <label>分数(百分制)</label>
                <input type="text" name="sco_score" value="" class="input-xlarge">
                <label>打分时间</label>
                <input type="date" name="sco_dateTime" value="" class="input-xlarge">
                <div class="modal-footer">
                    <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                    <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="确定">
                </div>
            </form>
        </div>
    </div>
    <?php include("footer_bottom.php");?>
</div>

<script src="lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
</script>

</body>
</html>
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
