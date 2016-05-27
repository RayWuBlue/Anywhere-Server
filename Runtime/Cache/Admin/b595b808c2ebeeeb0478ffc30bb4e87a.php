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
                <h4>新闻列表</h4>
            </div>
            <div class="panel-control">
                <form id="cateform" action="/app/admin.php?s=/Index/index" method="post">
                    按分类查看：
                    <select id="cateid" name="cateid" style="width: 300px;height: 30px;">
                        <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if(($cateid == $cate['id'])): ?><option selected="selected" value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["name"]); ?></option>
                                <?php else: ?>
                                <option value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </form>
                <a href="/app/admin.php?s=/Index/add" class="button float-right">添加分类</a>
                <a href="/app/admin.php?s=/Index/add" class="button float-right">删除当前分类</a>
                <a href="/app/admin.php?s=/Index/add" class="button float-right">添加新闻</a>
                <div class="float-clear"></div>
            </div>
            <div class="panel-content">
                <table class="table table-border" style="text-align: center;">
                    <thead>
                        <th width="5%">
                            <input type="checkbox" id="chk_del_all">
                        </th>
                        <th width="5%">ID</th>
                        <th width="40%">标题</th>
                        <th width="20%">添加时间</th>
                        <th width="10%">操作</th>
                    </thead>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox"></td>
                            <td><?php echo ($item["id"]); ?></td>
                            <td><?php echo ($item["title"]); ?></td>
                            <td><?php echo (date('Y-m-d',strtotime($item["addtime"]))); ?></td>
                            <td>
                                <span><a href="/app/admin.php?s=/reco/add/wid/<?php echo ($item["id"]); ?>">编辑</a></span>
                                <span>
                                <a href="javascript:void(0);" onclick="del('<?php echo ($item["id"]); ?>');">删除</a>
                                </span>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                <div class="page_wrap"><?php echo ($page); ?></div>
            </div>
        </div>
    </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
    <script type="text/javascript">
    $(function() {
        $('#cateid').change(function(e) {
            $('#cateform').submit();
        });
    });

    function del(id) {
        if (confirm('确认删除？')) {
            $.ajax({
                url: '/app/admin.php?s=/Index/del',
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