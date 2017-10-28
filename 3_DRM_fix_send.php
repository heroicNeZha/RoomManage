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

        $sqlGetDor="SELECT RoomId FROM user WHERE LoginName=".$_SESSION['un'];
        if($res=mysqli_query($db,$sqlGetDor)){
            if($rows=mysqli_fetch_assoc($res)){
                $rid=$rows['RoomId'];
            }
        }
    ?>
</head>
<body>
<?php include("3_DRM_footer_body.php") ?>
<div class="content">
    <div class="header">
        <h1 class="page-title">报修信息</h1>
    </div>
    <form class="form-inline" action="3_DRM_fix_send_.php?LoginName=<?php echo $_SESSION['un']?>" method="post" style="width:30%; margin-left: 30%; margin-top:4%">
        <label style="text-align: center;">报修内容</label>
        <input type="text" name="content" value="">
        <input type="hidden" name="RoomId" value="<?php echo $rid?>">
            <input type="submit" name="submit" class="btn btn-github" value="确定">

    </form>
</div>
</body>
<?php

}}else{
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
