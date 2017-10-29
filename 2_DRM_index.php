<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("footer_head.php");
   require_once ("config.php");
   session_start();
   if(isset($_COOKIE["PHPSESSID"])){
       session_id($_COOKIE["PHPSESSID"]);
if(isset($_SESSION["right"]) &&$_SESSION["right"]==1){
    if(isset($_POST["submit"])&&$_POST["submit"]){
        $dt = new DateTime();
        $dt->format('Y-m-d H:i:s');
        $sqlAddNews="INSERT INTO `news` (`NewsId`, `NewsTitle`, `NewsContent`, `NewsDate`) VALUES (NULL, '".$_POST["title"]."', '".$_POST["content"]."', '".date('Y-m-d H:i:s')."')";
if(mysqli_query($db,$sqlAddNews)){
}
    }   ?>

  </head>
  <body class="">
  <?php include("2_DRM_footer_body.php"); ?>


  <div class="content">

      <div class="header">
          <div class="stats">
          </div>
          <h1 class="page-title">你好,教师</h1>
      </div>
      <ul class="breadcrumb">
          <li><a href="1_DRM_index.php">返回首页</a> <span class="divider"></span></li>
      </ul>
      <div class="copyrights"><a href="http://www.sylu.edu.cn/sylusite/"  title="官网">沈阳理工大学信息学院官网</a></div>
      <div class="container-fluid">
          <div class="row-fluid">


              <div class="row-fluid">

                  <div class="alert alert-info">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>欢迎来到:</strong>沈阳理工大学寝室管理系统</div>
              </div>
          </div>
          <div class="btn-toolbar">
              <button class="btn btn-primary"><a href="#publish" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>发布信息</font></a></button>
          </div>

          <!--点击发布的信息直接显示在通知公告栏里-->
          <div class="block">
              <p class="block-heading">通知公告栏</p>
              <div class="block-body">
                  <table width="996">
                      <tbody>
                      <?php
                      $sqlNews="SELECT * FROM news ORDER BY NewsDate DESC ";
                      if($resN=mysqli_query($db,$sqlNews)){
                          while ($rowsN=mysqli_fetch_assoc($resN)){
                                echo '<tr>';
                                echo '<td width="738"><a href="#">'.$rowsN["NewsTitle"].'</a></td>';
                              echo '<td width="242"></td>';
                              echo '<td width="242"></td>';
                              echo '<td width="242"></td>';
                              echo '<td width="242">'.$rowsN["NewsDate"].'</td>';

                                echo '</tr>';
                              echo '<tr>';
                              echo '<td width="980">'.$rowsN["NewsContent"].'</td>';
                              echo '<td width="242"></td>';
                              echo '<td width="242"></td>';
                              echo '<td width="242"></td>';
                              ?><td>
                              <form action="del.php" method="post">
                                  <input type="hidden" name="NewsId" value="<?php echo $rowsN["NewsId"];?>">
                                  <input type="hidden" name="type" value="new">
                                  <input type="submit" class="btn btn-danger" onclick="return confirm('确定要删除吗?');" name="submit" value="删除">
                              </form></td>
                              <?php
                              echo '</tr>';
                          }
                      }
                      ?>
                      </tbody>
                  </table>


              </div>
          </div>

          <!--发布信息-->
          <div class="modal small hide fade" id="publish" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">发布信息</h3>
              </div>
              <div class="modal-body">
                  <form id="tab" action="1_DRM_index.php" method="post">
                      <label>标题</label>
                      <input type="text" name="title" id="name" value="张三" class="input-xlarge">
                      <label>内容</label>
                      <textarea name="content"></textarea>
                      <div class="modal-footer">
                          <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                          <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="发布">
                      </div>
                  </form>
                  <br/><br/><br/>
              </div>

          </div>
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
<?php
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



