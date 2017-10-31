<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    if(isset($_POST["submit"])&&$_POST["submit"]){
        $prefix = $_GET["fix"];
        $sqlChangePwd="UPDATE tbl_$prefix SET ".$prefix."_password ='".$_POST["newPassword"]."' WHERE ".$prefix."_userName='" .$_POST["username"]."' AND ".$prefix."_password='" .$_POST["oldPassword"]."'";
        if(mysqli_query($db,$sqlChangePwd)){
            ?>
            <script>
                alert("重置成功！");
                window.location = "logout.php";
            </script>
        <?php
        }
        else {
            echo $sqlChangePwd;
            ?>
            <script>
                alert("重置失败！");
            </script>
            <?php
        }
    }
    ?>
</head>


<body class="">

<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav pull-right">

        </ul>
        <a class="brand" href="1_DRM_index.php"><span class="first">沈阳理工大学</span> <span class="second">学生宿舍管理系统</span></a>
    </div>
</div>

<div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">重置密码</p>
            <div class="block-body">
                <form action="reset-password.php?fix=<?php echo $_GET["fix"];?>" method="post">
                    <label>账号：</label>
                    <input type="text" name="username" id="username" class="span12">
                    <label>原始密码：</label>
                    <input type="password" name="oldPassword" id="oldPassword" class="span12">
                    <label>新密码：</label>
                    <input type="password" name="newPassword" id="newPassword" class="span12">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="重置">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <a href="sign-in.php">登录到你的账户</a>
    </div>
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


