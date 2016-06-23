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
        <form id="form1" name="form1" method="post" action="/app/admin.php?s=/BBS/add_forum">
          排序ID
          <input type="text" name="order" value="999" size="5" />
          板块名称：
          <input type="text" name="title" />
          <input type="submit" value="添加板块" />
        </form>
      </div>
      <div class="panel-content">
        <table class="table table-border">
          <tr>
            <td width="5%">&nbsp;</td>
            <td width="10%">ID</td>
            <td width="28%" height="25">板块名称</td>
            <td width="9%">帖子数量</td>
            <td width="19%">推出时间</td>
            <td width="13%">排序</td>
            <td width="16%">操作</td>
          </tr>

          <?php if(is_array($forum)): $i = 0; $__LIST__ = $forum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form id="form1" name="form1" method="post" action="/app/admin.php?s=/BBS/update_forum">
              <input name="id" type="hidden" value="<?php echo ($vo["id"]); ?>" />
              <tr>
                <td>
                  <input name="ID" type="checkbox" id="ID" value="" />
                </td>
                <td><?php echo ($vo["id"]); ?></td>
                <td>
                  <input type="text" name="title" size="30" value="<?php echo ($vo["title"]); ?>" />
                </td>
                <td><?php echo ($vo["counts"]); ?></td>
                <td><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
                <td>
                  <input type="text" name="order" size="5" value="<?php echo ($vo["order"]); ?>" />
                </td>
                <td>
                  <input type="Submit" name="Submit3" value="修改" class="btn"/>
                  <input type="button" name="Submit" value="删除"  class="btn"
           onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
            window.location.href='/app/admin.php?s=/BBS/delete_forum/id/'+<?php echo ($vo["id"]); ?>;}else{history.go(0);}"/>
                </td>
              </tr>
            </form><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div><?php echo ($page); ?></div>
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