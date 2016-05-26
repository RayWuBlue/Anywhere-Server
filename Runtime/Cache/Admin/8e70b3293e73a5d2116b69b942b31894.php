<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="images/style.css">
<title>修改课程</title>
<script type="text/javascript" charset="utf-8" src="Public/admin/edit/kindeditor-min.js"></script>
<script type="text/javascript">
KE.show({
	id : 'content1',
	cssPath : './../index.css'
});
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
<form  name="add" method="post" action="__URL__/update" enctype="multipart/form-data">
<input type="hidden" value="<?php echo ($info_detail["ttedu_id"]); ?>" name="ttedu_id" />
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
  <tr>
    <td height="30" background="Public/Admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">信息详情</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="16%" class="td">信息标题</td>
        <td width="84%"  class="td">
          <input name="ttedu_title" type="text" value="<?php echo ($info_detail["ttedu_title"]); ?>" size="60"  /></td>
      </tr>
	  <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="16%" class="td">信息分类</td>
        <td width="84%"  class="td">
          <select name="ttedu_btype_id">
		  <?php if(is_array($btype_info)): $i = 0; $__LIST__ = $btype_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo["ttedu_id"]); ?>" <?php if(($vo["ttedu_id"])  ==  $info_detail["ttedu_btype_id"]): ?>selected<?php endif; ?> ><?php echo ($vo["ttedu_btype_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		  </select></td> 
      </tr>
	  <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="16%" class="td">缩略图</td>
        <td width="84%"  class="td"><input name="image" id="image" type="file" class="file huge" />&nbsp;上传允许文件类型：gif png jpg 图像文件</td>
      </tr>
	  <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="16%" class="td">排序ID</td>
        <td width="84%"  class="td">
          <input name="ttedu_paixu" type="text" value="<?php echo ($info_detail["ttedu_paixu"]); ?>" size="5"  />&nbsp;数字越小越靠前</td>
      </tr>
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">信息内容</td>
        <td class="td"> <textarea id="content1" name="ttedu_content" style="width:700px;height:400px;visibility:hidden;"><?php echo ($info_detail["ttedu_content"]); ?></textarea></td>
      </tr>
    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">&nbsp;</td>
        <td class="td"><input type="submit" name="button" id="button" value="确认提交"  class="btn"/></td>
      </tr>
    </table></td>
  </tr>
</table></form>
</body>
</html>