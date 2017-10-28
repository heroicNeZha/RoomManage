<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 18:37
 */
if(isset($_POST["submit"])&&$_POST["submit"]){

    require_once ("config.php");
    $sqlUpdateDor="UPDATE
  `bedroom`
SET
  `Number` = '".$_POST["Number"]."',
  `UserNum` = '".$_POST["UserNum"]."',
    `UpdateDate` = '".date('Y-m-d H:i:s')."'
WHERE
  `bedroom`.`RoomId` = ".$_POST["RoomId"];
    if($resUS=mysqli_query($db,$sqlUpdateDor)){
        echo 1;
        ?>
        <script>
            window.location = "1_DRM_dor_detail.php?dor=<?php echo $_POST["RoomId"];?>";
        </script>
        <?php
    }else{
        echo $sqlUpdateDor;
    }
}