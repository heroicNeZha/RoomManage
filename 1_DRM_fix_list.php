<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&& $_SESSION["right"]==0){
    if(isset($_POST["submit"])&&$_POST["submit"]){
        $dt = new DateTime();
        $dt->format('Y-m-d H:i:s');
        $sqlAddStu="INSERT INTO `bedroom` (RoomId,RoomName,Number,UserNum,CreateDate,UpdateDate)
 VALUES 
 (
  '".$_POST["RoomId"]."',
   '".$_POST["RoomName"]."',
   '".$_POST["Number"]."',
    0,
        '".date('Y-m-d H:i:s')."', 
        '".date('Y-m-d H:i:s')."')";
        if(mysqli_query($db,$sqlAddStu)){
        }
    }
    ?>
</head>

<body class="">   
	<?php include("1_DRM_footer_body.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">报修信息</h1>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">报修信息</span></li>
        </ul>

<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th width="253">寝室号</th>
          <th width="1000">内容</th>
          <th width="190">&nbsp;</th>
          <th width="39" style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sqlAllFix="SELECT * FROM fix";
      if($resAF=mysqli_query($db,$sqlAllFix)){
          while ($rows=mysqli_fetch_assoc($resAF)){
              echo "<tr>";
              echo "<td>".$rows["RoomId"]."</td>";
              echo "<td>".$rows["Content"]."</td>";
              echo "<td>";
              ?>
              <form action="del.php" method="post">
              <input type="hidden" name="RoomId" value="<?php echo $rows["RoomId"];?>">
              <input type="hidden" name="type" value="fix">
              <input type="submit" class="btn btn-danger" onclick="return confirm('确定已经完成了吗?');" name="submit" value="完成">
              </form><?php
              echo " </td>";
              echo "</tr>";
          }
      }
      ?>
     
      </tbody>
    </table>
</div>
<!--分页-->
<div class="pagination">
    <ul>
        <li><a href="#">上一页</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">下一页</a></li>
    </ul>
</div>

<!--编辑信息-->
<div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">编辑信息</h3>
    </div>
    <div class="modal-body">     
    <form id="tab" action="1_DRM_dor_list.php" method="post">
        <label>寝室号</label>
        <input type="text" name="RoomId" value="" class="input-xlarge">
        <label>应住人数</label>
        <input type="text" name="Number" value="" class="input-xlarge">
        <label></label>
        <input type="hidden" name="RoomName" value="useless" class="input-xlarge">
        <div class="modal-footer">
            <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
            <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="新建">
        </div>

    </form>
    	<br/><br/><br/>
  </div>    
</div>

<!--删除信息-->
<div class="modal small hide fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">删除信息</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>确定删除这条信息吗？</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" data-dismiss="modal">删除</button>
    </div>
</div>

<?php include("footer_bottom.php");?> 
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
    echo  "权限不足！";
}
}
else{
    ?>
    <script>
        window.location = "sign-in.php";
    </script>
    <?php
}


