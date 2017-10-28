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
        $sql="SELECT UserId FROM user WHERE UserName='".$_POST["UserName"]."'";
        if($res=mysqli_query($db,$sql)){
            if($get=mysqli_fetch_assoc($res)){
                $userid=$get["UserId"];
        $sqlAddVisit="INSERT INTO `visitor` (VisitorId,VisiorName,Remark,UserId,CreateDate,UpdateDate)
 VALUES 
 (NULL,
      '".$_POST["VisiorName"]."',
      '".$_POST["Remark"]."',
      '".$userid."',
        '".date('Y-m-d H:i:s')."', 
        '".date('Y-m-d H:i:s')."')";
        if(mysqli_query($db,$sqlAddVisit)){
            echo 2;
        }
        echo $sqlAddVisit;
            }else{

                ?>
                <script>
                    alert("没有该学生！");
                </script>
                <?php
            }
        }else{
            echo 3;
        }
    }
    ?>
</head>

<body class="">   
	<?php include("1_DRM_footer_body.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">来访信息</h1>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">来访信息</span></li>
        </ul>

        <div class="container-fluid">
        <div class="row-fluid">
                    <div class="btn-toolbar">
    <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>新建</font></a></button>
    </div>
    	<!--搜索框
    	<div class="search-well">
                <form class="form-inline">
                    <input class="input-xlarge" placeholder="删除" id="appendedInputButton" type="text">
                    <button class="btn" type="button"><i class="icon-search"></i>查询</button>
                </form>
     	</div>-->
	</div>
  
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th width="253">来访人</th>
          <th width="271">来访理由</th>
          <th width="209">学生</th>
            <th width="209">日期</th>
          <th width="190">&nbsp;</th>
          <th width="39" style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody><?php
      $sqlAllVisit="SELECT *,UserName,RoomId FROM visitor,user WHERE visitor.UserId=user.UserId";
      if($resAV=mysqli_query($db,$sqlAllVisit)){
          while ($rows=mysqli_fetch_assoc($resAV)){
              echo "<tr>";
              echo "<td>".$rows["VisiorName"]."</td>";
              echo "<td>".$rows["Remark"]."</td>";
              echo "<td>".$rows["UserName"]."</td>";
              echo "<td>".$rows["CreateDate"]."</td>";
              echo "<td><a href='1_DRM_visit_detail.php?vis=".$rows["VisitorId"]."'>详细信息</a></td>";
              echo "<td>";
              ?>
              <form action="del.php" method="post">
              <input type="hidden" name="VisitorId" value="<?php echo $rows["VisitorId"];?>">
              <input type="hidden" name="type" value="visit">
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
    <form id="tab" action="1_DRM_visit_list.php" method="post">
     	<label>来访人</label>
        <input type="text" name="VisiorName" value="" class="input-xlarge">
        <label>来访理由</label>
        <input type="text" name="Remark" value="" class="input-xlarge">
        <label>学生</label>
        <input type="text" name="UserName" value="" class="input-xlarge">
        <div class="modal-footer">
            <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
            <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="新建">
    </form>
        </div>

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


