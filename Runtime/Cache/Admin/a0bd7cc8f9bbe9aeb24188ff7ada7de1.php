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
            <h1>修改分类</h1>
            <form action="" method="post" class="form">
                <input type="hidden" name="id" value="<?php echo ($id); ?>"/>
                <div class="form-item">
                    <label class="item-title item-title-middle">名称(默认、英语)：</label>
                    <input type="text" required class="item-ipt-middle" name="name" value="<?php echo ($item["name"]); ?>"/>
                </div>
                <div class="form-item">
                    <label class="item-title item-title-middle">名称(葡萄牙)：</label>
                    <input type="text" class="item-ipt-middle" name="name_pty" value="<?php echo ($item["name_pty"]); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title item-title-middle">名称(西班牙)：</label>
                    <input type="text" class="item-ipt-middle" name="name_xby" value="<?php echo ($item["name_xby"]); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title item-title-middle">名称(俄语)：</label>
                    <input type="text" class="item-ipt-middle" name="name_els" value="<?php echo ($item["name_els"]); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title item-title-middle">名称(土耳其)：</label>
                    <input type="text" class="item-ipt-middle" name="name_teq" value="<?php echo ($item["name_teq"]); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title item-title-middle"></label>
                    <input type="submit" value="修改"/>
                </div>
            </form>
        </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
	<!-- /底部 -->
</body>
</html>