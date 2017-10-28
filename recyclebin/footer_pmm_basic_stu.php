<div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
      <table width="872" border="1" align="center">
        <tbody>
          <tr align="center">
            <td width="36" rowspan="9"><p>基本</p>
            <p>信息 </p></td>
            <td width="116">姓名</td>
            <td width="149">&nbsp;</td>
            <td width="129">性别</td>
            <td width="52">&nbsp;</td>
            <td width="117">民族</td>
            <td width="100">&nbsp;</td>
            <td width="94" rowspan="4">近照</td>
          </tr>
          <tr align="center">
            <td>出生年月</td>
            <td>&nbsp;</td>
            <td>籍贯</td>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>身份证号</td>
            <td>&nbsp;</td>
            <td>户口所在派出所</td>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>政治面貌</td>
            <td>&nbsp;</td>
            <td>班级学号</td>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>辅导员ID</td>
            <td>&nbsp;</td>
            <td>专业</td>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr align="center">
           <td >特长</td>
           <td colspan="6">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>家庭住址</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2">邮政编码</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>楼号</td>
            <td colspan="2">&nbsp;</td>
            <td>寝室号</td>
            <td>&nbsp;</td>
            <td>床号</td>
            <td>&nbsp;</td>
          </tr>
          <tr align="center">
            <td>联系电话</td>
            <td colspan="6">&nbsp;</td>
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
        <label>民族</label>
        <select name="nation">
        	<option value="0">汉族</option>
            <option value="1">满族</option>
            <option value="2">回族</option>
        </select>
        <label>照片</label>
        <input type="file" name="image" />
       	<label>出生年月</label>
        <input type="month"  name="datetime"/>
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
         <input type="text" name="ID_number" value="具体地址" class="input-xlarge">
        <label>身份证号</label>
        <input type="text" name="ID_number" value="" class="input-xlarge">
        <label>户口所在派出所</label>
        <input type="text" name="police_station" value="" class="input-xlarge">
        <label>政治面貌</label>
         <select name="politics_status">
        	<option value="0">中共党员</option>
            <option value="1">XXXX</option>
            <option value="2">XXXX</option>
        </select>
        <label>班级学号</label>
         <input type="text" name="stu_number" value="" class="input-xlarge">
        <label>辅导员ID</label>
         <input type="text" name="instruct_ID" value="" class="input-xlarge">
        <label>专业</label>
         <input type="text" name="major" value="" class="input-xlarge">
        <label>特长</label>
         <input type="text" name="strong_point" value="" class="input-xlarge">
        <label>家庭住址</label>
         <input type="text" name="address" value="" class="input-xlarge">
        <label>邮政编码</label>
         <input type="text" name="zip_code" value="" class="input-xlarge">
        <label>楼号</label>
        <input type="text" name="floor_number" value="" class="input-xlarge">
        <label>寝室号</label>
        <input type="text" name="dormitory_number" value="" class="input-xlarge">
        <label>床号</label>
        <input type="text" name="bed_numbe" value="" class="input-xlarge">
        <label>联系电话</label>
        <input type="text" name="tel" value="" class="input-xlarge">
        
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>   
</div>