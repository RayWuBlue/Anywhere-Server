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

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
	<td height="30" align="left" valign="bottom">
	<strong style="color:#00aa00; font-size:14px">
	您好：<span style="color:#0000ff"><?php echo ($member["ttedu_chenfu"]); ?></span>&nbsp;</volist>
	，欢迎您的到来！</strong>　
	您现存金额:<span style="color:#ff0000"><?php echo ($member["ttedu_shengyujinge"]); ?></span>元 
		<a href="__URL__/jecz" style="color:#0000ff">在线实时充值</a></td>
  </tr>
  <tr><td><hr></td></tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="8">
	<tr>
	  <td> [<a href="__URL__/jlxg" style=" color:#0000ff">修改资料</a>]&nbsp; 
	  [<a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($_SESSION['userid']); ?>" style=" color:#0000ff">预览简历</a>]</td>
	</tr>
	<tr>
	  <td>
	  <?php if(($member["ttedu_huiyuanzhaopian"])  ==  ""): ?>您的资料中还没有相片，<?php endif; ?>
	  		点击 [<a href="__URL__/zjzp" style=" color:#0000ff">上传照片</a>] </td>
	</tr>
	<tr>
	  <td>
	  <?php if(($member["ttedu_shifoushengji"])  ==  "0"): ?>你只是普通会员，点击申请星级会员<?php endif; ?>
	  <?php if(($member["ttedu_shifoushengji"])  !=  "0"): ?>升级会员<?php endif; ?>，你可以享受更多的优惠！
	  [<a href="__URL__/gjhy" style=" color:#0000ff">立即升级</a>]</td>
	</tr>
	<tr>
	  <td><img src="Public/member/images/renzheng.gif" width="31" height="18" align="absmiddle"> 请您通过身份证审核，提高诚信度！　
	  		[<a href="__URL__/sfsh" style=" color:#0000ff">查看详细</a>]</td>
	</tr>
</table>




</body>
</html>