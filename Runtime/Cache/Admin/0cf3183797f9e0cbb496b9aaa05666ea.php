<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
<title>社区板块管理</title>
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
    <td height="30" background="Public/admin/images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">社区帖子管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
        <form id="form1" name="form1" method="post" action="admin_news.asp?del=checkbox"> 
      <tr>
       <td align="center">
       <select name="ssfl" id="jumpMenu" onChange="window.location.href='__URL__/admin_bbs_tiezi/ttedu_zhuti_id/'+this.options[this.selectedIndex].value">
            <option>---分类查看---</option>
			<option value="">全部</option>
            <?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_zhuti_topic"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
		  </td><td></td><td>
		  <input type="button" name="Submit3" value="添加帖子"   class="btn"
					onclick="window.location.href='__URL__/add_tiezi'" />
		 </td>
      </tr>
      <tr>
        <td colspan="3" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
		   <tr bgcolor="#e7f3e7">
			  <td width="3%" class="td">&nbsp;</td>
			  <td width="4%" class="td">ID</td>
			  <td width="19%" height="25" class="td">帖子标题</td>
			  <td width="13%" class="td">发帖时间</td>
			  <td width="12%" class="td">所属板块</td>
			  <td width="8%" class="td">作者</td>
			  <td width="6%" class="td">回复数量</td>
			  <td width="7%" class="td">是否置顶</td>
			  <td width="8%" class="td">审核状态</td>
			  <td width="20%" class="td">操作</td>
		  </tr>
		  
		  
		  <?php if(is_array($shequ_info)): $i = 0; $__LIST__ = $shequ_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
              <td class="td"><input name="ID" type="checkbox" id="ID" value="" /></td>
              <td class="td"><?php echo ($vo["ttedu_id"]); ?></td>
              <td class="td"><a href="__URL__/xiugai_tiezi/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_shequ_title"]); ?></a>
			  <?php if(($vo["ttedu_shifouretie"])  ==  "1"): ?>[<font color="#FF0000">热</font>]<?php endif; ?></td>
              <td class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_fbdate"])); ?></td>
              <td class="td">
				<?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): ++$i;$mod = ($i % 2 )?><?php if(($vo2["ttedu_id"])  ==  $vo["ttedu_zhuti_id"]): ?><?php echo ($vo2["ttedu_zhuti_topic"]); ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
			  </td>
			  <td class="td">
			  <?php if(($vo["person"])  ==  ""): ?>匿名
			  <?php else: ?>
			  	<?php if(is_array($vo['person'])): $i = 0; $__LIST__ = $vo['person'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><?php if(($person["mid"])  ==  "1"): ?><a href="__APP__/Admin/TeachInfo/update_member_teh/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; ?>
					<?php if(($person["mid"])  ==  "2"): ?><a href="__APP__/Admin/HuiyuanInfo/update_member_stu/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?>
			  </td>
			  <td class="td"><?php echo ($vo["counts"]); ?></td>
			  <td class="td">
			  <?php if(($vo["ttedu_shifouzhiding"])  ==  "1"): ?><a href="__URL__/update_shifouzhiding/shifouzhiding/0/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" style="color:#006600;">置顶</a>
			  <?php else: ?>
			  <a href="__URL__/update_shifouzhiding/shifouzhiding/1/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" style="color:#006600;">不置顶</a><?php endif; ?>
			  </td>
			  <td class="td">
			  <?php if(($vo["ttedu_shifoushenghe"])  ==  "1"): ?>需要审核
			  <?php else: ?>
			  不需要审核<?php endif; ?>
			  </td>
              <td class="td">
			  <input type="button" name="Submit3" value="详情"  class="btn"
			  		onclick="window.location.href='__URL__/xiugai_tiezi/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> " />
              <input type="button" name="Submit3" value="查看回复"  class="btn"
			  		onclick="window.location.href='__URL__/shequ_reply_info/ttedu_info_id/'+<?php echo ($vo["ttedu_id"]); ?> " />
			  <input type="button" name="Submit3" value="删除"  class="btn"
					onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
					window.location.href='__URL__/delete_tiezi/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>;}else{history.go(0);}" /> </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
			
          </table>
            </td>
      </tr>
      <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
        <td width="199" height="30" align="center">
         </td>
        <td width="176">
        </td>
        <td width="388" height="30"><?php echo ($page2); ?></td>
      </tr> 
	  </form> 
    </table></td>
  </tr>
</table>
</body>
</html>