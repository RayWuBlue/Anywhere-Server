<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>学生会员管理</title>
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
<form action="__APP__/Admin/TeachInfo/insert_info_msg" method="post">
<input name="ttedu_userid" value="<?php echo ($ttedu_userid); ?>" type="hidden" />
<input name="ttedu_mid" value="<?php echo ($ttedu_mid); ?>" type="hidden" />
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="10">
	<tr><td height="30" align="center" valign="middle" colspan="2">添加联系记录</td></tr>
	<tr><td width="41%" align="right">联系对象：</td><td width="59%"><?php if(is_array($persons)): $i = 0; $__LIST__ = $persons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><?php echo ($person["name"]); ?><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
	<tr><td align="right">联系方式：</td><td><input type="text" name="ttedu_type" value="" /></td></tr>
	<tr><td align="right">内容：</td><td><textarea name="ttedu_content" rows="3" cols="30"></textarea></td></tr>
	<tr><td align="right"></td><td><input type="submit"  value="提交" /></td></tr>
</table>
</form>

</body>
</html>