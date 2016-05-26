<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>学生会员管理</title>

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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td align="center" height="40" style="font-size:14px; border-bottom:1px solid #66CC99">留言管理</td></tr>

<?php if(is_array($set_liuyan)): $k = 0; $__LIST__ = $set_liuyan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$k;$mod = ($k % 2 )?><tr>
  <td height="25" colspan="2"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #66CC99">
    <tr>
      <td width="12%" height="30" align="right">留言标题：</td>
      <td width="28%" align="left"><?php echo ($vo["ttedu_title"]); ?></td>
      <td width="10%" height="30" align="right">留言时间：</td>
      <td width="19%" align="left"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_lydate"])); ?></td>
	  <td width="11%" height="30" align="right">留言者：</td>
      <td width="20%" align="left"><?php echo ($vo["ttedu_username"]); ?></td>
    </tr>
    <tr>
      <td align="right" height="30">留言内容：</td>
      <td align="left" colspan="5"><?php echo ($vo["ttedu_content"]); ?></td>
    </tr>
    <tr>
      <td align="right" height="30">回复内容：</td>
      <td align="left" colspan="5">
	  <?php if(($vo["ttedu_hfmessage"])  !=  ""): ?><?php echo ($vo["ttedu_hfmessage"]); ?>  &nbsp;&nbsp;&nbsp;  回复时间：<?php echo (date('Y-m-d H:i:s',$vo["ttedu_hfdate"])); ?>
	  <?php else: ?>您还没有回复，你可以点击<input type="button"  onclick="liuyan(<?php echo ($k); ?>);" value="回复"  class="btn"/><?php endif; ?>
	  <script type="text/javascript">
	  function liuyan(k){
	  	document.getElementById('div'+k).style.display='block';
	  }
	  function submit(k){
	  	document.getElementById('div'+k).style.display='none';
		return true;
	  }
	  </script>
	  <div id="div<?php echo ($k); ?>" style="display:none">
	  <form action="__APP__/Admin/index/up_ly" method="post" onsubmit="return submit(<?php echo ($k); ?>);">
	  <input type="hidden" name="ttedu_id" value="<?php echo ($vo["ttedu_id"]); ?>" />
	  <textarea name="ttedu_hfmessage" rows="3" cols="30"></textarea><br />
	  <input type="submit" value="提交" />
	  </form>
	  </div>
	  </td>
    </tr>
  </table></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr><td height="30" align="center"><?php echo ($page); ?></td></tr>
</table>
</body>
</html>