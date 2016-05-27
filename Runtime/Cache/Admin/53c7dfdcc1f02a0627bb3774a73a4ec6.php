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
            <div class="row"><a href="/app/admin.php?s=/Topic/add">添加专题</a></div>
            <div class="row">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th class="pic_pic">名称(默认)</th>
                            <th class="pic_width">俄语</th>
                            <th class="pic_height">葡萄牙语</th>
                            <th class="pic_title">西班牙语</th>
                            <th class="pic_title">土耳其语</th>
                            <th class="pic_addtime">添加时间</th>
                            <th class="pic_opt">操作</th>
                        </tr>
                    </thead>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="/app/admin.php?s=/Topic/topicshow/topicid/<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></a></td>
                            <td><?php echo ($item["name_els"]); ?></td>
                            <td><?php echo ($item["name_pty"]); ?></td>
                            <td><?php echo ($item["name_xby"]); ?></td>
                            <td><?php echo ($item["name_teq"]); ?></td>
                            <td><?php echo (date('Y-m-d',strtotime($item["addtime"]))); ?></td>
                            <td>
                                <ul class="list_opt">
                                    <li><a href="/app/admin.php?s=/Topic/edit/id/<?php echo ($item["id"]); ?>">编辑</a></li>
                                    <li><a href="/app/admin.php?s=/Topic/addpic/id/<?php echo ($item["id"]); ?>">添加图片</a></li>
                                    <li><a href="javascript:void(0);" onclick="del('<?php echo ($item["id"]); ?>');">删除</a></li>
                                </ul>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                <div class="page_wrap">
                    <?php echo ($page); ?>
                </div>
            </div>
        </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
<script type="text/javascript">
    function del(id) {
        if (confirm('确认删除？')) {
            $.ajax({
                url: '/app/admin.php?s=/Topic/del',
                data: {
                    id: id
                },
                type: 'post'
            }).done(function(ret) {
                if (ret == 0) {
                    alert('请先登录!');
                } else if (ret == 1) {
                    window.location.reload();
                } else if (ret == 2) {
                    alert('参数有误！');
                } else {
                    alert('出错啦！请联系管理员！');
                }
            })
            .fail(function(msg) {
                alert(msg);
            })
        }
    }
</script>

	<!-- /底部 -->
</body>
</html>