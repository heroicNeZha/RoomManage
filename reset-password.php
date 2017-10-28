<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("footer_head.php");
   require_once ("config.php");
   if(isset($_POST["submit"])&&$_POST["submit"]){
$sqlChangePwd="UPDATE user SET LoginPwd ='" .sha1( $_POST["newPassword"])."' WHERE LoginName='" .$_POST["username"]."' AND LoginPwd='" .sha1( $_POST["oldPassword"])."'";
if(mysqli_query($db,$sqlChangePwd)){
    echo 2222;
}?>
       <script>
           alert("重置成功！");
           window.location = "logout.php";
       </script>
       <?php
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
                <form action="reset-password.php" method="post">
                    <label>学号：</label>
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
        <a href="sign-in.php">Sign in to your account</a>
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


