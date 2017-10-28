
<div class="btn-toolbar">
    <button class="btn btn-primary" ><a href="#change" role="button" data-toggle="modal"><font color="#F7F8F7">编辑</font></a></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div align="center">
        <table width="668" height="134" border="1">
            <tbody>
            <?php
            if ($rowsTS=mysqli_fetch_assoc($resTS)){
                echo "<tr align='center'>";
              echo "  <td width='125'>姓名</td>";
                echo "<td width='95'>".$rowsTS["UserName"]."</td>";
                echo "<td width='82'>性别</td>";
                $sex=$rowsTS["Sex"]?"女":"男";
                echo "<td width='83'>".$sex."</td>";
                echo "<td width='74'>创建日期</td>";
                echo "<td width='87'>".$rowsTS["CreateDate"]."</td>";
                echo '<tr align="center">';
                echo '<td>电子邮箱</td>';
                echo '<td colspan="5">'.$rowsTS["Email"].'</td>';
            echo '</tr>';
            echo '<tr align="center">';
            echo '    <td>联系电话</td>';
            echo '    <td colspan="5">'.$rowsTS["Tel"].'</td>';
            echo '</tr>';
            echo '<tr align="center">';
            echo '    <td>寝室</td>';
            echo '    <td colspan="5">'.$rowsTS["RoomId"].'</td>';
            echo '</tr>';
            echo '<tr align="center">';
            echo '    <td>最后更新日期</td>';
            echo '    <td colspan="5">'.$rowsTS["UpdateDate"].'</td>';
            echo '</tr>';
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
    <form id="tab" action="DRM_stu_update.php" method="post">
        <input type="hidden" name="UserId" value="<?php echo $rowsTS['UserId']?>">
        <input type="hidden" name="LoginName" value="<?php echo $_GET["stu"]?>">
        <label>姓名</label>
        <input type="text" name="name" value="" class="input-xlarge">
        <label>性别</label>
        <select name="sex">
            <option value="0">男</option>
            <option value="1">女</option>
        </select>
        <label>邮箱</label>
        <input type="text" name="email" value="" class="input-xlarge">

        <label>电话</label>
        <input type="text" name="tel" value="" class="input-xlarge">

        <label>寝室</label>
        <input type="text" name="dor" value="" class="input-xlarge">
            <div class="modal-footer">
                <button class="btn" id="btn_change_cancle" data-dismiss="modal" aria-hidden="true">取消</button>
                <input type="submit" name="submit" class="btn btn-danger" id="btn_change_sava"  value="提交">
            </div>
    </form>

    	<br/><br/><br/>
  </div>   
</div>