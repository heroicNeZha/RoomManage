<div class="btn-toolbar">
    <button class="btn btn-primary"><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"><i class="icon-plus"></i> 新建</font></a></button>
    <button class="btn">导入</button>
    <button class="btn">导出</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>亲属所在党组织</th>
          <th>亲属姓名</th>
          <th>亲属职业</th>
          <th>亲属政治面貌</th>
          <th>与本人关系</th>
          <th>发出时间</th>
          <th>返回时间</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>所在党组织</td>
          <td>李四</td>
          <td>医生</td>
          <td>党员</td>
          <td>父子</td>
          <td>2008.12.21</td>
          <td>2008.12.21</td>
          <td>
              <a href="#change" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#delete" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>所在党组织</td>
          <td>王五</td>
          <td>医生</td>
          <td>党员</td>
          <td>母子</td>
          <td>2008.12.21</td>
          <td>2008.12.21</td>
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

<!--修改组织信息-->
<div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">修改信息</h3>
    </div>
    <div class="modal-body">     
    <form id="tab">
     	<label>亲属所在党组织</label>
        <input type="text" name="party" value="" class="input-xlarge">
        <label>亲属姓名</label>
        <input type="text" name="name" value="" class="input-xlarge">
        <label>亲属职业</label>
        <input type="text" name="job" value="" class="input-xlarge">
        <label>亲属政治面貌</label>
        <input type="text" name="politics_status" value="" class="input-xlarge">
        <label>与本人关系</label>
         <input type="text" name="relationship" value="" class="input-xlarge">
         <label>发出时间</label>
         <input type="date" name="go_date" />
         <label>返回时间</label>
         <input type="date" name="back_date" />
        
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>
    
</div>

<!--删除组织信息-->
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
