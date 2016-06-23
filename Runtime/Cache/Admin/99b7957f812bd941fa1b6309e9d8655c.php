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
                <h4>编辑新闻<span onclick="javascript:history.back()">X</span></h4>
            </div>
            <div class="panel-content">
                <table class="table table-border">
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo ($news["id"]); ?>">
                        <tr>
                            <td>
                                <span>新闻分类：</span>
                            </td>
                            <td>
                                <select name="cate_id" style="width: 800px">
                                    <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cate["id"]); ?>" <?php if(($$news["cate_id"]) == $caye["id"]): ?>selected<?php endif; ?>><?php echo ($cate["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>新闻标题：</span>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo ($news["title"]); ?>" style="width: 800px"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>新闻摘要：</span>
                            </td>
                            <td>
                                <textarea name="summary" rows="3"  style="width: 800px" ><?php echo ($news["summary"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>封面：</span>
                            </td>
                            <td>
                                <img src="<?php echo ($news["image_cover"]); ?>">
                            </td>
                            <td><input type="button" value="清除封面"></td>
                            <td>
                                <input type="file" name="image"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>新闻内容：</span>
                            </td>
                            <td>
                                <textarea id="editor_id" rows="20" name="content" style="width: 800px"><?php echo ($news["content"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="完成"/>
                            </td>
                        </tr>
                    </div>
                </form>
            </table>
        </div>
    </div>

	<!-- /主体 -->
	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
    <script charset="utf-8" src="/app/Public/Admin/lib/editor/kindeditor.js"></script>
    <script charset="utf-8" src="/app/Public/Admin/lib/editor/lang/zh_CN.js"></script>
    <script type="text/javascript">
    KindEditor.ready(function(K){
        K.create('textarea[name="content"]', {
            afterBlur: function(){this.sync();
            }
        });
    });
</script>

	<!-- /底部 -->
</body>
</html>