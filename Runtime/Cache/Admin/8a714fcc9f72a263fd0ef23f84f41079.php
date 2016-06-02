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
				<h4>
					添加广告
					<span onclick="javascript:history.back()">X</span>
				</h4>
			</div>
			<div class="panel-content">
				<form action="/app/admin.php?s=/Other/insert_ad" method="post" enctype="multipart/form-data">
					<table class="table table-border">
						<tr>
							<td width="27%">广告名称：</td>
							<td width="73%">
								<input type="text" name="ad_title"  size="20" />
							</td>
						</tr>
						<tr>
							<td height="30">链接地址：</td>
							<td>
								<input type="text" name="ad_link"  size="20" />
							</td>
						</tr>
						<tr>
							<td height="30">上传图片：</td>
							<td>
								<input name="image" id="image" type="file" class="file huge" />
								&nbsp;上传允许文件类型：gif png jpg 图像文件
							</td>
						</tr>
						<tr>
							<td height="30">广告位置：</td>
							<td>
								<input type="text" name="text"  size="20" />
							</td>
						</tr>
						<tr>
							<td height="30">图片宽度：</td>
							<td>
								<input type="text" name="ad_height"  size="5" />
							</td>
						</tr>
						<tr>
							<td height="30">图片高度：</td>
							<td>
								<input type="text" name="ad_width"  size="5" />
							</td>
						</tr>
						<tr>
							<td height="30">是否显示：</td>
							<td>
								<input type="radio" name="is_show" value="1"/>
								不显示&nbsp;&nbsp;
								<input type="radio" name="is_show" value="0" checked="checked"/>
								显示
							</td>
						</tr>
						<tr>
							<td height="30"></td>
							<td>
								<input type="submit" value="确定添加" />
							</td>
						</tr>
					</table>
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