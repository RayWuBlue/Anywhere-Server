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
<tr><td align="center" height="40" style="font-size:14px;">预约信息</td></tr>


<tr>
  <td height="25" colspan="2"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="border-top:1px solid #66CC99">
  <tr><td align="center" height="40" style="font-size:14px;" colspan="5">老师预约我</td></tr>
  <tr>
  	<td width="16%" height="30">订单号</td>
	<td width="12%">家教信息详情</td>
	<td width="26%">下单时间</td>
	<td width="15%">状态</td>
	<td width="21%">备注</td>
	<td width="10%">&nbsp;</td>
  </tr>
<?php if(is_array($teach_to_stu)): $i = 0; $__LIST__ = $teach_to_stu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
  	<td height="30"><?php echo ($vo["ttedu_code"]); ?></td>
	<td><a href="__APP__/JiajiaoInfo/edu_infodetail/id/<?php echo ($vo["ttedu_jiajiaoid"]); ?>" style="color:#0000ff" target="_blank">查看详情</a></td>
	<td><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
	<td><?php if(($vo["ttedu_shifouchuli"])  ==  "0"): ?>未处理<?php endif; ?>
		<?php if(($vo["ttedu_shifouchuli"])  ==  "1"): ?>下单成功<?php endif; ?>
		<?php if(($vo["ttedu_shifouchuli"])  ==  "2"): ?>已经拒绝<?php endif; ?></td>
	<td><?php echo ($vo["ttedu_beizhu"]); ?></td>
	<td><?php if(($vo["ttedu_shifouchuli"])  ==  "1"): ?><a href="__URL__/huiyuan_pinglun/teachid/<?php echo ($vo["ttedu_teachid"]); ?>">评论该教员</a><?php endif; ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr><td height="30" align="center"><?php echo ($page); ?></td></tr>
  </table></td>
</tr>


<tr>
  <td height="25" colspan="2"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="border-top:1px solid #66CC99; border-bottom:1px solid #66CC99">
  <tr><td align="center" height="40" style="font-size:14px;" colspan="5">我预约老师</td></tr>
  <tr>
  	<td width="14%" height="30">订单号</td>
	<td width="10%">家教信息详情</td>
	<td width="23%">下单时间</td>
	<td width="13%">状态</td>
	<td width="30%">备注</td>
	<td width="10%">&nbsp;</td>
  </tr>
<?php if(is_array($yuyue_teach_info)): $i = 0; $__LIST__ = $yuyue_teach_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
  	<td height="30"><?php echo ($vo["ttedu_code"]); ?></td>
	<td><a href="__URL__/edu_infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">查看详情</a></td>
	<td><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
	<td><?php if(($vo["ttedu_shifouchuli"])  ==  "0"): ?>未处理<?php endif; ?>
		<?php if(($vo["ttedu_shifouchuli"])  ==  "1"): ?>下单成功<?php endif; ?>
		<?php if(($vo["ttedu_shifouchuli"])  ==  "2"): ?>对方拒绝<?php endif; ?></td>
	<td><?php echo ($vo["ttedu_beizhu"]); ?></td>
	<td><?php if(($vo["ttedu_shifouchuli"])  ==  "1"): ?><a href="__URL__/huiyuan_pinglun/ttedu_teachid/<?php echo ($vo["ttedu_teach_id"]); ?>">评论该教员</a><?php endif; ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr><td height="30" align="center"><?php echo ($page2); ?></td></tr>
  </table></td>
</tr>

</table>
		  
</body></html>