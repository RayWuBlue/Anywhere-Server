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
		<div class="panel">
			<div class="panel-head">
				<h4>社区帖子管理</h4>
			</div>
			<div class="panel-control">
				<select name="ssfl" id="jumpMenu" onChange="window.location.href='/app/admin.php?s=/BBS/admin_bbs_tiezi/ttedu_zhuti_id/'+this.options[this.selectedIndex].value">
					<option>---分类查看---</option>
					<option value="">全部</option>
					<?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_zhuti_topic"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<input type="button" name="Submit3" value="添加帖子"   class="btn"
					onclick="window.location.href='/app/admin.php?s=/BBS/add_tiezi'" />
			</div>
			<div class="panel-content">

				<form id="form1" name="form1" method="post" action="admin_news.asp?del=checkbox">
					<table class="table table-border">
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

						<?php if(is_array($shequ_info)): $i = 0; $__LIST__ = $shequ_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td class="td">
									<input name="ID" type="checkbox" id="ID" value="" />
								</td>
								<td class="td"><?php echo ($vo["ttedu_id"]); ?></td>
								<td class="td">
									<a href="/app/admin.php?s=/BBS/xiugai_tiezi/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_shequ_title"]); ?></a>
									<?php if(($vo["ttedu_shifouretie"]) == "1"): ?>[ <font color="#FF0000">热</font>
										]<?php endif; ?>
								</td>
								<td class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_fbdate"])); ?></td>
								<td class="td">
									<?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo2["ttedu_id"]) == $vo["ttedu_zhuti_id"]): echo ($vo2["ttedu_zhuti_topic"]); endif; endforeach; endif; else: echo "" ;endif; ?>
								</td>
								<td class="td">
									<?php if(($vo["person"]) == ""): ?>匿名
										<?php else: ?>
										<?php if(is_array($vo['person'])): $i = 0; $__LIST__ = $vo['person'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i; if(($person["mid"]) == "1"): ?><a href="/app/admin.php?s=/Admin/TeachInfo/update_member_teh/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; ?>
											<?php if(($person["mid"]) == "2"): ?><a href="/app/admin.php?s=/Admin/HuiyuanInfo/update_member_stu/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
								</td>
								<td class="td"><?php echo ($vo["counts"]); ?></td>
								<td class="td">
									<?php if(($vo["ttedu_shifouzhiding"]) == "1"): ?><a href="/app/admin.php?s=/BBS/update_shifouzhiding/shifouzhiding/0/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" style="color:#006600;">置顶</a>
										<?php else: ?>
										<a href="/app/admin.php?s=/BBS/update_shifouzhiding/shifouzhiding/1/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" style="color:#006600;">不置顶</a><?php endif; ?>
								</td>
								<td class="td">
									<?php if(($vo["ttedu_shifoushenghe"]) == "1"): ?>需要审核
										<?php else: ?>
										不需要审核<?php endif; ?>
								</td>
								<td class="td">
									<input type="button" name="Submit3" value="详情"  class="btn"
			  		onclick="window.location.href='/app/admin.php?s=/BBS/xiugai_tiezi/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> " />
									<input type="button" name="Submit3" value="查看回复"  class="btn"
			  		onclick="window.location.href='/app/admin.php?s=/BBS/shequ_reply_info/ttedu_info_id/'+<?php echo ($vo["ttedu_id"]); ?> " />
									<input type="button" name="Submit3" value="删除"  class="btn"
					onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
					window.location.href='/app/admin.php?s=/BBS/delete_tiezi/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>;}else{history.go(0);}" />
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