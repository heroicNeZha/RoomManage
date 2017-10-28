<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("footer_head.php"); ?>
  </head>

<body class="">   
	<?php include("1_DRM_footer_body.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">会议信息表</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="1_DRM_index.php">返回首页</a> <span class="divider"></span></li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i>新建</font></a></button>
    <button class="btn">导入</button>
    <button class="btn">导出</button>
</div>
<!--搜索框-->
    	<div class="search-well">
                <form class="form-inline">
                    <input class="input-xlarge" placeholder="根据会议ID查询" id="appendedInputButton" type="text">
                    <button class="btn" type="button"><i class="icon-search"></i> 查询</button>
                </form>
     	</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>会议ID</th>
          <th>日期时间</th>
          <th>地点</th>
          <th>召集部门ID</th>
          <th>会议类型</th>
          <th>会议主题</th>
          <th>会议内容</th>
          <th>照片</th>
          <th>出席人员</th>
          <th>缺席人员</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>0012</td>
          <td>2012.03.04</td>
          <td>信息科学与工程学院</td>
          <td>00123</td>
          <td>党课</td>
          <td>XXX</td>
          <td>XXXX</td>
          <td><a href="1_media.php">照片</a></td>
          <td><a href="1_pam_metting_attend.php">出席人员</a></td>
          <td><a href="1_pam_metting_unattend.php">缺席人员</a></td>
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
     	<label>会议ID</label>
        <input type="text" name="ID" id="ID" value="" class="input-xlarge">
        <label>日期时间</label>
       	<input type="date" name="dataTime">
        <label>地点</label>
        <input type="text" name="place" id="place" value="" class="input-xlarge">
        <label>召集部门ID</label>
        <input type="text" name="call_ID" id="call_ID" value="" class="input-xlarge">
        <label>会议类型</label>
        <input type="text" name="metting_type" id="metting_type" value="" class="input-xlarge">
        <label>会议主题</label>
         <input type="text" name="metting_theme" id="metting_theme" value="" class="input-xlarge">
       	<label>会议内容</label>
        <input type="text" name="metting_content" id="metting_content" value="" class="input-xlarge">
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


