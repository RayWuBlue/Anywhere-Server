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
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="30" background="Public/admin/images/bg_list.gif">
          <div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">社区板块管理</div>
        </td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
            <form id="form1" name="form1" method="post" action="admin_news.asp?del=checkbox">
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" >
                  <table width="100%" border="0" cellpadding="5" cellspacing="0">

                    <?php if(is_array($shequ_reply_info)): $i = 0; $__LIST__ = $shequ_reply_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td width="5%" class="td">
                          <input name="ID" type="checkbox" id="ID" value="" />
                        </td>
                        <td width="5%" class="td">用户：</td>
                        <td width="31%" class="td">
                          <?php if(($vo["person"]) == ""): ?>匿名
                            <?php else: ?>
                            <?php if(is_array($vo['person'])): $i = 0; $__LIST__ = $vo['person'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i; if(($person["mid"]) == "1"): ?><a href="/app/admin.php?s=/Admin/TeachInfo/update_member_teh/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; ?>
                              <?php if(($person["mid"]) == "2"): ?><a href="/app/admin.php?s=/Admin/HuiyuanInfo/update_member_stu/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                        </td>
                        <td width="5%" class="td">时间：</td>
                        <td width="34%" class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_fbdate"])); ?></td>
                        <td width="20%" class="td" align="center">
                          <input type="button" name="Submit3" value="删除"  class="btn"
          onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
          window.location.href='/app/admin.php?s=/BBS/delete_reply/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>+'/ttedu_info_id/'+<?php echo ($vo["ttedu_info_id"]); ?>;}else{history.go(0);}" />
                        </td>
                      </tr>
                      <tr>
                        <td class="td" height="60">&nbsp;</td>
                        <td class="td">内容：</td>
                        <td class="td" colspan="4"><?php echo ($vo["ttedu_reply_content"]); ?></td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                  </table>
                </td>
              </tr>
              <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
                <td width="57" height="30" align="center"></td>
                <td width="725" height="30"><?php echo ($page3); ?></td>
              </tr>
            </form>
          </table>
        </td>
      </tr>
    </table>
  </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
	<!-- /底部 -->
</body>
</html>