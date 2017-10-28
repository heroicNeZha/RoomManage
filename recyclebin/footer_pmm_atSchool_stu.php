 <div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
      <table width="762" border="1" align="center">
        <tbody>
    
          
          <tr align="center">
            <td rowspan="4"><p>在校</p>
              <p>表现</p></td>
            <td width="111">综合素质排名</td>
            <td width="88">&nbsp;</td>
            <td width="132">全学程不及格门数</td>
            <td width="96">&nbsp;</td>
            <td width="67">外语语种</td>
            <td width="96">&nbsp;</td>
            </tr>
          <tr align="center">
            <td><p>突出表现和存在</p>
              <p>不足</p></td>
            <td colspan="5">&nbsp;</td>
            </tr>
          <tr align="center">
            <td>获奖情况</td>
            <td colspan="5">&nbsp;</td>
            </tr>
          <tr align="center">
            <td>处分情况</td>
            <td colspan="5">&nbsp;</td>
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
        <label>综合素质排名</label>
        <input type="text" name="ranking" value="班级综合测评名次/班级人数" class="input-xlarge"> 
        <label>全学程不及格数</label>
        <input type="text" name="All_funkobject_amount" value="" class="input-xlarge"> 
        <label>外语语种</label>
        <input type="text" name="language" value="" class="input-xlarge"> 
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