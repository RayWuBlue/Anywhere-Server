<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>新闻管理</title>
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
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
  <tr>
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">老师会员管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr><td align="center"></td></tr>
      <tr>
        <td colspan="3" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tr bgcolor="#e7f3e7">
              <td width="4%" class="td">&nbsp;</td>
              <td width="12%" height="25" class="td">姓名（编号）</td>
              <td width="5%" class="td">性别</td>
			  <td width="10%" class="td">目前身份</td>
              <td width="16%" class="td">注册时间</td>
			  <td width="15%" class="td">最后登录时间</td>
			  <td width="22%" class="td">&nbsp;</td>
			  <td width="6%" class="td">状态</td>
			  <td width="11%" class="td">操作</td>
            </tr>
			
			<?php if(is_array($teach_info)): $i = 0; $__LIST__ = $teach_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
              <td class="td"><input name="ID" type="checkbox" id="ID" value="" /></td>
              <td height="25" class="td"><a href="__APP__/Admin/TeachInfo/update_member_teh/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">
			  		<span style="color:#ff0000"><?php echo ($vo["ttedu_chenfu"]); ?></span>
			  	<span style="color:#0000ff">（<?php echo ($vo["ttedu_id"]); ?>）</span></a></td>
              <td class="td"><?php echo ($vo["ttedu_sex"]); ?></td>
              <td class="td"><?php echo ($vo["ttedu_mqshengfei"]); ?></td>
			  <td class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_zhucedate"])); ?></td>
			  <td class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_logindate"])); ?></td>
			  <td class="td">
			  [<a href="__APP__/Admin/TeachInfo/admin_info_msg/ttedu_mid/1/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">查看记录</a>]&nbsp;&nbsp;
			  [<a href="__APP__/Admin/TeachInfo/add_info_msg/ttedu_mid/1/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">添加记录</a>]
			  [<a href="__APP__/Admin/TeachInfo/admin_photo_teh/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">查看照片</a>]
			  </td>
			  <td class="td"><?php if(($vo["ttedu_shengheishifoutongguo"])  ==  "1"): ?>已审核<?php else: ?><span style="color:#0000ff">未审核</span><?php endif; ?></td>
              <td class="td">
                <input type="button" name="Submit3" value="查看"  class="btn" 
					onclick="window.location.href='__APP__/Admin/TeachInfo/detail_member_teh/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>  "/>
				<input type="button" name="Submit3" value="修改"  class="btn"
				 onclick="window.location.href='__APP__/Admin/TeachInfo/update_member_teh/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> "/>
               </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
          </table>
            </td>
      </tr>
     <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
        <td width="723" height="30" align="center"><?php echo ($page); ?></td>
      </tr>  
    </table></td>
  </tr>
</table>
</body>
</html>