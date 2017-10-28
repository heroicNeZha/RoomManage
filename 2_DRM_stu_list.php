<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("footer_head.php");
    require_once ("config.php");
    session_start();
    if(isset($_COOKIE["PHPSESSID"])){
    session_id($_COOKIE["PHPSESSID"]);
    if(isset($_SESSION["right"])&&$_SESSION["right"]==1){

    if(isset($_POST["submit"])&&$_POST["submit"]){
        $dt = new DateTime();
        $dt->format('Y-m-d H:i:s');
        $sqlAddStu="INSERT INTO `user` (UserId,LoginName,LoginPwd,UserName,Sex,Email,Tel,RoomId,`Right`,CreateDate,UpdateDate)
 VALUES 
 (NULL,
  '".$_POST["LoginName"]."',
  '".sha1("123456")."',
   '".$_POST["UserName"]."',
   '".$_POST["Sex"]."',
    '".$_POST["Email"]."',
     '".$_POST["Tel"]."',
      '".$_POST["RoomId"]."',
       1,
        '".date('Y-m-d H:i:s')."', 
        '".date('Y-m-d H:i:s')."')";
        if(mysqli_query($db,$sqlAddStu)){
            $sql="UPDATE `bedroom` SET `UserNum` = `UserNum` +1 WHERE `bedroom`.`RoomId` = ".$_POST["RoomId"];
            mysqli_query($db,$sql);
echo 2;
        }else {
            echo $sqlAddStu;
            ?>
            <script>
                alert("数据不能为空！");
                window.location = "1_DRM_stu_list.php";
            </script>
            <?php
        }
    }
    ?>
</head>
<body class="">   
	<?php include("2_DRM_footer_body.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">学生信息</h1>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a> /<span class="divider">学生信息</span></li>
        </ul>

        <div class="container-fluid">
        <div class="row-fluid">
                    <div class="btn-toolbar">
    <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>新建</font></a></button>
    </div>
    	<!--搜索框-->
    	<div class="search-well">
                <form class="form-inline" action="search_stu.php" method="post">
                    <input class="input-xlarge" name="stu" placeholder="根据学号查询" id="appendedInputButton" type="text">
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
          <th width="271">姓名</th>
          <th width="209">性别</th>
            <th width="209">寝室</th>
          <th width="190">&nbsp;</th>
          <th width="39" style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sqlAllStudents="SELECT * FROM user WHERE `Right`=1";
if($resAS=mysqli_query($db,$sqlAllStudents)){
    while ($rows=mysqli_fetch_assoc($resAS)){
        echo "<tr>";
        echo "<td>".$rows["LoginName"]."</td>";
        echo "<td>".$rows["UserName"]."</td>";
        $sex=$rows["Sex"]?"女":"男";
        echo "<td>".$sex."</td>";
        echo "<td>".$rows["RoomId"]."</td>";
        echo "<td><a href='1_DRM_stu_detail.php?stu=".$rows["LoginName"]."'>详细信息</a></td>";
        echo "<td>";
        ?>
        <form action="del.php" method="post">
        <input type="hidden" name="UserId" value="<?php echo $rows["UserId"];?>">
        <input type="hidden" name="type" value="stu">
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
    <form id="tab" action="1_DRM_stu_list.php" method="post">
     	<label>学号</label>
        <input type="text" name="LoginName" value="" class="input-xlarge">
        <label>姓名</label>
        <input type="text" name="UserName" value="" class="input-xlarge">
        <label>性别</label>
        <select name="Sex">
        	<option value="0">男</option>
            <option value="1">女</option>
        </select>
        <label>电子邮箱</label>
        <input type="text" name="Email" value="" class="input-xlarge">
        <label>电话</label>
        <input type="text" name="Tel" value="" class="input-xlarge">
        <label>寝室号</label>
        <input type="text" name="RoomId" value="" class="input-xlarge">
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
