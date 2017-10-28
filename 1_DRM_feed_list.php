<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==0){
    if(isset($_POST["submit"])&&$_POST["submit"]){
        $dt = new DateTime();
        $dt->format('Y-m-d H:i:s');
        $sqlAddStu="INSERT INTO `expenses` (ExpensesId,ExpensesName,Year,Month,Price,RoomId,CreateDate,UpdateDate)
 VALUES 
 (NULL,
  '".$_POST["ExpensesName"]."',
   '".$_POST["Year"]."',
    '".$_POST["Month"]."',
     '".$_POST["Price"]."',
      '".$_POST["RoomId"]."',
        '".date('Y-m-d H:i:s')."', 
        '".date('Y-m-d H:i:s')."')";
        if(mysqli_query($db,$sqlAddStu)){
        }
        else{
            ?>
            <script>
                alert("没有该寝室！");
            </script>
            <?php
        }
    }
    ?>
</head>

<body class="">   
	<?php include("1_DRM_footer_body.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">费用信息</h1>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">费用信息</span></li>
        </ul>

        <div class="container-fluid">
        <div class="row-fluid">
                    <div class="btn-toolbar">
    <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>新建</font></a></button>
    </div>
    	<!--搜索框-->
    	<div class="search-well">
            <form class="form-inline" action="search_feed.php" method="post">
                <input class="input-xlarge" placeholder="根据寝室号查询" id="appendedInputButton" type="text" name="dor">
                <input class="btn" type="submit" name="submit" value="查询">
            </form>
     	</div>
	</div>
  
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th width="253">学号</th>
          <th width="271">原因</th>
          <th width="209">类型</th>
            <th width="209">日期</th>
          <th width="190">&nbsp;</th>
          <th width="39" style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sqlAllFeed="SELECT * FROM expenses";
      if($resAF=mysqli_query($db,$sqlAllFeed)){
          while ($rows=mysqli_fetch_assoc($resAF)){
              echo "<tr>";
              echo "<td>".$rows["RoomId"]."</td>";
              echo "<td>".$rows["ExpensesName"]."</td>";
              echo "<td>".$rows["Price"]."</td>";
              echo "<td><a href='1_DRM_feed_detail.php?dor=".$rows["RoomId"]."&ExpensesId=".$rows["ExpensesId"]."'>详细信息</a></td>";
              echo "<td>";
              ?>
              <form action="del.php" method="post">
              <input type="hidden" name="ExpensesId" value="<?php echo $rows["ExpensesId"];?>">
              <input type="hidden" name="type" value="feed">
              <input type="submit" class="btn btn-danger" onclick="return confirm('确定要删除吗?');" name="submit" value="删除">
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
    <form id="tab" action="1_DRM_feed_list.php" method="post">
     	<label>寝室号</label>
        <input type="text" name="RoomId" value="" class="input-xlarge">
        <label>年</label>
        <input type="text" name="Year" value="" class="input-xlarge">
        <label>月</label>
        <input type="text" name="Month" value="" class="input-xlarge">
        <label>类型</label>
        <input type="text" name="ExpensesName" value="" class="input-xlarge">
        <label>费用</label>
        <input type="text" name="Price" value="" class="input-xlarge">
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


