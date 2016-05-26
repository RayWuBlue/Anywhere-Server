<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>设置管理</title>

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
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">设置管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="8">
        <form id="form1" name="form1" method="post" action="__URL__/update"> 
		<input type="hidden" name="ttedu_id" value="1" />
     		<tr><td width="225" align="right">网站名称：</td>
				<td width="312" align="left"><input type="text" name="ttedu_webname" value="<?php echo ($set_web_info["ttedu_webname"]); ?>" /></td>
				<td width="172" align="right">网站标题：</td>
			  	<td width="452" align="left"><input type="text" name="ttedu_titlename"  value="<?php echo ($set_web_info["ttedu_titlename"]); ?>" /></td></tr>
			<tr><td width="225" align="right">域名地址：</td>
				<td width="312" align="left"><input type="text" name="ttedu_website"  value="<?php echo ($set_web_info["ttedu_website"]); ?>" /></td>
				<td width="172" align="right">网站关键字：</td>
			  	<td width="452" align="left"><input type="text" name="ttedu_keyword" size="60"  value="<?php echo ($set_web_info["ttedu_keyword"]); ?>" /></td></tr>
			<tr><td width="225" align="right">网站描述：</td>
				<td width="312" align="left"><textarea name="ttedu_description" rows="3" cols="40"><?php echo ($set_web_info["ttedu_description"]); ?></textarea></td></tr>
			<tr><td width="225" align="right">是否关闭网站：</td>
				<td width="312" align="left">
<input type="radio" name="ttedu_shifouguanbiweb" value="0" <?php if(($set_web_info["ttedu_shifouguanbiweb"])  ==  "0"): ?>checked<?php endif; ?> />&nbsp;开启&nbsp;
<input type="radio" name="ttedu_shifouguanbiweb" value="1" <?php if(($set_web_info["ttedu_shifouguanbiweb"])  ==  "1"): ?>checked<?php endif; ?> />&nbsp;关闭&nbsp;
				</td></tr>
			<tr><td width="225" align="right">关闭网站说明：</td>
				<td width="312" align="left"><textarea name="ttedu_guanbiwangzshuom" rows="3" cols="40"><?php echo ($set_web_info["ttedu_guanbiwangzshuom"]); ?></textarea></td></tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr><td width="225" align="right">联系电话：</td>
				<td width="312" align="left"><input type="text" name="ttedu_tel"  value="<?php echo ($set_web_info["ttedu_tel"]); ?>" /></td>
				<td width="172" align="right">QQ号码：</td>
			  	<td width="452" align="left"><input type="text" name="ttedu_qq"  value="<?php echo ($set_web_info["ttedu_qq"]); ?>" /></td></tr>
			<tr><td align="right">联系地址：</td>
				<td align="left"><input type="text" name="ttedu_contact" size="40"  value="<?php echo ($set_web_info["ttedu_contact"]); ?>" /></td></tr>
			
			<tr><td align="right" valign="middle">面对面付款的&nbsp;&nbsp;&nbsp;<Br />地址和联系方式：</td>
				<td align="left" colspan="3"><textarea name="ttedu_mianduimianfukuan" rows="3" cols="50"><?php echo ($set_web_info["ttedu_mianduimianfukuan"]); ?></textarea></td></tr>
			<tr><td colspan="4"><hr /></td></tr>
			
			<?php if(is_array($set_yinghang_info)): $k = 0; $__LIST__ = $set_yinghang_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$k;$mod = ($k % 2 )?><tr><td align="right">银行卡&nbsp;<?php echo ($k); ?>&nbsp;：<input type="hidden" name="ttedu_id<?php echo ($k); ?>" value="<?php echo ($vo["ttedu_id"]); ?>" /></td>
				<td align="left" colspan="3"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
					<tr><td><select name="ttedu_kaihuhang<?php echo ($k); ?>">
<option value="">请选择银行</option>
<option value="中国工商银行" <?php if(($vo["ttedu_kaihuhang"])  ==  "中国工商银行"): ?>selected<?php endif; ?> >中国工商银行</option>
<option value="中国建设银行" <?php if(($vo["ttedu_kaihuhang"])  ==  "中国建设银行"): ?>selected<?php endif; ?>>中国建设银行</option>
<option value="中农业银行" <?php if(($vo["ttedu_kaihuhang"])  ==  "中农业银行"): ?>selected<?php endif; ?>>中农业银行</option>
<option value="中国银行" <?php if(($vo["ttedu_kaihuhang"])  ==  "中国银行"): ?>selected<?php endif; ?>>中国银行</option>
							</select></td>
						<td><select name="ttedu_shifouxianshi<?php echo ($k); ?>">
<option value="0" <?php if(($vo["ttedu_shifouxianshi"])  ==  "0"): ?>selected<?php endif; ?>>显示开户行</option>
<option value="1" <?php if(($vo["ttedu_shifouxianshi"])  ==  "1"): ?>selected<?php endif; ?>>不显示开户行</option>
							</select></td>
						<td>开户行：<input type="text" name="ttedu_kaihuhangaddress<?php echo ($k); ?>"  value="<?php echo ($vo["ttedu_kaihuhangaddress"]); ?>" /></td>
						<td rowspan="2" valign="middle">&nbsp;</td></tr>
					<tr><td>户名：<input type="text" name="ttedu_huming<?php echo ($k); ?>" size="7"  value="<?php echo ($vo["ttedu_huming"]); ?>" /></td>
						<td><select name="ttedu_yinhangkatype<?php echo ($k); ?>">
<option value="银行信用卡"  <?php if(($vo["ttedu_yinhangkatype"])  ==  "银行信用卡"): ?>selected<?php endif; ?>>银行信用卡&nbsp;&nbsp;&nbsp;</option>
							</select></td>
						<td>账&nbsp;&nbsp;号：<input type="text" name="ttedu_zhanghao<?php echo ($k); ?>"  value="<?php echo ($vo["ttedu_zhanghao"]); ?>" /></td></tr></table>
				</td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
				
				<tr><td colspan="4"><hr /></td></tr>
				<tr><td align="right"></td><td align="left"><br /><input type="submit" value="提交"/></td></tr>
    </form></table></td>
  </tr>
</table>
</body>
</html>