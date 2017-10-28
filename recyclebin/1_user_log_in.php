<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("footer_head.php"); ?>
  </head>

 
  <body class=""> 
   <?php include("1_DRM_footer_body.php"); ?>
    
<div class="content">
        
   <div class="header">       
    	<h1 class="page-title">用户登录信息表</h1>
   </div>        
   <ul class="breadcrumb">
        <li><a href="1_DRM_index.php">返回首页</a> / <span class="divider">用户登录信息表</span></li>
   </ul>
	<div class="container-fluid">
      <div class="row-fluid">
      <div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-plus"></i> <a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">新建</font></a></button>
    <button class="btn">导入</button>
    <button class="btn">导出</button>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>身份证号</th>
          <th>用户名</th>
          <th>密码</th>
          <th>类型</th>
          <th>权限</th> 
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>123456786567804678</td>
          <td>李四</td>
          <td>123456</td>
          <td>管理员</td>
          <td>1</td>
          <td>
              <a href="#change" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#delete" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
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
    <form id="tab">
     	<label>身份证号</label>
        <input type="text" name="ID_number" value="" class="input-xlarge">
        <label>用户名</label>
        <input type="text" name="username" value="" class="input-xlarge">
       	<label>密码</label>
        <input type="text" name="password" value="" class="input-xlarge">
        <label>类型</label>
        <select name="type">
        	<option value="0">管理员</option>
            <option value="1">党委委员</option>
            <option value="2">组织员</option>
            <option value="3">支部书记</option>
            <option value="4">支部组织委员</option>
            <option value="5">党小组长</option>
            <option value="6">普通用户</option>
        </select>
        <label>权限</label>
    	<select name="rights">
        	<option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
        </select>
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
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


