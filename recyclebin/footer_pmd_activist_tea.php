<div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
      <table width="677" height="134" border="1">
  <tbody>
    <tr align="center">
      <td width="114">姓名</td>
      <td width="99">&nbsp;</td>
      <td width="78">性别</td>
      <td width="77">&nbsp;</td>
      <td width="65">出生年月</td>
      <td width="108">&nbsp;</td>
      <td width="90" rowspan="4">&nbsp;</td>
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
      <td>毕业时间</td>
      <td>&nbsp;</td>
      <td>教工号</td>
      <td colspan="2">&nbsp;</td>
      <td>所属组织</td>
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
      <td><p >家庭住址</p></td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><p >户口所在派出所</p></td>
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
       	<label>毕业时间</label>
        <input type="date" name="Graduation_date">
        <label>教工号</label>
        <input type="text" name="ID_number" value="" class="input-xlarge">
        <label>所属组织</label>
        <select name="">
        	<option value="0">0001</option>
            <option value="1">0002</option>
        </select>
        <label>列积极分子时间</label>
        <input type="date" name="LJJ_time">
        <label>学历</label>
        <input type="text" name="edu" value="" class="input-xlarge">
        <label>家庭住址</label>
        <input type="text" name="Home_Add" value="" class="input-xlarge">
        <label>户口所在派出所</label>
        <input type="text" name="Police_station" value="" class="input-xlarge">
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>   
</div>