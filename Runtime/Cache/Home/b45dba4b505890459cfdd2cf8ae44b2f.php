<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<title>会员中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">
body,table,div{
font-size:12px;
}
</style>

</head>
<body>


<table width="750" border="0" cellspacing="0" cellpadding="0">
<tr><td align="center" height="40" style="font-size:14px; border-bottom:1px solid #66CC99">与管理员的联系记录</td></tr>


<tr>
  <td height="25" colspan="2"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #66CC99">
  <tr>
  	<td width="10%" height="30">ID</td>
	<td width="13%">联系方式</td>
	<td width="48%">联系内容</td>
	<td width="29%">联系时间</td>
  </tr>
<?php if(is_array($lianxi_jilu)): $i = 0; $__LIST__ = $lianxi_jilu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
  	<td height="30"><?php echo ($vo["ttedu_id"]); ?></td>
	<td><?php echo ($vo["ttedu_type"]); ?></td>
	<td><?php echo ($vo["ttedu_content"]); ?></td>
	<td><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table></td>
</tr>
<tr><td height="30" align="center"><?php echo ($page); ?></td></tr>
</table>

</body></html>