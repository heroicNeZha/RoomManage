<!DOCTYPE html>
<html lang="en">
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"]) &&$_SESSION["right"]==2&& $_SESSION["un"]==$_GET["LoginName"]){
    if(isset($_POST["submit"])&&$_POST['submit']) {
    $sqlAddFix="INSERT INTO `fix` (`RoomId`, `Content`, `CreateDate`, `UpdateDate`) VALUES ('".$_POST['RoomId']."', '".$_POST['content']."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."');";
    if($res=mysqli_query($db,$sqlAddFix)){

        ?>
        <script>
            alert("报修成功");
            window.location = "2_DRM_index.php?LoginName=<?php echo $_GET["LoginName"]?>";
        </script>
    <?php
    }
}else{
        echo $sqlAddFix;
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
echo $sqlAddFix;
