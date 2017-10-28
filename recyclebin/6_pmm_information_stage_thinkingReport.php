<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include("footer_head.php"); ?>
  </head>
 
  <body class=""> 
    
 <?php include("6_footer_body.php"); ?>
    
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">思想汇报</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="6_index.php">返回首页</a> /<a href="6_pmm_information_stage.php">文档信息</a> /<span class="divider">思想汇报</span></li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    

 <?php include("footer_pmm_stage_thinkingReport_look.php"); ?>


 <?php include("footer_bottom.php"); ?>
                    
            </div>
        </div>
    </div>

<!--导航动态下拉框-->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


