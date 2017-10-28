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
    <!--点击发布的信息直接显示在通知公告栏里-->
    <div class="block">
        <p class="block-heading">通知公告栏</p>
        <div class="block-body">
            <table width="996">
                <tbody>
                <?php
                /*
                $sqlNews="SELECT * FROM news ORDER BY NewsDate DESC ";
                if($resN=mysqli_query($db,$sqlNews)){
                    while ($rowsN=mysqli_fetch_assoc($resN)){
                        echo '<tr>';
                        echo '<td width="738"><a href="#">'.$rowsN["NewsTitle"].'</a></td>';
                        echo '<td width="242">'.$rowsN["NewsDate"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td width="980">'.$rowsN["NewsContent"].'</td>';
                        echo '</tr>';
                    }
                }*/
                ?>
                </tbody>
            </table>


        </div>
    </div>
    <?php
    $sqlTheStudent = "SELECT * FROM user WHERE LoginName='" . $_GET["LoginName"] . "'";
  /*if ($resTS = mysqli_query($db, $sqlTheStudent)) {
    ?>
    <div class="well">
        <div align="center">
            <table width="668" height="134" border="1">
                <tbody>
                <?php
                if ($rowsTS = mysqli_fetch_assoc($resTS)) {
                    echo "<tr align='center'>";
                    echo "  <td width='125'>姓名</td>";
                    echo "<td width='95'>" . $rowsTS["UserName"] . "</td>";
                    echo "<td width='82'>性别</td>";
                    $sex = $rowsTS["Sex"] ? "女" : "男";
                    echo "<td width='83'>" . $sex . "</td>";
                    echo "<td width='74'>创建日期</td>";
                    echo "<td width='87'>" . $rowsTS["CreateDate"] . "</td>";
                    echo '<tr align="center">';
                    echo '<td>电子邮箱</td>';
                    echo '<td colspan="5">' . $rowsTS["Email"] . '</td>';
                    echo '</tr>';
                    echo '<tr align="center">';
                    echo '    <td>联系电话</td>';
                    echo '    <td colspan="5">' . $rowsTS["Tel"] . '</td>';
                    echo '</tr>';
                    echo '<tr align="center">';
                    echo '    <td>寝室</td>';
                    echo '    <td colspan="5">' . $rowsTS["RoomId"] . '</td>';
                    echo '</tr>';
                    echo '<tr align="center">';
                    echo '    <td>最后更新日期</td>';
                    echo '    <td colspan="5">' . $rowsTS["UpdateDate"] . '</td>';
                    echo '</tr>';
                }
                ?>


                </tbody>
            </table>

        </div>
    </div>
    <?php
}

    $sqlThefeed = "SELECT * FROM user,expenses WHERE user.RoomId=expenses.RoomId AND LoginName='" . $_GET["LoginName"] . "'";
if ($resTF = mysqli_query($db, $sqlThefeed)) {
    ?>
    <div class="well">
        <div align="center">
            <table width="668" height="134" border="1">
                <tbody>
                <?php
                while ($rowsTF = mysqli_fetch_assoc($resTF)) {
                    ?>
                    <tr align="center">
                        <td width="125">寝室号</td>
                        <td width="95" colspan="1">&nbsp;<?php echo $rowsTF["RoomId"]; ?></td>
                        <td width="74">创建日期</td>
                        <td width="87">&nbsp;<?php echo $rowsTF["CreateDate"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>费用类型</td>
                        <td colspan="5">&nbsp;<?php echo $rowsTF["ExpensesName"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>费用</td>
                        <td colspan="5"><?php echo $rowsTF["RoomId"]; ?>&nbsp;</td>
                    </tr>
                    <tr align="center">
                        <td>最后更新日期</td>
                        <td colspan="5"><?php echo $rowsTF["UpdateDate"]; ?>&nbsp;</td>
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
    $sqlTheDor = "SELECT * FROM user,bedroom WHERE user.RoomId=bedroom.RoomId AND LoginName='" . $_GET["LoginName"] . "'";
if ($resTD = mysqli_query($db, $sqlTheDor)) {
    ?>
    <div class="well">
        <div align="center">
            <table width="668" height="134" border="1">
                <tbody>

                <?php
                while ($rowsTD = mysqli_fetch_assoc($resTD)) {
                    ?>

                    <tr align="center">
                        <td width="125">寝室号</td>
                        <td width="95" colspan="1">&nbsp;<?php echo $rowsTD["RoomId"]; ?></td>
                        <td width="74">创建日期</td>
                        <td width="87">&nbsp;<?php echo $rowsTD["CreateDate"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>应住人数</td>
                        <td colspan="5"><?php echo $rowsTD["Number"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>实住人数</td>
                        <td colspan="5"><?php echo $rowsTD["UserNum"]; ?></td>
                    </tr>
                    <tr align="center">
                        <td>最后更新日期</td>
                        <td colspan="5">&nbsp;<?php echo $rowsTD["UpdateDate"]; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
<?php
} */
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



