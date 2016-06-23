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
        <input type="button" name="Submit3" value="添加广告"  class="btn" onclick="window.location.href='/app/admin.php?s=/Other/add_ad'"/>
      </div>
      <div class="panel-content">
        <table class="table table-border">
          <tr>
            <td width="9%" height="25">ID</td>
            <td width="18%">广告名称</td>
            <td width="20%">链接地址</td>
            <td width="25%">添加时间</td>
            <td width="15%">显示状态</td>
            <td width="13%">操作</td>
          </tr>

          <?php if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td><?php echo ($vo["id"]); ?></td>
              <td height="25"><?php echo ($vo["ad_title"]); ?></td>
              <td><?php echo ($vo["ad_link"]); ?></td>
              <td><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
              <td>
                <?php if(($vo["is_show"]) == "0"): ?>显示<?php endif; ?>
                <?php if(($vo["is_show"]) == "1"): ?>不显示<?php endif; ?>
              </td>
              <td>
                <input type="button" name="Submit3" value="查看"  class="btn"
          onclick="window.location.href='/app/admin.php?s=/Other/detail_ad/id/'+<?php echo ($vo["id"]); ?>"/>
                <input type="button" name="Submit" value="删除" class="btn" 
          onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
            window.location.href='/app/admin.php?s=/Other/delete_ad/id/'+<?php echo ($vo["id"]); ?> ;}else{history.go(0);}" />
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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