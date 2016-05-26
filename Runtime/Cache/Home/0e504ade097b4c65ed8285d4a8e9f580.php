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
<tr><td align="center" height="40" style="font-size:14px; border-bottom:1px solid #66CC99">我的家教信息</td></tr>


<tr>
  <td height="25" colspan="2"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #66CC99">
  <tr>
  	<td width="10%" height="30">ID</td>
	<td width="13%">详情</td>
	<td width="31%">求教科目</td>
	<td width="17%">预约情况</td>
	<td width="29%">发布时间</td>
  </tr>
<?php if(is_array($jiajiao_info)): $i = 0; $__LIST__ = $jiajiao_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
  	<td height="30"><?php echo ($vo["ttedu_id"]); ?></td>
	<td><a href="__APP__JiajiaoInfo/edu_infodetail/id/<?php echo ($vo["ttedu_id"]); ?>" target="_blank">查看详情</a></td>
	<td><?php echo ($vo["ttedu_nianjikemu"]); ?></td>
	<td><?php if(($vo["ttedu_shifouyuyue"])  ==  "1"): ?>已经预约老师<?php else: ?>未预约老师<?php endif; ?></td>
	<td><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table></td>
</tr>
<tr><td height="30" align="center"><?php echo ($page); ?></td></tr>
</table>

		  
</body></html>