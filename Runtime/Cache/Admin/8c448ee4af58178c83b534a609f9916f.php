<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>家教信息指定价格</title>

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
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">家教信息指定价格</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
        <form id="form1" name="form1" method="post" action="__APP__/Admin/JiajiaoInfo/update"> 
		<input type="hidden" value="<?php echo ($jiajiao_info["ttedu_id"]); ?>" name="ttedu_id" />
			<tr><td width="23%" align="right" height="24">强制收费：</td>
			  <td width="77%" align="left">&nbsp;
		      <input type="radio" name="ttedu_shifouqiangzhishoufei" <?php if(($jiajiao_info["ttedu_shifouqiangzhishoufei"])  ==  "1"): ?>checked<?php endif; ?>/>不强制&nbsp;
			  <input type="radio" name="ttedu_shifouqiangzhishoufei" <?php if(($jiajiao_info["ttedu_shifouqiangzhishoufei"])  ==  "0"): ?>checked<?php endif; ?>/>强制</td></tr>
			<tr><td align="right" height="24">每周次数：</td><td align="left"><?php echo ($jiajiao_info["ttedu_meizhoucishu"]); ?>次</td></tr>
			<tr><td align="right" height="24">每次时间：</td><td align="left"><?php echo ($jiajiao_info["ttedu_meicishijian"]); ?>小时</td></tr>
			<tr><td align="right" height="24">每小时报酬：</td><td align="left"><?php echo ($jiajiao_info["ttedu_meixiaoshibaochou"]); ?>元</td></tr>
			<tr><td align="right" height="24">每周工资：</td><td align="left"><?php echo ($week_rmb); ?>元</td></tr>
			<tr><td align="right" height="24">每月工资：</td><td align="left"><?php echo ($month_rmb); ?>元</td></tr>
			<tr><td align="right" height="24">月20%工资：</td><td align="left"><?php echo ($month_rmb20); ?>元
				<span style="color:#ff0000">（建议一次性收取首月工资的20%作为介绍费）</span></td></tr>
			<tr><td align="right" height="24"><span style="color:#ff0000">设定介绍费：</span></td>
				<td align="left"><input type="text" value="<?php echo ($jiajiao_info["ttedu_jieshaofeiyong"]); ?>" name="ttedu_jieshaofeiyong" size="5"/> &nbsp;元</td></tr>
			<tr><td align="right" height="24" valign="middle">获取联系方式的模式：</td>
				<td align="left">
				<input type="radio" name="ttedu_lianxifangshimoshi" value="1" <?php if(($jiajiao_info["ttedu_lianxifangshimoshi"])  ==  "1"): ?>checked<?php endif; ?>/>
						全部收费模式：老师用只要有足够的金额就能取得联系方式<br />
				<input type="radio" name="ttedu_lianxifangshimoshi" value="2" <?php if(($jiajiao_info["ttedu_lianxifangshimoshi"])  ==  "2"): ?>checked<?php endif; ?>/>
						指定收费模式：只有指定的老师才能取得联系方式<br />
				<input type="radio" name="ttedu_lianxifangshimoshi" value="3" <?php if(($jiajiao_info["ttedu_lianxifangshimoshi"])  ==  "3"): ?>checked<?php endif; ?>/>
						全部免费模式：所有老师用户都可以免费的取得联系方式<br />
				<input type="radio" name="ttedu_lianxifangshimoshi" value="4" <?php if(($jiajiao_info["ttedu_lianxifangshimoshi"])  ==  "4"): ?>checked<?php endif; ?>/>
						指定免费模式：只有指定的老师才能取得联系方式
				</td></tr>
			<tr><td align="right" height="24">指定老师编号：</td>
				<td align="left"><input type="text" name="ttedu_techerid" value="<?php echo ($jiajiao_info["ttedu_techerid"]); ?>"/></td></tr>	
			<tr><td align="right" height="24">&nbsp;</td></tr>	
			<tr><td align="right" height="24">&nbsp;</td>
				<td align="left"><div style=" margin-left:50px;"><input type="submit" value="确定修改" class="btn"/></div></td></tr>	
			<tr><td align="right" height="24">&nbsp;</td></tr>		
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>