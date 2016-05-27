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
            <h1>添加推荐</h1>
            <form action="" method="post" class="form">
                <?php if($day != 'banner'): ?><div class="form-item">
                    <label class="item-title">日期：</label>
                    <input type="date" name="date" value="<?php echo ($day); ?>"/>
                </div>
                <?php else: ?>
                <div class="form-item">
                    <label class="item-title">类型：</label>
                    <input type="text" name="date" value="<?php echo ($day); ?>"/>
                </div><?php endif; ?>
                <div class="form-item">
                    <label class="item-title">图片1：</label>
                    <input type="text" class="item-ipt-middle" name="wid0" value="<?php echo ($wid0); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片2：</label>
                    <input type="text" class="item-ipt-middle" name="wid1" value="<?php echo ($wid1); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片3：</label>
                    <input type="text" class="item-ipt-middle" name="wid2" value="<?php echo ($wid2); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片4：</label>
                    <input type="text" class="item-ipt-middle" name="wid3" value="<?php echo ($wid3); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片5：</label>
                    <input type="text" class="item-ipt-middle" name="wid4" value="<?php echo ($wid4); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片6：</label>
                    <input type="text" class="item-ipt-middle" name="wid5" value="<?php echo ($wid5); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片7：</label>
                    <input type="text" class="item-ipt-middle" name="wid6" value="<?php echo ($wid6); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片8：</label>
                    <input type="text" class="item-ipt-middle" name="wid7" value="<?php echo ($wid7); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片9：</label>
                    <input type="text" class="item-ipt-middle" name="wid8" value="<?php echo ($wid8); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title">图片10：</label>
                    <input type="text" class="item-ipt-middle" name="wid9" value="<?php echo ($wid9); ?>" />
                </div>
                <div class="form-item">
                    <label class="item-title"></label>
                    <input type="submit" value="添加"/>
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