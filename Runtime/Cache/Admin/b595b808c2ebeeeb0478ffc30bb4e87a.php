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
     #dialog-backgound{
      background-color: #4E4E4E;
      position: absolute;
      z-index: 999;
      left: 0;
      top: 0;
      display: none;
      width: 100%;
      height: 1000px;
      opacity: 0.5;
      filter: alpha(opacity=50);
      -moz-opacity: 0.5;
     }
     #dialog-window
     {
      position: absolute;
      width: 400px;
      left: 50%;
      top: 50%;
      margin-left: -200px;
      height: auto;
      z-index: 1000;
      background-color: #fff;
     }
     #dialog-close-button
     {
      width: 20px;
      height: 20px;
      display: block;
      font-size: 12px;
      color: white;
      padding: 2px;
      text-align: center;
      background: #8B8B8B;
      border-radius: 20px;
      cursor: pointer;
     }
     #dialog-close-button:hover{
        background: #6F6F6F;
     }
     #dialog-window .form
     {
      padding: 10px;
     }
     .dialog-centent{
        padding: 10px;
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
	

 <div class="dialog" id="dialog-add-cate">
     <div id="dialog-backgound"></div>
     <div id="dialog-window" class="panel" style="display: none">
         <div class="panel-head">
             <h4>
                 添加分类
                 <a id="dialog-close-button" class="float-right">X</a>
             </h4>
         </div>
         <div class="dialog-centent">
             <form method="post" action="/app/admin.php?s=/Index/add_cate">
                 <span>分类名：</span><input type="text" name="name">&nbsp;&nbsp;
                 <input type="submit" value="确定">
             </form>
         </div>
     </div>
 </div>

 <div class="dialog" id="dialog-rename-cate">
     <div id="dialog-backgound"></div>
     <div id="dialog-window" class="panel" style="display: none">
         <div class="panel-head">
             <h4>
                 重命名分类
                 <a id="dialog-close-button" class="float-right">X</a>
             </h4>
         </div>
         <div class="dialog-centent">
             <form method="post" action="/app/admin.php?s=/Index/edit_cate">
                 <span>分类名：</span>
                 <input type="hidden" name="id" value="<?php echo ($cate_id); ?>">
                 <input type="text" name="name" value="<?php echo ($catename); ?>">&nbsp;&nbsp;
                 <input type="submit" value="确定">
             </form>
         </div>
     </div>
 </div>

 <div class="dialog" id="dialog-del-cate">
     <div id="dialog-backgound"></div>
     <div id="dialog-window" class="panel" style="display: none">
         <div class="panel-head">
             <h4>
                 警告
                 <a id="dialog-close-button" class="float-right">X</a>
             </h4>
         </div>
         <div class="dialog-centent">
             <form method="post" action="/app/admin.php?s=/Index/del_cate">
                 <h4>是否删除<font color="red"><?php echo ($catename); ?></font>分类？<br/>该分类下的所有新闻将被删除!!</h4>
                 <input type="hidden" name="id" value="<?php echo ($cate_id); ?>">
                 <input type="submit" value="确定">
             </form>
         </div>
     </div>
 </div>

    <div class="content">
        <div class="panel">
            <div class="panel-head">
                <h4>新闻列表</h4>
            </div>
            <div class="panel-control">
                <form id="cateform" action="/app/admin.php?s=/Index/index" method="post">
                    <select id="cate_id" name="cate_id" style="width: 300px;height: 30px;">
                    
                        <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if(($cate_id == $cate['id'])): ?><option selected="selected" value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["name"]); ?></option>
                                <?php else: ?>
                                <option value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </form>
                
                <a class="button float-right dialog-trigger" dialog-id="dialog-add-cate">添加分类
                </a>
                <a class="button float-right dialog-trigger" dialog-id="dialog-rename-cate">重命名当前分类
                </a>
                <a class="button float-right dialog-trigger" dialog-id="dialog-del-cate">删除当前分类</a>
                <span class="divider-horizontal float-right"></span>
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
                            <td><?php echo (date('Y-m-d',strtotime($item["add_time"]))); ?></td>
                            <td>
                                <span><a href="/app/admin.php?s=/Index/edit/<?php echo ($item["id"]); ?>">编辑</a></span>
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
    <div>
        
    </div>

	<!-- /主体 -->
	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
    <script type="text/javascript">
    $(function() {
        $('#cate_id').change(function(e) {
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
    $(function() {
      $(".dialog-trigger").click(function() {
          var dialog = $("#"+$(this).attr('dialog-id'));
          var dialog_backgound = dialog.children("#dialog-backgound").first();
          dialog_backgound.css("height",$(document).height());
          dialog_backgound.fadeIn();
          
          var yscroll = document.documentElement.scrollTop;
          document.documentElement.scrollTop = 0;

          var dialog_window = dialog.children("#dialog-window").first();
          dialog_window.css("top", "150px");
          dialog_window.fadeIn();
          
          var dialog_close_button = dialog.find("#dialog-close-button").first();
          dialog_close_button.click(function() {
              dialog_backgound.fadeOut();
              dialog_window.fadeOut();
          });
        });
    });
    </script>

	<!-- /底部 -->
</body>
</html>