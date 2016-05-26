<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>main</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	font-family: 宋体;
}
a {
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #FF3300;
}
a:active {
	text-decoration: none;
	color: #333333;
}
-->
</style></head>
<body>

  <table width="95%" border="0" align="center" cellpadding="8" cellspacing="1" bgcolor="#1598CB">
    <tr>
      <td bgcolor="#F1F5F8"><b> </b> 管理员：<font color="#FF0000"><?php echo ($admin["ttedu_musers"]); ?></font>   
	  身份：<?php if(($admin["ttedu_mquanxian"])  ==  "0"): ?>超级管理员<?php endif; ?><?php if(($admin["ttedu_mquanxian"])  !=  "0"): ?>一般管理员<?php endif; ?></td>
    </tr>
</table>

</body>
</html>