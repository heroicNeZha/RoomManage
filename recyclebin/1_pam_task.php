<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("footer_head.php"); ?>
  </head>

<body class="">   
	<?php include("1_DRM_footer_body.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">开展工作情况表</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a> <span class="divider"></span></li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
	<div class="btn-toolbar">
    <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal" ><font color="#F7F8F7"><i class="icon-plus"></i> 新建</font></a></button>
    <button class="btn">导入</button>
    <button class="btn">导出</button> 
</div>
 <!--搜索框-->
    	<div class="search-well">
                <form class="form-inline">
                    <input class="input-xlarge" placeholder="根据工作ID查询" id="appendedInputButton" type="text">
                    <button class="btn" type="button"><i class="icon-search"></i> 查询</button>
                </form>
     	</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>工作ID</th>
          <th>日期时间</th>
          <th>工作主题</th>
          <th>工作内容</th>
          <th>完成情况</th>
          <th>承担部门ID</th>
          <th>备注</th>
          <th>参与工作人员</th>
          <th>照片</th> 
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>2012.03.04</td>
          <td>工作主题</td>
          <td>工作内容</td>
          <td>完成情况</td>
          <td>承担部门ID</td>
          <td>备注</td>
          <td><a href="1_pam_task_participator.php">参与工作人员</a></td>
           <td><a href="1_media.php">照片</a></td>
          <td>
              <a href="#change" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#delete" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
     
      </tbody>
    </table>
</div>
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

<!--修改信息-->
<div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">修改信息</h3>
    </div>
    <div class="modal-body">     
    <form id="tab">
     	<label>工作ID</label>
        <input type="text" name="ID" id="ID" value="" class="input-xlarge">
        <label>日期时间</label>
        <input type="date" name="dataTime">
        <label>工作主题</label>
        <input type="text" name="theme" id="theme" value="" class="input-xlarge">
        <label>工作内容</label>
        <input type="text" name="content" id="content" value="" class="input-xlarge">
        <label>完成情况</label>
        <input type="text" name="status" id="status" value="" class="input-xlarge">
        <label>承担部门ID</label>
         <input type="text" name="principal_ID" id="principal_ID" value="" class="input-xlarge">
       	<label>备注</label>
        <input type="text" name="remarks" id="remarks" value="" class="input-xlarge">
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


