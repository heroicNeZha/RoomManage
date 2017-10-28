<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==0){
    if(isset($_POST["submit"])&&$_POST["submit"]){
        if ($_POST["submit"] == "调入") {
            $stu_ID = $_POST["stu_ID"];
            $stu_name = $_POST["stu_name"];
            $stu_sex = $_POST["stu_sex"];
            $room_ID = $_POST["room_ID"];
            $dor_ID = $_POST["dor_ID"];
            $upd_type = $_POST["upd_type"];
            $upd_date = $_POST["upd_date"];
            $sqlAddStu = "INSERT INTO `tbl_student` (`stu_ID`, `stu_userName`, `stu_password`, `stu_sex`, `stu_name`, `stu_state`, `stu_class`) VALUES ('$stu_ID', '$stu_ID', '123456', '$stu_sex', '$stu_name', '1', '" . mb_substr($stu_ID, 0, 8, 'utf-8') . "');
INSERT INTO `tbl_stu_dor` (`stu_ID`, `dor_ID`, `room_ID`) VALUES ('$stu_ID', '$dor_ID', '$room_ID');
INSERT INTO `tbl_update` (`stu_ID`,`stu_name`,`dor_ID`, `room_ID`, `upd_type`,`upd_dateTime`) VALUES  ('$stu_ID','$stu_name','$dor_ID','$room_ID','0','$upd_date');";
        if (mysqli_multi_query($db, $sqlAddStu)) { ?>
            <script>alert("新建成功!");
            window.location = "1_DRM_turn_list.php";</script>
        <?php
        } else {
        echo $sqlAddStu;
        ?>
            <script>alert("数据异常！");
               // window.location = "1_DRM_turn_list.php";</script>
        <?php
        }
        }
        else if ($_POST["submit"] == "调出") {
        $stu_ID = $_POST["stu_ID"];
        $upd_date = $_POST["upd_date"];
        //从学生表中提取信息插入到调出表
        $sqlDelStu = "DELETE FROM `tbl_room` WHERE `tbl_room`.`dor_ID` = $dor_ID AND `tbl_room`.`room_ID` =  $room_ID;
        INSERT INTO `tbl_update` (`stu_ID`,`stu_name`,`dor_ID`, `room_ID`, `upd_type`,`upd_dateTime`) VALUES  ('$stu_ID','$stu_name','$dor_ID','$room_ID','1','$upd_date');";
        if (mysqli_query($db, $sqlDelStu)) {?>
            <script>alert("调出成功!"); window.location = "1_DRM_turn_list.php";</script>
        <?php
        } else {
        echo $sqlDelStu;
        ?>
            <script>alert("数据不能为空！");
                window.location = "1_DRM_turn_list.php";</script><?php
        }
        }
        else if ($_POST["submit"] == "删除") {
        $dor_ID = $_POST["dor_ID"];
        $room_ID = $_POST["room_ID"];
        $sqlDelStu = "DELETE FROM `tbl_room` WHERE `tbl_room`.`dor_ID` = $dor_ID AND `tbl_room`.`room_ID` =  $room_ID";
        if (mysqli_query($db, $sqlDelStu)) {?>
            <script>alert("删除成功!");</script>
        <?php
        } else {
        echo $sqlDelStu;
        ?>
            <script>alert("数据不能为空！");
                window.location = "1_DRM_stu_list.php";</script><?php
        }
        }
        else if ($_POST["submit"] == "修改") {
            echo "222";
        }
    }
    ?>
</head>

<body class="">
<?php include("1_DRM_footer_body.php"); ?>

<div class="content">
    <div class="header">
        <h1 class="page-title">调动信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">调动信息</span></li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <button class="btn btn-primary"><a href="#turnIn" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>调入</font></a></button>
                <button class="btn btn-primary"><a href="#turnOut" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-minus"></i>调出</font></a></button>
            </div>
            <!--搜索框-->
            <div class="search-well">
                <form class="form-inline" action="search_feed.php" method="post">
                    <input class="input-xlarge" placeholder="根据寝室号查询" id="appendedInputButton" type="text" name="dor">
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
                <th width="253">姓名</th>
                <th width="209">目标楼号</th>
                <th width="209">目标寝室号</th>
                <th width="209">类型</th>
                <th width="209">日期</th>
                <th width="190">&nbsp;</th>
                <th width="39" style="width: 26px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sqlAllFeed="SELECT tbl_student.stu_ID,tbl_student.stu_name,tbl_update.upd_type,tbl_update.
  upd_ID,tbl_update.upd_dateTime,tbl_update.room_ID,tbl_update.dor_ID
  FROM tbl_update LEFT JOIN tbl_student ON tbl_update.stu_ID = tbl_student.stu_ID";
            if($resAF=mysqli_query($db,$sqlAllFeed)){
                while ($rows=mysqli_fetch_assoc($resAF)){
                    echo "<tr>";
                    echo "<td>".$rows["stu_ID"]."</td>";
                    echo "<td>".$rows["stu_name"]."</td>";
                    echo "<td>".$rows["dor_ID"]."</td>";
                    echo "<td>".$rows["room_ID"]."</td>";
                    echo "<td>";
                    echo $rows["upd_type"]?"调出":"调入";
                    echo "</td>";
                    echo "<td>".$rows["upd_dateTime"]."</td>";
                    echo "<td><a href='1_DRM_feed_detail.php?dor=".$rows["upd_ID"]."'>详细信息</a></td>";
                    echo "<td>";
                    ?>
                    <form action="1_DRM_turn_list.php" method="post">
                    <input type="hidden" name="ExpensesId" value="<?php echo $rows["upd_ID"];?>">
                    <input type="hidden" name="type" value="feed">
                    <input type="submit" class="btn btn-danger" onclick="return confirm('确定要删除吗?');" name="submit" value="删除">
                    </form><?php
                    echo " </td>";
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
    <!--调人信息-->
    <div class="modal small hide fade" id="turnIn" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">调入学生</h3>
        </div>
        <div class="modal-body">
            <form id="tab" action="1_DRM_turn_list.php" method="post">
                <label>学号</label>
                <input type="text" name="stu_ID" value="" class="input-xlarge">
                <label>姓名</label>
                <input type="text" name="stu_name" value="" class="input-xlarge">
                <label>性别</label>
                <select name="stu_sex" class="input-xlarge">
                    <option value="0">男</option>
                    <option value="1">女</option>
                </select>
                <label>目标楼号</label>
                <select name="dor_ID" class="input-xlarge">
                    <?php $selectDor = "select * from tbl_dormitory";
                    if($selDor = mysqli_query($db,$selectDor)){
                        while($rows = mysqli_fetch_assoc($selDor)){
                            echo "<option value=".$rows["dor_ID"].">".$rows["dor_address"]."</option>";
                        }
                    }?>
                </select>
                <label>目标寝室号</label>
                <input type="text" name="room_ID" value="" class="input-xlarge">
                <label>日期</label>
                <input type="date" name="upd_date" value="" class="input-xlarge">
                <div class="modal-footer">
                    <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                    <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="调入">
                </div>

            </form>
        </div>
    </div>


    <!--调出信息-->
    <div class="modal small hide fade" id="turnOut" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">调出学生</h3>
        </div>
        <div class="modal-body">
            <form id="tab" action="1_DRM_turn_list.php" method="post">
                <label>学号</label>
                <input type="text" name="room_ID" value="" class="input-xlarge">
                <label>日期</label>
                <input type="date" name="upd_type" value="" class="input-xlarge">
                <div class="modal-footer">
                    <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                    <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="调出">
                </div>

            </form>
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
</div>
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


