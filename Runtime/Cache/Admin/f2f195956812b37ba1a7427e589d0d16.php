<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>支付设置管理</title>

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
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">支付设置管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
		<td align="center"></td>
      </tr>
      <tr>
        <td colspan="3" >
		<table width="100%" border="0" cellpadding="5" cellspacing="0">
		<form action="__APP__/admin/SetAdmin/up_set_pay" method="post">
		<input type="hidden" name="ttedu_id" value="<?php echo ($pay["ttedu_id"]); ?>" />
		 <tr><td colspan="2">支付方式修改，带<span style="color:#FF0000">*</span>的为必填项目</td></tr> 
		 <tr><td width="29%" align="right"><span style="color:#FF0000">*</span>支付方式名称：</td>
		 	<td width="71%" align="left"><input type="text" name="ttedu_payname" value="<?php echo ($pay["ttedu_payname"]); ?>" size="30"/></td></tr>
		 <tr><td align="right"><span style="color:#FF0000">*</span>支付方式说明：</td>
		 	<td align="left"><textarea name="ttedu_payshuoming" rows="3" cols="30"><?php echo ($pay["ttedu_payshuoming"]); ?></textarea></td></tr>
		 <tr><td align="right"><span style="color:#FF0000">*</span>商户账号：</td>
		 	<td align="left"><input type="text" name="ttedu_zhanghao" value="<?php echo ($pay["ttedu_zhanghao"]); ?>"  size="40"/></td></tr>
		 <tr><td align="right"><span style="color:#FF0000">*</span>MD5密匙：</td>
		 	<td align="left"><input type="text" name="ttedu_anquanyangzhengma" value="<?php echo ($pay["ttedu_anquanyangzhengma"]); ?>"  size="50"/></td></tr>
		 <tr><td align="right">合作者身份ID（只针对支付宝有效）：</td>
		 	<td align="left"><input type="text" name="ttedu_hezuoshengfenid" value="<?php echo ($pay["ttedu_hezuoshengfenid"]); ?>"  size="30"/></td></tr>
		 <tr><td align="right"><span style="color:#FF0000">*</span>手续费率：</td>
		 	<td align="left"><input type="text" name="ttedu_shouxufei" value="<?php echo ($pay["ttedu_shouxufei"]); ?>"  size="3"/>&nbsp; %</td></tr>
		 <tr><td align="right"><span style="color:#FF0000">*</span>排序（数字越小越靠前）：</td>
		 	<td align="left"><input type="text" name="ttedu_paixu" value="<?php echo ($pay["ttedu_paixu"]); ?>"  size="5"/></td></tr>
		 <tr><td align="right"><span style="color:#FF0000">*</span>是否启用：</td>
		 	<td align="left">
			<input type="radio" name="ttedu_shifouqiyong" value="1" <?php if(($pay["ttedu_shifouqiyong"])  ==  "1"): ?>checked<?php endif; ?> />&nbsp;不启用&nbsp;
			<input type="radio" name="ttedu_shifouqiyong" value="0" <?php if(($pay["ttedu_shifouqiyong"])  ==  "0"): ?>checked<?php endif; ?> />&nbsp;启用&nbsp;
			</td></tr>
		 
		 <tr><td></td><td align="left" height="40"><input type="submit" value="确定修改" /></td></tr>
		 </form>	
	     </table>
		</td>
      </tr>
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
        <td align="center" height="30">&nbsp; </td>
      </tr>  
    </table></td>
  </tr>
</table>
</body>
</html>