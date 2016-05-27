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
        <h4>会员管理</h4>
      </div>
      <div class="panel-content">
        <form id="form1" name="form1" method="post" action="admin_news.asp?del=checkbox">
          <table class="table table-border">
            <tr>
              <td width="4%" >ID</td>
              <td width="11%">姓名</td>
              <td width="8%" >性别</td>
              <td width="8%" >年龄</td>
              <td width="22%" >注册时间</td>
              <td width="22%" >最后登录时间</td>
              <td width="13%" >联系电话</td>
              <td width="12%" >操作</td>
            </tr>
            <?php if(is_array($huiyuan_info)): $i = 0; $__LIST__ = $huiyuan_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td ><?php echo ($vo["ttedu_id"]); ?></td>
                <td ><?php echo ($vo["ttedu_username"]); ?></td>
                <td ><?php echo ($vo["ttedu_sex"]); ?></td>
                <td ><?php echo ($vo["ttedu_old"]); ?></td>
                <td ><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
                <td ><?php echo (date('Y-m-d H:i:s',$vo["ttedu_logindate"])); ?></td>
                <td ><?php echo ($vo["ttedu_shouji"]); ?></td>
                <td >
                  <input type="button" name="Submit3" value="修改"
          onclick="window.location.href='/app/admin.php?s=/HuiyuanInfo/update_member_stu/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> "/>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
        </form>
      </div>
    </div>
  </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script src="/app/Public/Admin/js/jquery.js"></script>
    <script src="/app/Public/Admin/js/utils.js"></script>

    
  <script language="javascript">
    function CheckAll(){ 
     for (var i=0;i<eval(form1.elements.length);i++){ 
      var e=form1.elements[i]; 
      if (e.name!="allbox") e.checked=form1.allbox.checked; 
     } 
    }
  </script>
	<!-- /底部 -->
</body>
</html>