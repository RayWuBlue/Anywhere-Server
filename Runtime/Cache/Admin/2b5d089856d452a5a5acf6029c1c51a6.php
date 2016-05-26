<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>视频管理</title>
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

<style type="text/css">
body,table{
font-size:12px;
}
form,input{
font-size:12px;
}
</style>
</head>
<body>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
  <tr>
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">视频管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
        <form id="form1" name="form1" method="post" action="admin_news.asp?del=checkbox"> 
      <tr>
       <td align="center">
       <select name="type" id="jumpMenu" onChange="window.location.href='__APP__/Admin/SpinfoDetail/admin_shipin/ttedu_spbtype_id/'+this.options[this.selectedIndex].value">
            <option>---分类查看---</option>
			<option value="">全部</option>
            <?php if(is_array($spbtype_info)): $i = 0; $__LIST__ = $spbtype_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_spbtype_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
		 </td>
      </tr>
      <tr>
        <td colspan="3" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
		   <tr bgcolor="#e7f3e7">
			  <td width="6%" class="td">&nbsp;</td>
			  <td width="8%" class="td">ID</td>
			  <td width="23%" height="25" class="td">资料标题</td>
			  <td width="16%" class="td">总集数</td>
			  <td width="12%" class="td">所属类型</td>
			  <td width="15%" class="td">操作</td>
		  </tr>
		  
		  <?php if(is_array($spinfo_detail)): $i = 0; $__LIST__ = $spinfo_detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
              <td class="td"><input name="ID" type="checkbox" id="ID" value="" /></td>
              <td class="td"><?php echo ($vo["ttedu_id"]); ?></td>
              <td class="td"><?php echo ($vo["ttedu_sptitle"]); ?></td>
              <td class="td"><?php echo ($vo["ttedu_spjishu"]); ?></td>
              <td class="td">
			  <?php if(is_array($spbtype_info)): $i = 0; $__LIST__ = $spbtype_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): ++$i;$mod = ($i % 2 )?><?php if(($vo2["ttedu_id"])  ==  $vo["ttedu_spbtype_id"]): ?><?php echo ($vo2["ttedu_spbtype_name"]); ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
			  </td>
			  <td class="td">
			   <input type="button" name="Submit3" value="详情"  class="btn"
			  		onclick="window.location.href='__APP__/Admin/SpinfoDetail/shipin_detail/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> " />
               <input type="button" name="Submit3" value="删除"  class="btn"
					onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
					window.location.href='__APP__/Admin/SpinfoDetail/deleteshipin/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>;}else{history.go(0);}" /> </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
          </table>
            </td>
      </tr>
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
        <td width="192" height="30" align="center">
      
         </td>
        <td width="290"> 
        </td>
        <td width="681" height="30"><?php echo ($page); ?></td>
      </tr> 
	  </form> 
    </table></td>
  </tr>
</table>
</body>
</html>