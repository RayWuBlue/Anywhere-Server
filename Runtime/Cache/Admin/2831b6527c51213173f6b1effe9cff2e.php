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
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">联系记录管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
       
      <tr>
        <td colspan="3" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
		   <tr bgcolor="#e7f3e7">
			  <td width="10%" class="td" height="25">ID</td>
			  <td width="16%" class="td">联系对象</td>
			  <td width="12%" class="td">联系方式</td>
			  <td width="21%" class="td">联系时间</td>
			  <td width="26%" class="td">联系内容</td>
			  <td width="15%" class="td">操作</td>
		  </tr>
		  
			<?php if(is_array($lianxi_jilu)): $i = 0; $__LIST__ = $lianxi_jilu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
              <td class="td"><?php echo ($vo["ttedu_id"]); ?></td>
              <td class="td">
			  <?php if(is_array($vo['person'])): $i = 0; $__LIST__ = $vo['person'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><a href="__APP__/Admin/TeachInfo/detail_member_teh/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a>
			  <?php if(($vo["ttedu_mid"])  ==  "1"): ?>[老师]<?php endif; ?>
			  <?php if(($vo["ttedu_mid"])  ==  "2"): ?>[家长]<?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
			  </td>
              <td class="td"><?php echo ($vo["ttedu_type"]); ?></td>
              <td class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
              <td class="td"><?php echo ($vo["ttedu_content"]); ?></td>
              <td class="td">
			  	<input type="button" name="Submit" value="删除" class="btn" 
					onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
						window.location.href='__APP__/Admin/TeachInfo/delete_lianxi_jilu/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> ;}else{history.go(0);}" />
			  </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
          </table>
            </td>
      </tr>
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
        <td height="30" align="center"><?php echo ($page); ?></td>
      </tr>  
    </table></td>
  </tr>
</table>
</body>
</html>