<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
    <title><?php echo ($website_title); ?></title>
    <meta name="keywords" content="<?php echo ($keywords); ?>" />
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/base.css">
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/common.css">
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/index.css">
    
    <style type="text/css">
        #apk input,select,textarea{
            width: 700px;
        }
        #apk input[type="submit"],button{
            width: 100px;   
        }
    </style>

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
                <form method="post">
                    <table class="table table-border" id="apk">
                        <tr>
                            <td width="20%">APK名称：</td>
                            <td width="70%">
                                <input type="text" name="apk_name" value="<?php echo ($apk["name"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>APK版本：</td>
                            <td>
                                <input type="text" name="apk_version" value="<?php echo ($apk["version"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>APK升级号：</td>
                            <td>
                                <input type="text" name="apk_code" value="<?php echo ($apk["code"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>APK升级日志：</td>
                            <td>
                                <textarea name="apk_update_log" rows="10"><?php echo ($apk["update_log"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>APK安装包：</td>
                            <td>
                                <input type="file" name="apk_file"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="修改"></td>
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