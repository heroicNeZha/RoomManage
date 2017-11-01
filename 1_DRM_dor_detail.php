<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==0){
    if(isset($_GET["dor_ID"])&&isset($_GET["room_ID"])){
    $room_ID = $_GET["room_ID"];
    $dor_ID = $_GET["dor_ID"];
    $sqlTheDor= "SELECT *,(SELECT count(*) FROM tbl_stu_dor WHERE tbl_stu_dor.room_ID = '$room_ID'AND tbl_stu_dor.dor_ID = '$dor_ID') now_num
FROM tbl_room 
LEFT JOIN tbl_dormitory ON tbl_dormitory.dor_ID = tbl_room.dor_ID
WHERE tbl_room.room_ID='$room_ID' AND tbl_room.dor_ID='$dor_ID'";
    ?>
</head>
<body class="">

<?php include("1_DRM_footer_body.php"); ?>

<div class="content">

    <div class="header">

        <h1 class="page-title">详细信息</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> /<a href="1_DRM_dor_list.php">寝室信息</a> /<span class="divider">详细信息</span>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">

            <?php
            if($resTD=mysqli_query($db,$sqlTheDor)) {
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
                        <td colspan=""><?php echo $rowsTD["room_num"]; ?></td>
                        <th>实住人数</th>
                        <td colspan=""><?php echo $rowsTD["now_num"]; ?></td>
                    </tr>
                    <?php
                    $selectStu = "SELECT * FROM tbl_stu_dor 
LEFT JOIN tbl_student ON tbl_stu_dor.stu_ID = tbl_student.stu_ID
WHERE room_ID = $room_ID AND dor_ID = $dor_ID";
                    if ($resS = mysqli_query($db,$selectStu)){
                        $flag = 1;
                        while ($rowsS = mysqli_fetch_assoc($resS)){
                            if ($flag) {
                                ?>
                                <tr align="center">
                                    <th colspan="5">宿舍成员</th>
                                </tr>
                                <tr align="center">
                                    <th>学号</th>
                                    <td colspan=""><?php echo $rowsS["stu_ID"]; ?></td>
                                    <th>姓名</th>
                                    <td colspan=""><?php echo $rowsS["stu_name"]; ?></td>
                                </tr>
                                <?php
                                $flag = 0;
                            }else{
                                ?>
                                <tr align="center">
                                    <th>学号</th>
                                    <td colspan=""><?php echo $rowsS["stu_ID"]; ?></td>
                                    <th>姓名</th>
                                    <td colspan=""><?php echo $rowsS["stu_name"]; ?></td>
                                </tr>
                                <?php
                            }
                        }
                    }
                    ?>
                    </tbody>
                    </table>

                    </div>
                    </div><?php
                }
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
}else{
    ?>
    <script>
        alert("参数有误！");
        window.location = "1_DRM_dor_list.php";
    </script>
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


