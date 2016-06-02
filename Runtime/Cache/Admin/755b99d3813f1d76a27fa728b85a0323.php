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
			<div class="panel-content">
				<?php if(is_array($feedback)): $k = 0; $__LIST__ = $feedback;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><table class="table table-border">
						<tr>
							<td width="12%" height="30" align="right">留言标题：</td>
							<td width="28%" align="left"><?php echo ($vo["title"]); ?></td>
							<td width="10%" height="30" align="right">留言时间：</td>
							<td width="19%" align="left"><?php echo (date('Y-m-d H:i:s',$vo["add_date"])); ?></td>
							<td width="11%" height="30" align="right">留言者：</td>
							<td width="20%" align="left"><?php echo ($vo["username"]); ?></td>
						</tr>
						<tr>
							<td align="right" height="30">留言内容：</td>
							<td align="left" colspan="5"><?php echo ($vo["content"]); ?></td>
						</tr>
						<tr>
							<td align="right" height="30">回复内容：</td>
							<td align="left" colspan="5">
								<?php if(($vo["feedback_reply"]) != ""): echo ($vo["feedback_reply"]); ?>  &nbsp;&nbsp;&nbsp;  回复时间：<?php echo (date('Y-m-d H:i:s',$vo["reply_date"])); ?>
									<?php else: ?>
									您还没有回复，你可以点击
									<input type="button"  onclick="liuyan(<?php echo ($k); ?>);" value="回复"  class="btn"/><?php endif; ?>
								<script type="text/javascript">
								  function liuyan(k){
								  	document.getElementById('div'+k).style.display='block';
								  }
								  function submit(k){
								  	document.getElementById('div'+k).style.display='none';
									return true;
								  }
							  </script>
								<div id="div<?php echo ($k); ?>" style="display:none">
									<form action="/app/admin.php?s=/Admin/index/up_ly" method="post" onsubmit="return submit(<?php echo ($k); ?>);">
										<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
										<textarea name="feedback_reply" rows="3" cols="30"></textarea>
										<br />
										<input type="submit" value="提交" />
									</form>
								</div>
							</td>
						</tr>
					</table><?php endforeach; endif; else: echo "" ;endif; ?>
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