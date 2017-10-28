<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 18:37
 */
if(isset($_POST["submit"])&&$_POST["submit"]) {

    require_once("config.php");
    $sql = "SELECT UserId FROM user WHERE UserName=" . $_POST["UserName"];
    if ($res = mysqli_query($db, $sql)) {
        $get=mysqli_fetch_assoc($res);
        $sqlUpdateVis = "UPDATE
  `visitor`
SET
  `UserId` = '" . $get["UserId"]. "',
  `Remark` = '" . $_POST["Remark"] . "',
    `UpdateDate` = '" . date('Y-m-d H:i:s') . "'
WHERE
  `visitor`.`VisitorId` = " . $_POST["VisitorId"];
        if ($resUS = mysqli_query($db, $sqlUpdateVis)) {
            ?>
            <script>
                window.location = "1_DRM_visit_detail.php?vis=<?php echo $_POST["VisitorId"];?>";
            </script>
            <?php
        } else {

            ?>
            <script>
                alert("没有该学生！");
                window.location = "1_DRM_visit_detail.php?vis=<?php echo $_POST["VisitorId"];?>";
            </script>
            <?php
        }
    }
}