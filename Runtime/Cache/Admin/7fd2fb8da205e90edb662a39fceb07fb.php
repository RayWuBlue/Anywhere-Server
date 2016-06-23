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
				<select name="ssfl" id="jumpMenu" onChange="window.location.href='/app/admin.php?s=/BBS/admin_bbs_post/forum_id/'+this.options[this.selectedIndex].value">
					<option>---分类查看---</option>
					<option value="">全部</option>
					<?php if(is_array($forum)): $i = 0; $__LIST__ = $forum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<input type="button" name="Submit3" value="添加帖子"   class="btn"
					onclick="window.location.href='/app/admin.php?s=/BBS/add_post'" />
			</div>
			<div class="panel-content">
				<form id="form1" name="form1" method="post">
					<table class="table table-border">
						<tr>
							<td width="3%">&nbsp;</td>
							<td width="4%">ID</td>
							<td width="19%" height="25">帖子标题</td>
							<td width="13%">发帖时间</td>
							<td width="12%">所属板块</td>
							<td width="8%">作者</td>
							<td width="6%">回复数量</td>
							<td width="7%">是否置顶</td>
							<td width="8%">审核状态</td>
							<td width="20%">操作</td>
						</tr>

						<?php if(is_array($forum_post)): $i = 0; $__LIST__ = $forum_post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input name="ID" type="checkbox" id="ID" value="" />
								</td>
								<td><?php echo ($vo["id"]); ?></td>
								<td>
									<a href="/app/admin.php?s=/BBS/edit_post/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
									<?php if(($vo["is_hot"]) == "1"): ?>[ <font color="#FF0000">热</font>
										]<?php endif; ?>
								</td>
								<td><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
								<td>
									<?php if(is_array($forum)): $i = 0; $__LIST__ = $forum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo2["id"]) == $vo["forum_id"]): echo ($vo2["title"]); endif; endforeach; endif; else: echo "" ;endif; ?>
								</td>
								<td>
									<?php if(($vo["person"]) == ""): ?>匿名
									<?php else: ?>
									<?php if(is_array($vo['person'])): $i = 0; $__LIST__ = $vo['person'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i; if(($person["user_type"]) == "1"): ?><a href="/app/admin.php?s=/Admin/TeachInfo/update_member_teh/id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; ?>
										<?php if(($person["user_type"]) == "2"): ?><a href="/app/admin.php?s=/Admin/HuiyuanInfo/update_member_user/id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
								</td>
								<td><?php echo ($vo["counts"]); ?></td>
								<td>
									<?php if(($vo["is_top"]) == "1"): ?><a href="/app/admin.php?s=/BBS/update_is_top/is_top/0/id/<?php echo ($vo["id"]); ?>" style="color:#006600;">置顶</a>
										<?php else: ?>
										<a href="/app/admin.php?s=/BBS/update_is_top/is_top/1/id/<?php echo ($vo["id"]); ?>" style="color:#006600;">不置顶</a><?php endif; ?>
								</td>
								<td>
									<?php if(($vo["is_verify"]) == "1"): ?>需要审核
										<?php else: ?>
										不需要审核<?php endif; ?>
								</td>
								<td>
									<input type="button" name="Submit3" value="详情"  class="btn"
			  		onclick="window.location.href='/app/admin.php?s=/BBS/edit_post/id/'+<?php echo ($vo["id"]); ?> " />
									<input type="button" name="Submit3" value="查看回复"  class="btn"
			  		onclick="window.location.href='/app/admin.php?s=/BBS/forum_comment/info_id/'+<?php echo ($vo["id"]); ?> " />
									<input type="button" name="Submit3" value="删除"  class="btn"
					onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
					window.location.href='/app/admin.php?s=/BBS/delete_post/id/'+<?php echo ($vo["id"]); ?>;}else{history.go(0);}" />
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
					<div><?php echo ($page2); ?></div>
				</form>
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