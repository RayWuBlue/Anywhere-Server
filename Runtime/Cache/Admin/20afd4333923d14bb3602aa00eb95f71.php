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
        <h4>管理员列表</h4>
      </div>
      <div class="panel-control">
        <form action="/app/admin.php?s=/member_user/insert" method="post">
          <tr>
            <td>
              <input name="username" type="text"  size="15"/>
            </td>
            <td height="25">
              <input name="password" type="text"  size="15"/>
            </td>
            <td>
              <input name="email" type="text"   size="18"/>
            </td>
            <td>
              <input name="mobile" type="text"  size="15"/>
            </td>
            <td>
              <input name="qq" type="text"  size="15" />
            </td>
            <td colspan="2">
              <input type="radio" name="auth" value="0" />
              &nbsp; 超级管理员
              <input type="radio" name="auth" value="1" checked/>
              &nbsp; 一般管理员
            </td>
            <td>
              <input type="Submit" name="Submit3" value="添加管理员"  class="btn"/>
            </td>
          </tr>
        </form>
      </div>
      <div class="panel-content">
        <table class="table table-border">
          <thead>
            <td width="10%">账号</td>
            <td width="9%" >密码</td>
            <td width="12%">邮箱</td>
            <td width="12%">电话</td>
            <td width="12%">QQ</td>
            <td width="23%">权限</td>
            <td width="10%">修改时间</td>
            <td width="12%">操作</td>
          </thead>
          <?php if(is_array($member_users)): $i = 0; $__LIST__ = $member_users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="<?php echo U('update');?>" method="post">
              <input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id" />
              <tr>
                <td>
                  <input name="username" type="text" value="<?php echo ($vo["username"]); ?>" size="15"/>
                </td>
                <td height="25">
                  <input name="password" type="text" value="<?php echo ($vo["password"]); ?>" size="15"/>
                </td>
                <td>
                  <input name="email" type="text" value="<?php echo ($vo["email"]); ?>"  size="18"/>
                </td>
                <td>
                  <input name="mobile" type="text" value="<?php echo ($vo["mobile"]); ?>"  size="15"/>
                </td>
                <td>
                  <input name="qq" type="text" value="<?php echo ($vo["qq"]); ?>" size="15" />
                </td>
                <td>
                  <input type="radio" name="auth" value="0" <?php if(($vo["auth"]) == "0"): ?>checked<?php endif; ?>
                />&nbsp; 超级
                <input type="radio" name="auth" value="1" <?php if(($vo["auth"]) != "0"): ?>checked<?php endif; ?>
              />&nbsp; 一般
            </td>
            <td><?php echo (date('Y-m-d',$vo["add_date"])); ?></td>
            <td>
              <input type="Submit" name="Submit3" value="修改"  class="btn"/>
              <input type="button" name="Submit" value="删除" class="btn" 
                    onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
                      window.location.href='/app/admin.php?s=/member_user/delete/id/'+<?php echo ($vo["id"]); ?> ;}else{history.go(0);}" />
            </td>
          </tr>
        </form><?php endforeach; endif; else: echo "" ;endif; ?>
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