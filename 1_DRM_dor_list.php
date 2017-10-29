<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&& $_SESSION["right"]==0){
    if(isset($_POST["submit"])&&$_POST["submit"]) {
        if ($_POST["submit"] == "新建") {
            $dor_ID = $_POST["dor_ID"];
            $room_ID = $_POST["room_ID"];
            $room_num = $_POST["room_num"];
            $sqlAddStu = "INSERT INTO `tbl_room` (`dor_ID`, `room_ID`, `room_num`) VALUES  ('$dor_ID','$room_ID','$room_num')";
        if (mysqli_query($db, $sqlAddStu)) { ?>
            <script>alert("新建成功!");</script>
        <?php
        } else {
        echo $sqlAddStu;
        ?>
            <script>alert("数据不能为空！");
                window.location = "1_DRM_stu_list.php";</script>
        <?php
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
        <h1 class="page-title">寝室信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">寝室信息</span></li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>新建</font></a></button>
            </div>
            <!--搜索框-->
            <div class="search-well">
                <form class="form-inline" action="search_dor.php" method="post">
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
                <th width="253">楼号</th>
                <th width="253">寝室号</th>
                <th width="271">应住</th>
                <th width="209">实住</th>
                <th width="190">&nbsp;</th>
                <th width="39" style="width: 26px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sqlAllRoom="SELECT tbl_dormitory.dor_address,tbl_room.dor_ID,tbl_room.room_ID,tbl_room.room_num,
(select COUNT(*) FROM tbl_stu_dor WHERE room_ID = tbl_room.room_ID AND dor_ID = tbl_room.dor_ID) nov_num
FROM tbl_dormitory,tbl_room
where tbl_dormitory.dor_ID=tbl_room.dor_ID
ORDER BY tbl_dormitory.dor_ID";
            if($resAR=mysqli_query($db,$sqlAllRoom)){
                while ($rows=mysqli_fetch_assoc($resAR)){
                    echo "<tr>";
                    echo "<td>".$rows["dor_address"]."</td>";
                    echo "<td>".$rows["room_ID"]."</td>";
                    echo "<td>".$rows["room_num"]."</td>";
                    echo "<td>".$rows["nov_num"]."</td>";
                    echo "<td><a href='1_DRM_dor_detail.php?dor_ID=".$rows["dor_ID"]."&room_ID=".$rows["room_ID"]."'>详细信息</a></td>";
                    echo "<td>";
                    ?>
                    <form action="1_DRM_dor_list.php" method="post">
                    <input type="hidden" name="dor_ID" value="<?php echo $rows["dor_ID"];?>">
                    <input type="hidden" name="room_ID" value="<?php echo $rows["room_ID"];?>">
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

    <!--编辑信息-->
    <div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">编辑信息</h3>
        </div>
        <div class="modal-body">
            <form id="tab" action="1_DRM_dor_list.php" method="post">
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
                <label>应住人数</label>
                <input type="text" name="room_num" value="" class="input-xlarge">
                <label></label>
                <input type="hidden" name="RoomName" value="useless" class="input-xlarge">
                <input type="hidden" name="type" value="insert">
                <div class="modal-footer">
                    <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                    <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="新建">
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


