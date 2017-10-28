<div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
      <table width="755" height="134" border="1">
  <tbody>
    <tr align="center">
      <td width="149">姓名</td>
      <td width="133">&nbsp;</td>
      <td width="143">性别</td>
      <td width="52">&nbsp;</td>
      <td width="71">出生年月</td>
      <td width="84">&nbsp;</td>
      <td width="77" rowspan="4">&nbsp;</td>
    </tr>
    <tr align="center">
      <td>民族</td>
      <td>&nbsp;</td>
      <td>籍贯</td>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr align="center">
      <td>申请入党时间</td>
      <td>&nbsp;</td>
      <td>联系电话</td>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr align="center">
      <td>政治面貌</td>
      <td>&nbsp;</td>
      <td>身份证号</td>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr align="center">
      <td>入团时间</td>
      <td>&nbsp;</td>
      <td>专业</td>
      <td colspan="2">&nbsp;</td>
      <td>排名</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >列积极分子时间</p></td>
      <td>&nbsp;</td>
      <td>学历</td>
      <td colspan="2">&nbsp;</td>
      <td>培养人</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >党前培训成绩</p></td>
      <td>&nbsp;</td>
      <td><p >计划发展时间</p></td>
      <td colspan="2">&nbsp;</td>
      <td><p >职务</p></td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >入党时间</p></td>
      <td>&nbsp;</td>
      <td><p >全学程不及格门数</p></td>
      <td colspan="2">&nbsp;</td>
      <td><p >状态</p></td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >家庭住址</p></td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><p >户口所在派出所</p></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >高中入学日期</p></td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><p >高中毕业日期</p></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >积极分子培训时间</p></td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><p >积极分子培训成绩</p></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center">
      <td><p >团员大会日期</p></td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><p >党前培训时间</p></td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </tbody>
</table>

    </div>
</div>
  
<!--修改组织信息-->
<div class="modal small hide fade" id="change" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">编辑信息</h3>
    </div>
    <div class="modal-body">     
    <form id="tab">
        <label>姓名</label>
        <input type="text" name="name" value="" class="input-xlarge">
        <label>性别</label>
        <input type="radio" name="sex" value="男" id="sex_0"  checked="checked" /> 男</label>
        <input type="radio" name="sex" value="女" id="sex_1" />女</label> 
      	<label>出生年月</label>
        <input type="month"  name="datetime"/>
        <label>照片</label>
        <input type="file" name="image" />
        <label>民族</label>
        <select name="nation">
        	<option value="0">汉族</option>
            <option value="1">满族</option>
            <option value="2">回族</option>
        </select>
        <label>籍贯</label>
        <select name="province">
        	<option value="0">辽宁</option>
            <option value="1">河北</option>
            <option value="2">黑龙江</option>
        </select>
        <select name="city">
        	<option value="0">沈阳</option>
            <option value="1">本溪</option>
        </select>
        <select name="district">
        	<option value="0">浑南新区</option>
            <option value="1">皇姑区</option>
        </select>
        <label>申请入党时间</label>
        <input type="date" name="">
        <label>联系电话</label>
        <input type="text" name="tel" value="" class="input-xlarge">
        <label>政治面貌</label>
        <select name="politics_status">
        	<option value="0">中共党员</option>
            <option value="1">XXXX</option>
            <option value="2">XXXX</option>
        </select>
        <label>身份证号</label>
        <input type="text" name="ID_number" value="" class="input-xlarge">
       	<label>入团时间</label>
        <input type="date" name="Join_T_time">
        <label>专业</label>
        <input type="text" name="major" value="" class="input-xlarge">
        <label>排名</label>
        <input type="number" name="ranking" min="0">  
        <label>列积极分子时间</label>
        <input type="date" name="LJJ_time">
        <label>学历</label>
        <input type="text" name="edu" value="" class="input-xlarge">
        <label>家庭住址</label>
        <input type="text" name="Home_Add" value="" class="input-xlarge">
        <label>户口所在派出所</label>
        <input type="text" name="Police_station" value="" class="input-xlarge">
        <label>高中入学日期</label>
        <input type="date" name="senior_start">
        <label>高中毕业日期</label>
        <input type="date" name="senior_end">
        <label>积极分子培训时间</label>
        <input type="date" name="JJPX_time" />
        <label>积极分子培训成绩</label>
        <input type="text" name="JJPX_mark" value="" class="input-xlarge" />
        <label>团员大会日期</label>
        <input type="date" name="Tmember_meet_time" />
        <label>党前培训时间</label>
        <input type="date" name="DQPX_time" />
        <label>党前培训成绩</label>
        <input type="text" name="DQPX_mark" value="" class="input-xlarge"> 
        <label>计划发展时间</label>
        <input type="date" name="Developmentplan_time" />
        <label>职务</label>
        <select name="type">
        	<option value="0">管理员</option>
            <option value="1">党委委员</option>
            <option value="2">组织员</option>
            <option value="3">支部书记</option>
            <option value="4">支部组织委员</option>
            <option value="5">党小组长</option>
            <option value="6">普通用户</option>
        </select>  
        <label>入党时间</label>
        <input type="date" name="RD_datetime" />
        <label>全学程不及格门数</label>
        <input type="text" name="All_funkobject_amount" value="" class="input-xlarge">
        <label>状态</label>
        <select name="state">
        	<option value="0">在校</option>
            <option value="1">毕业</option>
            <option value="2">调出</option>
        </select>
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>   
</div>