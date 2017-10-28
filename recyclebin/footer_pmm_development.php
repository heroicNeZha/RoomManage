 <div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
 <div class="well">
    <div align="center">
      <table width="830" border="1" align="center">
        <tbody>
           
          <tr align="center">
            <td width="43" rowspan="8"><p>发展</p>
              <p>情况</p></td>
            <td width="107">发展阶段</td>
            <td width="148">&nbsp;</td>
            <td width="129">组织机构ID</td>
            <td width="154">&nbsp;</td>
            <td width="83">状态</td>
            <td width="120">&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">入团时间</td>
            <td>&nbsp;</td>
            <td colspan="2">申请入党时间</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">列积极分子时间</td>
            <td>&nbsp;</td>
            <td colspan="2">入党积极分子培训时间</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">团员大会日期</td>
            <td>&nbsp;</td>
            <td colspan="2">列发展对象时间</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">党前培训时间</td>
            <td>&nbsp;</td>
            <td colspan="2">计划发展时间</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">接收预备党员公示时间</td>
            <td>&nbsp;</td>
            <td colspan="2">预备党员转正公示时间</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">转正时间</td>
            <td>&nbsp;</td>
            <td colspan="2">入党时间</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td colspan="2">积极分子培训成绩</td>
            <td>&nbsp;</td>
            <td colspan="2">党前培训成绩</td>
            <td>&nbsp;</td>
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
        <label>发展阶段</label>
        <select name="development_stage">
        	<option value="0">申请入党</option>
            <option value="1">确定入党积极分子</option>
            <option value="2">接收预备党员</option>
            <option value="3">预备党员转正</option>
        </select>
        
        <label>组织机构ID</label>
        <input type="text" name="department_ID" value="" class="input-xlarge"> 
        <label>状态</label>
        <select name="state">
        	<option value="0">在校</option>
            <option value="1">毕业</option>
            <option value="2">调出</option>
        </select>
       	<label>入团时间</label>
        <input type="date"  name="join_t_time"/>
        <label>申请入党时间</label>
        <input type="date" name="SQRD_time" />
        <label>列积极分子时间</label>
        <input type="date" name="LJJ_time" />
        <label>入党积极分子培训时间</label>
        <input type="date" name="JJPX_time" />
        <label>团员大会日期</label>
        <input type="date" name="Tmember_meet_time" />
        <label>列发展对象时间</label>
        <input type="date"  name="LFZobject_time"/>
        <label>党前培训时间</label>
        <input type="date" name="DQPX_time" />
        <label>计划发展时间</label>
        <input type="date" name="Developmentplan_time" />
        <label>接收预备党员公示时间</label>
        <input type="date" name="Publicity_time" />
        <label>预备党员转正公示时间</label>
        <input type="date" name="ZZ_publicity_time" />
        <label>转正时间</label>
        <input type="date" name="Bec_official_time" />
        <label>入党时间</label>
        <input type="date" name="RD_datetime" />
        <label>积极分子培训成绩</label>
        <input type="text" name="JJPX_mark" value="" class="input-xlarge" />
        <label>党前培训成绩</label>
        <input type="text" name="DQPX_mark" value="" class="input-xlarge"> 
        
        
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>   
</div>