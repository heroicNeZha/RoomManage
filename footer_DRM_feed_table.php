<div class="btn-toolbar">
    <?php
    if (isset($_GET["ExpensesId"])) {
        ?>
        <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
        <?php
    }
    ?>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
        <table width="668" height="134" border="1">
            <tbody>
            <?php
            while ($rowsTF=mysqli_fetch_assoc($resTF)){?>
            <tr align="center">
                <td width="125">寝室号</td>
                <td width="95" colspan="1">&nbsp;<?php echo $rowsTF["RoomId"];?></td>
                <td width="74">创建日期</td>
                <td width="87">&nbsp;<?php echo $rowsTF["CreateDate"];?></td>
            </tr>
            <tr align="center">
                <td>费用类型</td>
                <td colspan="5">&nbsp;<?php echo $rowsTF["ExpensesName"];?></td>
            </tr>
            <tr align="center">
                <td>费用</td>
                <td colspan="5"><?php echo $rowsTF["Price"];?>&nbsp;</td>
            </tr>
            <tr align="center">
                <td>最后更新日期</td>
                <td colspan="5"><?php echo $rowsTF["UpdateDate"];?>&nbsp;</td>
            </tr>
            <?php
            }
            ?>
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
    <form id="tab" action="DRM_feed_update.php" method="post">
<input type="hidden" name="ExpensesId" value="<?php echo $_GET["ExpensesId"];?>">
        <input type="hidden" name="dor" value="<?php echo $_GET["dor"];?>">
        <label>费用类型</label>
        <input type="text" name="ExpensesName" value="" class="input-xlarge">

        <label>费用</label>
        <input type="text" name="Price" value="" class="input-xlarge">

        <div class="modal-footer">
            <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
            <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="提交">
        </div>
    </form>
    	<br/><br/><br/>
  </div>   
</div>