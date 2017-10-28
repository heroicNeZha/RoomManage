<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/20
 * Time: 0:05
 */
require_once ("config.php");
if(isset($_POST["submit"])&&$_POST["submit"])
switch ($_POST["type"]){
    case 'stu':{
        echo $_POST["UserId"];
        $sqlDelStu="DELETE FROM `user` WHERE `user`.`UserId` = ".$_POST["UserId"];
        if($resDS=mysqli_query($db,$sqlDelStu)){
            ?>
            <script>
                alert("成功删除！");
                window.location = "1_DRM_stu_list.php";
            </script>
            <?php
    }
    }break;
    case 'dor': {
        echo $_POST["RoomId"];
        $sqlDelDor = "DELETE FROM `bedroom` WHERE `bedroom`.`RoomId` = " . $_POST["RoomId"];
        if ($resDD = mysqli_query($db, $sqlDelDor)) {
            ?>
            <script>
                alert("成功删除！");
                window.location = "1_DRM_dor_list.php";
            </script>
        <?php
        }
    }break;
    case 'feed': {
        echo $_POST["ExpensesId"];
        $sqlDelFeed = "DELETE FROM `expenses` WHERE `expenses`.`ExpensesId` = " . $_POST["ExpensesId"];
        if ($resDF = mysqli_query($db, $sqlDelFeed)) {
            ?>
            <script>
                alert("成功删除！");
                window.location = "1_DRM_turn_list.php";
            </script>
        <?php
        }
    }break;
    case 'visit': {
        echo $_POST["VisitorId"];
        $sqlDelVis = "DELETE FROM `visitor` WHERE `visitor`.`VisitorId` = " . $_POST["VisitorId"];
        if ($resDV = mysqli_query($db, $sqlDelVis)) {
            ?>
            <script>
                alert("成功删除！");
                window.location = "1_DRM_stu_list.php";
            </script>
        <?php
        }
    }break;
    case 'fix':{
        echo $_POST["RoomId"];
        $sqlDelFix = "DELETE FROM `fix` WHERE `RoomId` = " . $_POST["RoomId"];
        if ($resDFi = mysqli_query($db, $sqlDelFix)) {
            ?>
            <script>
                alert("成功删除！");
                window.location = "1_DRM_fix_list.php";
            </script>
            <?php
        }
    }break;
    case 'new':{
        echo $_POST["RoomId"];
        $sqlDelFix = "DELETE FROM `news` WHERE `NewsId` = " . $_POST["NewsId"];
        if ($resDFi = mysqli_query($db, $sqlDelFix)) {
            ?>
            <script>
                alert("成功删除！");
                window.location = "1_DRM_index.php";
            </script>
            <?php
        }
    }break;
}
echo $_POST["type"];