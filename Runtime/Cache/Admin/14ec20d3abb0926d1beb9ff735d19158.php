<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
    <title><?php echo ($website_title); ?></title>
    <meta name="keywords" content="<?php echo ($keywords); ?>" />
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/base.css">
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/common.css">
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/index.css">
    
</head>
<body>
	<!-- 头部 -->
	<div class="main">
		<div class="header">
			<h1>WPA(<?php echo (date('Y-m-d',strtotime(date('Y-m-d g:i a',time())))); ?>)</h1>
			<a class="logout" href="/app/admin.php?s=/auth/logout">注销</a>
		</div>
		<!--导航菜单-->

		<ul id="side" class="side">
			<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li <?php if($item["action_name"] == CONTROLLER_NAME): ?>class="curr"<?php endif; ?>>
					<a href="<?php echo ($item["link"]); ?>"><?php echo ($item["title"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<!--导航菜单结束-->
	</div>
	<!-- /头部 -->
	<!-- 主体 -->
	
  <div class="content">
    <form  name="add" method="post" action="/app/admin.php?s=/BBS/update_tiezi" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo ($shequ_info["ttedu_id"]); ?>" name="ttedu_id" />
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
        <tr>
          <td height="30" background="Public/admin/images/bg_list.gif">
            <div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">添加帖子</div>
          </td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
              <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
                <td height="28" width="16%" class="td">帖子标题</td>
                <td width="84%"  class="td">
                  <input name="ttedu_shequ_title" type="text" value="<?php echo ($shequ_info["ttedu_shequ_title"]); ?>" size="30"  />
                </td>
              </tr>
              <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
                <td height="28" width="16%" class="td">主题</td>
                <td width="84%"  class="td">
                  <select name="ttedu_zhuti_id">
                    <?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["ttedu_id"]); ?>" <?php if(($vo["ttedu_id"]) == $shequ_info["ttedu_zhuti_id"]): ?>selected<?php endif; ?>
                      ><?php echo ($vo["ttedu_zhuti_topic"]); ?>
                    </option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </td>
            </tr>
            <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
              <td height="28" width="16%" class="td">是否置顶</td>
              <td width="84%"  class="td">
                <input type="radio" name="ttedu_shifouzhiding" value="1" <?php if(($shequ_info["ttedu_shifouzhiding"]) == "1"): ?>checked<?php endif; ?>
              />&nbsp;置顶&nbsp;
              <input type="radio" name="ttedu_shifouzhiding" value="0" <?php if(($shequ_info["ttedu_shifouzhiding"]) == "0"): ?>checked<?php endif; ?>
            />&nbsp;不置顶&nbsp;
          </td>
        </tr>
        <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
          <td height="28" width="16%" class="td">是否热帖</td>
          <td width="84%"  class="td">
            <input type="radio" name="ttedu_shifouretie" value="1" <?php if(($shequ_info["ttedu_shifouretie"]) == "1"): ?>checked<?php endif; ?>
          />&nbsp;是&nbsp;
          <input type="radio" name="ttedu_shifouretie" value="0" <?php if(($shequ_info["ttedu_shifouretie"]) == "0"): ?>checked<?php endif; ?>
        />&nbsp;否&nbsp;
      </td>
    </tr>
    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
      <td height="28" width="16%" class="td">是否需要审核</td>
      <td width="84%"  class="td">
        <input type="radio" name="ttedu_shifoushenghe" value="1" <?php if(($shequ_info["ttedu_shifoushenghe"]) == "1"): ?>checked<?php endif; ?>
      />&nbsp;是&nbsp;
      <input type="radio" name="ttedu_shifoushenghe" value="0" <?php if(($shequ_info["ttedu_shifoushenghe"]) == "0"): ?>checked<?php endif; ?>
    />&nbsp;否&nbsp;
  </td>
</tr>
<tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
  <td height="25" class="td">帖子内容</td>
  <td class="td">
    <textarea id="content1" name="ttedu_tiezi_content" style="width:700px;height:400px;visibility:hidden;"><?php echo ($shequ_info["ttedu_tiezi_content"]); ?></textarea>
  </td>
</tr>
<tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
  <td height="25" class="td">&nbsp;</td>
  <td class="td">
    <input type="submit" name="button" id="button" value="确认提交"  class="btn"/>
  </td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
	<!-- /底部 -->
</body>
</html>