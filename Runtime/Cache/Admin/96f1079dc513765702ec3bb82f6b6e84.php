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
        .post-item{
            margin: 5px auto;
        }
        .post-item input,select,textarea{
            width: 300px;
        }
        .banner-image{
            width: 380px;
            height: 160px;
            background-color: #EDEDED;
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
	
    <div id="main" class="content">
        <div id="content" class="panel">
            <div class="panel-head">
                <h4>Banner管理</h4>
            </div>
            <div class="panel-control">
                <input type="button" onclick="javascript:window.location.href='/app/admin.php?s=/Banner/add'" value="新增Banner"></div>
            <div class="panel-content">
                <table class="table table-border" id="preview">
                    <?php if(is_array($banners)): $k = 0; $__LIST__ = $banners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($k % 2 );++$k;?><tr>
                            <td>#<?php echo ($banner["id"]); ?></td>
                            <td>
                                <img src="<?php echo ($banner["image"]); ?>" class="banner-image"></td>
                            <td>
                                <form action="/app/admin.php?s=/Banner/save" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo ($banner["id"]); ?>">
                                    <div class="post-item">
                                        <span>Banner标题：</span>
                                        <input type="text" value="<?php echo ($banner["title"]); ?>" name="title"></div>
                                    <div class="post-item">
                                        <span>Banner顺序：</span>
                                        <input type="text" value="<?php echo ($banner["order"]); ?>" name="order"></div>
                                    <div class="post-item">
                                        <span>Banner动作：</span>
                                        <select name="action" name="action">
                                            <?php if(is_array($options)): $k = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($k % 2 );++$k;?><option value="<?php echo ($k); ?>" selected="<?php if(($$banner["action"]) == $key): endif; ?>
                                                "><?php echo ($option); ?>
                                            </option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div class="post-item">
                                    <span>Banner图片：</span>
                                    <input type="file" value="上传图片" name="image"></div>
                            </td>
                            <td>
                                <input type="submit" value="修改">
                                <input type="button" value="删除" onclick="javascrip:window.location.href='/app/admin.php?s=/Banner/del/id/<?php echo ($banner["id"]); ?>'"></td>
                        </form>
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