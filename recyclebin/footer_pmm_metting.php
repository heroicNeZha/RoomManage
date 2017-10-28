<div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
      <table width="827" height="159" border="1" align="center">
        <tbody>
          <tr align="center">
            <td width="35" rowspan="5"><p>会议记录及相应说明</p></td>
            <td width="132">支部确定入党积极分子会议ID</td>
            <td width="114">&nbsp;</td>
            <td width="132">支部确定发展对象会议ID</td>
            <td width="96">&nbsp;</td>
            <td width="163">支部接收预备党员会议ID</td>
            <td width="109">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>支部预备党员转正会议ID</td>
            <td>&nbsp;</td>
            <td>党委审批预备党员会议ID</td>
            <td>&nbsp;</td>
            <td>党委审批预备党员转正会议ID</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td>谈话人</td>
            <td>&nbsp;</td>
            <td>谈话时间</td>
            <td>&nbsp;</td>
            <td>谈话地点</td>
            <td>&nbsp;</td>
            </tr>
          <tr align="center">
            <td>党员转入时间</td>
            <td colspan="1">&nbsp;</td>
            <td>转入自何处</td>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr align="center">
            <td>党员转出时间</td>
            <td colspan="1">&nbsp;</td>
            <td>转去何处</td>
            <td colspan="3">&nbsp;</td>
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
        <label>支部确定入党积极分子会议ID</label>
        <input type="text" name="ZQ_positivemeet_ID" value="" class="input-xlarge"> 
        <label>支部确定发展对象会议ID</label>
        <input type="text" name="ZQ_devemembermeet_ID" value="" class="input-xlarge"> 
        <label>支部接收预备党员会议ID</label>
        <input type="text" name="ZJ_readymeet_ID" value="" class="input-xlarge"> 
       	<label>支部预备党员转正会议ID</label>
        <input type="text" name="ZSbec_officalmeet_ID" value="" class="input-xlarge">
        <label>党委审批预备党员会议</label>
        <input type="text" name="DS_readymeet_ID" value="" class="input-xlarge">
        <label>党委审批预备党员转正会议</label>
        <input type="text" name="Bec_officialmeet_ID" value="" class="input-xlarge">
        <label>谈话人</label>
        <input type="text" name="Talker_ID" value="" class="input-xlarge">
        <label>谈话时间</label>
        <input type="date" name="Talk_time" />
        <label>谈话地点</label>
        <input type="text" name="Talk_site" value="" class="input-xlarge">
        <label>党员转入时间</label>
        <input type="date" name="In_time" />
        <label>转入自何处</label>
        <input type="text" name="In_where" value="" class="input-xlarge">
        <label>党员转出时间</label>
        <input type="date" name="Out_time" />
        <label>转去何处</label>
        <input type="text" name="Ge_where" value="" class="input-xlarge">
        
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>   
</div>