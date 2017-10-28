<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-plus"></i> <a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">新建</font></a></button>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>提交日期</th>
          <th>备注</th>
          <th>状态</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
       <tr>
          <td>2014年07月22日</td>
          <td>-</td>
          <td>已提交</td>
          <td>
              <a href="#change" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
          </td>
        </tr>
       <tr>
          <td>-</td>
          <td>-</td>
          <td>未提交</td>
          <td>
              <a href="#change" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
          </td>
       </tr>
      </tbody>
    </table>
</div>

<!--编辑信息-->
<div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">编辑信息</h3>
    </div>
    <div class="modal-body">     
    <form id="tab">
        <label>提交日期</label>
		<input type="date" name="Sub_date">
        <label>备注</label>
        <input type="text" name="remark" value="" class="input-xlarge">
        <label>状态</label>
        <select name="state">
        	<option value="0">已提交</option>
            <option value="1">未提交</option>
        </select>
       
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>    
</div>
