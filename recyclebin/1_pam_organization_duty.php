<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("footer_head.php"); ?>
  </head>

 
  <body class=""> 
   <?php include("1_DRM_footer_body.php"); ?>
    
<div class="content">
        
   <div class="header">       
    	<h1 class="page-title">组织机构职务表</h1>
   </div>        
   <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> / <a href="1_pam_organization.php">组织机构信息表</a> /<span class="divider">组织机构职务表</span></li>
   </ul>
	<div class="container-fluid">
      <div class="row-fluid">
             
                
<?php include("footer_pam_origization_duty.php");?>  
  
<?php include("footer_bottom.php");?>   
     </div>
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


