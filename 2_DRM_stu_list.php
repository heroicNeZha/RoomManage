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
        if ($_POST["submit"] == "新建") {
            $dor_ID = $_POST["dor_ID"];
            $room_ID = $_POST["room_ID"];
            $stu_name = $_POST["stu_name"];
            $stu_sex = $_POST["stu_sex"];
            //插入
            $sqlExsRoom = "SELECT * FROM `tbl_room` WHERE dor_ID ='$dor_ID' AND room_ID = '$room_ID'";
        if ($resSER = mysqli_query($db, $sqlExsRoom)) {
        if (mysqli_num_rows($resSER)) {
            $sqlAddStu = "INSERT INTO `tbl_student` (`stu_ID`, `stu_userName`, `stu_password`, `stu_sex`, `stu_name`, `stu_state`, `stu_class`) VALUES ('$stu_ID', '$stu_ID', '123456', '$stu_sex', '$stu_name', '1', '" . mb_substr($stu_ID, 0, 8, 'utf-8') . "');
INSERT INTO `tbl_stu_dor` (`stu_ID`, `dor_ID`, `room_ID`) VALUES ('$stu_ID', '$dor_ID', '$room_ID');";
        if (mysqli_multi_query($db, $sqlAddStu)) {
            ?>
            <script>alert("新建成功!");
                window.location = "2_DRM_stu_list.php";
            </script><?php
        }
        else {
        ?>
            <script>
                alert("数据异常！");
                window.location = "2_DRM_stu_list.php";
            </script>
        <?php
        }
        }
        else{
        ?>
            <script>
                alert("宿舍不存在！");
                window.location = "2_DRM_stu_list.php";
            </script>
        <?php
        }
        }
        }
        else if ($_POST["submit"] == "删除") {
        //删除
        $sqlDelStu = "DELETE FROM `tbl_student` WHERE `tbl_student`.`stu_ID` = '$stu_ID';";
        if (mysqli_query($db, $sqlDelStu)) { ?>
            <script>alert("删除成功!");</script>
        <?php
        } else { ?>
            <script>
                alert("执行异常！");
                window.location = "1_DRM_stu_list.php";
            </script>
            <?php
        }
        }
        else if ($_POST["submit"] == "编辑") {
            echo "222";
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
            <!--搜索框
            <div class="search-well">
                <form class="form-inline" action="search_stu.php" method="post">
                    <input class="input-xlarge" name="stu" placeholder="根据学号查询" id="appendedInputButton" type="text">
                    <input class="btn" type="submit" name="submit" value="查询">
                </form>
            </div>
            -->
        </div>

    </div>
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th width="253">学号</th>
                <th width="271">姓名</th>
                <th width="209">性别</th>
                <th width="209">楼号</th>
                <th width="209">寝室号</th>
                <th width="190">&nbsp;</th>
                <th width="39" style="width: 26px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sqlAllStudents="SELECT tbl_student.stu_ID,tbl_student.stu_name,tbl_student.stu_sex,tbl_dormitory.dor_address,tbl_stu_dor.room_ID FROM tbl_student
LEFT JOIN tbl_stu_dor ON tbl_student.stu_ID = tbl_stu_dor.stu_ID 
LEFT JOIN tbl_dormitory ON tbl_dormitory.dor_ID = tbl_stu_dor.dor_ID
WHERE stu_state = '1' ORDER BY tbl_student.stu_ID";
            if($resAS=mysqli_query($db,$sqlAllStudents)) {
                while ($rows = mysqli_fetch_assoc($resAS)) {
                    echo "<tr>";
                    echo "<td>" . $rows["stu_ID"] . "</td>";
                    echo "<td>" . $rows["stu_name"] . "</td>";
                    $sex = $rows["stu_sex"] ? "女" : "男";
                    echo "<td>" . $sex . "</td>";
                    echo "<td>" . $rows["dor_address"] . "</td>";
                    echo "<td>" . $rows["room_ID"] . "</td>";
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
            <form id="tab" action="1_DRM_stu_list.php" method="post">
                <label>学号</label>
                <input type="text" name="stu_ID" value="" class="input-xlarge">
                <label>姓名</label>
                <input type="text" name="stu_name" value="" class="input-xlarge">
                <label>性别</label>
                <select name="stu_sex" class="input-xlarge">
                    <option value="0">男</option>
                    <option value="1">女</option>
                </select>
                <label>楼号</label>
                <select name="dor_ID" class="input-xlarge">
                    <?php $selectDor = "select * from tbl_dormitory";
                    if($selDor = mysqli_query($db,$selectDor)){
                        while($rows = mysqli_fetch_assoc($selDor)){
                            echo "<option value=".$rows["dor_ID"].">".$rows["dor_address"]."</option>";
                        }
                    }?>
                </select>
                <label>寝室号</label>
                <input type="text" name="room_ID" value="" class="input-xlarge">
                <div class="modal-footer">
                    <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                    <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="新建">
                </div>
            </form>
            <br/><br/><br/>
        </div>
    </div>

    <!--删除信息-->
    <div class="modal small hide fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">删除信息</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="icon-warning-sign modal-icon"></i>确定删除这条信息吗？</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-danger" data-dismiss="modal">删除</button>
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
