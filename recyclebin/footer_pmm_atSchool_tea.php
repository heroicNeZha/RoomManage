 <div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
      <table width="815" height="174" border="1" align="center">
        <tbody>
          
          <tr align="center">
            <td width="41" rowspan="3"><p>在校</p>
              <p>表现</p></td>
            <td width="151"><p>突出表现和存在不足</p></td>
            <td width="601"><p>&nbsp;</p>
            <p>&nbsp;</p></td>
          </tr>
          <tr align="center">
            <td>获奖情况</td>
            <td><p>&nbsp;</p>
            <p>&nbsp;</p></td>
          </tr>
          <tr align="center">
            <td>处分情况</td>
            <td><p>&nbsp;</p>
            <p>&nbsp;</p></td>
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
       	<label>突出表现和存在不足</label>
        <textarea name="TC_and_BZ" ></textarea>
        <label>获奖情况</label>
        <textarea name="Reward_condtion" ></textarea>
        <label>处分情况</label>
        <select name="YorNwrong">
        	<option value="0">是</option>
            <option value="1">否</option>
        </select>
        
    </form>
    <div class="modal-footer">
        <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" id="btn_change_sava" data-dismiss="modal">保存</button>
    </div>
    	<br/><br/><br/>
  </div>   
</div>