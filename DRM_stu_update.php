<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 18:37
 */
if(isset($_POST["submit"])&&$_POST["submit"]){

    require_once ("config.php");
    $sqlUpdateStudent="UPDATE
  `user`
SET
  `LoginPwd` = SHA1('123456'),
  `UserName` = '".$_POST["name"]."',
  `Sex` = '".$_POST["sex"]."',
  `Email` = '".$_POST["email"]."',
  `Tel` = '".$_POST["tel"]."',
`RoomId` ='".$_POST["dor"]."',
    `UpdateDate` = '".date('Y-m-d H:i:s')."'
WHERE
  `user`.`UserId` = ".$_POST["UserId"];
    if($resUS=mysqli_query($db,$sqlUpdateStudent)){
        echo 1;
        ?>
        <script>
            window.location = "1_DRM_stu_detail.php?stu=<?php echo $_POST["LoginName"];?>";
        </script>
        <?php
    }else{
        echo $sqlUpdateStudent;
    }
}