<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
   <?php include("footer_head.php"); ?>
  </head>
 
  <body class=""> 
    
 <?php include("1_DRM_footer_body.php"); ?>

    
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">活动出席人员表</h1>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a>  / <a href="1_pam_activity.php">活动信息表</a>/ <span class="divider">活动出席人员表</span></li>
        </ul>

      <?php include("footer_pam_attend.php"); ?>
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


