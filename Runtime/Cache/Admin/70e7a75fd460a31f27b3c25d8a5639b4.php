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
        <h4>修改会员信息<span onclick="javascript:history.back()">X</span></h4>
      </div>
      <div class="panel-content">
      <form method="post">
        <table class="table table-border">
          <tr>
            <td width="10%">用户名：</td>
            <td width="40%"  ><?php echo ($member_admin["username"]); ?>（<?php echo ($member_admin["id"]); ?>）</td>
            <td height="10" width="15%"  >真实姓名:</td>
            <td width="40%"  ><?php echo ($member_admin["chenfu"]); ?></td>
          </tr>
          <tr >
            <td height="28" >修改密码：</td>
            <td >
              <input name="password" type="password" value="" size="40"  />
              （不修改请留空）
            </td>
            <td  >重复密码:</td>
            <td >
              <input name="password2" type="password" value="" size="40"  />
              （不修改请留空）
            </td>
          </tr>
          <tr  >
            <td height="28"  >性别：</td>
            <td >
              <input name="sex" value="男" type="radio" <?php if(($member_admin["sex"]) == "男"): ?>checked<?php endif; ?>
            />&nbsp;男
            <input name="sex" value="女" type="radio" <?php if(($member_admin["sex"]) == "女"): ?>checked<?php endif; ?>
          />&nbsp;女
        </td>
        <td  >年龄:</td>
        <td >
          <input name="old" type="text" value="<?php echo ($member_admin["old"]); ?>" size="5"  />
          &nbsp;岁
        </td>
      </tr>
      <tr >
        <td height="28"  >出生年月:</td>
        <td >
          <input name="birthday" type="text" value="<?php echo ($member_admin["birthday"]); ?>" size="40"  />
        </td>
      </tr>
      <tr>
        <td height="28"  >手机：</td>
        <td >
          <input name="mobilephone" type="text" value="<?php echo ($member_admin["mobilephone"]); ?>" size="40"  />
        </td>
        <td  >座机:</td>
        <td >
          <input name="telephone" type="text" value="<?php echo ($member_admin["telephone"]); ?>" size="40"  />
        </td>
      </tr>
      <tr >
        <td height="28"  >QQ号码：</td>
        <td >
          <input name="qq" type="text" value="<?php echo ($member_admin["qq"]); ?>" size="40"  />
        </td>
        <td  >邮箱号码:</td>
        <td >
          <input name="email" type="text" value="<?php echo ($member_admin["email"]); ?>" size="40"  />
        </td>
      </tr>
      <tr>
        <td height="28"  >注册时间：</td>
        <td ><?php echo (date('Y-m-d H:i:s',$member_admin["add_time"])); ?></td>
        <td  >最后登录时间:</td>
        <td ><?php echo (date('Y-m-d H:i:s',$member_admin["login_time"])); ?></td>
      </tr>
      <tr >
        <td height="25" >&nbsp;</td>
        <td >
          <input type="submit" name="button" id="button" value="确认提交"  class="btn"/>
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