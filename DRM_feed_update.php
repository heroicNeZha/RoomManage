<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 20:57
 */
if(isset($_POST["submit"])&&$_POST["submit"]){

    require_once ("config.php");
    $sqlUpdateFeed="UPDATE
  `expenses`
SET
  `ExpensesName` = '".$_POST["ExpensesName"]."',
  `Price` = '".$_POST["Price"]."',
    `UpdateDate` = '".date('Y-m-d H:i:s')."'
WHERE
  `expenses`.`ExpensesId` = ".$_POST["ExpensesId"];
    if($resUS=mysqli_query($db,$sqlUpdateFeed)){
        ?>
        <script>
            window.location = "1_DRM_feed_detail.php?dor=<?php echo $_POST["dor"];?>&ExpensesId=<?php echo $_POST["ExpensesId"];?>";
        </script>
        <?php
    }else{
        echo $sqlUpdateFeed;
    }
}