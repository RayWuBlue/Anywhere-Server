<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>联系记录管理</title>
<script language="javascript"> 
<!-- 
function CheckAll(){ 
 for (var i=0;i<eval(form1.elements.length);i++){ 
  var e=form1.elements[i]; 
  if (e.name!="allbox") e.checked=form1.allbox.checked; 
 } 
} 
--> 
</script> 
</head>
<body>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
  <tr>
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">订单管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
       <tr><td height="30" colspan="5" align="left"><span style="width:100px">&nbsp;</span>
			<input type="button" name="Submit1" value="老师预约学生"  class="btn" onclick="location.href='__APP__/Admin/JiajiaoInfo/admin_order'"/>&nbsp;&nbsp;
			<input type="button" name="Submit2" value="学生预约老师"  class="btn" onclick="location.href='__APP__/Admin/JiajiaoInfo/admin_order2'"/>
		</td></tr>
      <tr>
        <td colspan="3" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
		   <tr bgcolor="#e7f3e7">
			  <td width="10%" class="td" height="25">订单号</td>
			  <td width="20%" class="td">老师</td>
			  <td width="11%" class="td">学生/家教信息</td>
			  <td width="26%" class="td">时间</td>
			  <td width="18%" class="td">处理状态</td>
			  <td width="15%" class="td">操作</td>
		  </tr>
		  
			<tr><td height="30" colspan="6" align="center">学生预约老师</td></tr>
			<?php if(is_array($yuyue_teach_info)): $i = 0; $__LIST__ = $yuyue_teach_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): ++$i;$mod = ($i % 2 )?><tr>
              <td class="td"><?php echo ($vo2["ttedu_code"]); ?></td>
              <td class="td">
			  <?php if(is_array($vo2['person1'])): $i = 0; $__LIST__ = $vo2['person1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person1): ++$i;$mod = ($i % 2 )?><a href="__APP__/Admin/TeachInfo/detail_member_teh/ttedu_id/<?php echo ($person1["id"]); ?>" style="color:#0000ff"><?php echo ($person1["name"]); ?>[<?php echo ($person1["id"]); ?>]</a><?php endforeach; endif; else: echo "" ;endif; ?>
			  </td>
              <td class="td">
			  <?php if(($vo2["person2"])  !=  ""): ?><?php if(is_array($vo2['person2'])): $i = 0; $__LIST__ = $vo2['person2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person2): ++$i;$mod = ($i % 2 )?><a href="__APP__/Admin/HuiyuanInfo/update_member_stu/ttedu_id/<?php echo ($person2["id"]); ?>" style="color:#0000ff"><?php echo ($person2["name"]); ?>[<?php echo ($person2["id"]); ?>]</a><?php endforeach; endif; else: echo "" ;endif; ?>
			  <?php else: ?>
			  <a href="__APP__/Admin/JiajiaoInfo/yuyue_teach_detail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" style="color:#0000ff">信息详情</a><?php endif; ?>
			  </td>
              <td class="td"><?php echo (date('Y-m-d H:i:s',$vo2["ttedu_adddate"])); ?></td>
              <td class="td">
			  <?php if(($vo2["ttedu_shifouchuli"])  ==  "0"): ?><a href="__APP__/Admin/JiajiaoInfo/y_up_shifouchuli/ttedu_id/<?php echo ($vo2["ttedu_id"]); ?>/shifouchuli/1" style="color:#0000ff">通过</a> |
			  	<a href="__APP__/Admin/JiajiaoInfo/y_up_shifouchuli/ttedu_id/<?php echo ($vo2["ttedu_id"]); ?>/shifouchuli/2" style="color:#0000ff">不通过</a><?php endif; ?>
			  <?php if(($vo2["ttedu_shifouchuli"])  ==  "1"): ?>订单成功<?php endif; ?>
			  <?php if(($vo2["ttedu_shifouchuli"])  ==  "2"): ?>订单失败<?php endif; ?>
			  </td>
              <td class="td">
			  	<input type="button" name="Submit3" value="详情"  class="btn" 
					onclick="window.location.href='__APP__/Admin/JiajiaoInfo/yuyue_teach_info/ttedu_id/'+<?php echo ($vo2["ttedu_id"]); ?> "/>
			  	<input type="button" name="Submit" value="删除" class="btn" 
					onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
						window.location.href='__APP__/Admin/TeachInfo/delete_yuyue_teach_info/ttedu_id/'+<?php echo ($vo2["ttedu_id"]); ?> ;}else{history.go(0);}" />
			  </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
            </td>
      </tr>
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
        <td height="30" align="center"><?php echo ($page2); ?></td>
      </tr>  
    </table></td>
  </tr>
</table>
</body>
</html>