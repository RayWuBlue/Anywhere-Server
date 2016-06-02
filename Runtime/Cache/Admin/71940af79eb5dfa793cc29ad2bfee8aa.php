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
		<div class="side-menu">
			<ul id="side" class="side">
				<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li <?php if($item["action_name"] == CONTROLLER_NAME): ?>class="curr"<?php endif; ?>>
						<a href="<?php echo ($item["link"]); ?>"><?php echo ($item["title"]); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<!--导航菜单结束-->
	</div>
	<!-- /头部 -->
	<!-- 主体 -->
	
  <div class="content">
    <div class="panel">
      <div class="panel-head">
          <ul class="segment-group">
              <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li <?php if($item["action_name"] == ACTION_NAME): ?>class="curr"<?php endif; ?>>
                      <a href="<?php echo ($item["link"]); ?>"><?php echo ($item["title"]); ?></a>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
      </div>
      <div class="panel-control">
        <form action="/app/admin.php?s=/Admin/index/add_link" method="post">
          <tr>
            <td>添加链接：</td>
            <td height="25">
              <input name="web_name" type="text" value="" size="20"/>
            </td>
            <td>
              <input name="website" type="text" value="http://"  size="25"/>
            </td>
            <td>
              <input name="inside_page" type="text" value="http://"  size="25"/>
            </td>
            <td>
              <input name="web_logo" type="text" value="" size="15" />
            </td>
            <td>
              <input name="show_type" type="text" value="" size="15" />
            </td>
            <td>
              <input type="Submit" name="Submit3" value="添加"  class="btn"/>
            </td>
          </tr>
        </form>
      </div>
      <div class="panel-content">
        <table class="table table-border">
          <tr>
            <td width="10%">ID</td>
            <td width="20%">网站名称</td>
            <td width="20%">链接地址</td>
            <td width="10%">内页地址</td>
            <td width="12%">网站logo</td>
            <td width="17%">显示类别</td>
            <td width="11%">操作</td>
          </tr>

          <?php if(is_array($friend_link)): $i = 0; $__LIST__ = $friend_link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="/app/admin.php?s=/Other/update_link" method="post">
              <input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id" />
              <tr>
                <td><?php echo ($vo["id"]); ?></td>
                <td height="25">
                  <input name="web_name" type="text" value="<?php echo ($vo["web_name"]); ?>" size="20"/>
                </td>
                <td>
                  <input name="website" type="text" value="<?php echo ($vo["website"]); ?>"  size="25"/>
                </td>
                <td>
                  <input name="inside_page" type="text" value="<?php echo ($vo["inside_page"]); ?>"  size="25"/>
                </td>
                <td>
                  <input name="web_logo" type="text" value="<?php echo ($vo["web_logo"]); ?>" size="15" />
                </td>
                <td>
                  <input name="show_type" type="text" value="<?php echo ($vo["show_type"]); ?>" size="15" />
                </td>
                <td>
                  <input type="Submit" name="Submit3" value="修改"  class="btn"/>
                  <input type="button" name="Submit" value="删除" class="btn" 
          onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
            window.location.href='/app/admin.php?s=/Other/delete_link/id/'+<?php echo ($vo["id"]); ?> ;}else{history.go(0);}" />
                </td>
              </tr>
            </form><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
      </div>
    </div>
  </div>

	<!-- /主体 -->
	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
	<!-- /底部 -->
</body>
</html>