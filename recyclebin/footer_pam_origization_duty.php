<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-plus"></i><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7"> 新建</font></a></button>
    <button class="btn">导入</button>
    <button class="btn">导出</button>
</div>
 <!--搜索框-->
    	<div class="search-well">
                <form class="form-inline">
                    <input class="input-xlarge" placeholder="根据身份证号查询" id="appendedInputButton" type="text">
                    <button class="btn" type="button"><i class="icon-search"></i> 查询</button>
                </form>
     	</div>
<div class="well">
    <table class="table">
      <thead>
        <tr> 
          <th>职务名称</th>
          <th>身份证号</th>
          <th>状态</th>
          <th>生效日期</th>
          <th>失效日期</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>党委书记</td>
          <td>134567543243213453</td>
          <td>有效</td>
          <td>2008年12月21日</td>
          <td>2018年06月23日</td> 
          <td>
              <a href="#change" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#delete" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>党支部书记</td>
          <td>138976543243213453</td>
          <td>有效</td>
          <td>2008年12月21日</td>
          <td>2018年06月23日</td> 
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
        <label>职务名称</label>
        <select name="Job_name">
    		<option value="0">党委书记</option>
            <option value="1">党委副书记</option>
            <option value="2">党委组织委员</option>
            <option value="3">党委宣传委员</option>
            <option value="4">党委群工委员</option>
            <option value="5">党委体育委员</option>
            <option value="6">党支部书记</option>
            <option value="7">党支部组织委员</option>
            <option value="8">党支部宣传委员</option>
            <option value="9">党小组</option>
        </select>
        <label>身份证号</label>
        <input type="text" name="ID_number" value="134567543243213453" class="input-xlarge">
        <label>状态</label>
        <select name="state">
        	<option value="0">有效</option>
            <option value="1">无效</option>
        </select>
       	<label>生效日期</label>
        <input type="date" name="Effective_date" />
        <label>失效日期</label>
        <input type="date" name="Expiry_date" /> 
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
