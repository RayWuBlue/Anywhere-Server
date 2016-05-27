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
        <h4>社区板块管理</h4>
      </div>
      <div class="panel-control">
        <form id="form1" name="form1" method="post" action="/app/admin.php?s=/BBS/add_bankuai">
          排序ID
          <input type="text" name="ttedu_paixu" value="999" size="5" />
          板块名称：
          <input type="text" name="ttedu_zhuti_topic" />
          <input type="submit" value="添加板块" />
        </form>
      </div>
      <div class="panel-content">
        <table class="table table-border">
          <tr bgcolor="#e7f3e7">
            <td width="5%" class="td">&nbsp;</td>
            <td width="10%" class="td">ID</td>
            <td width="28%" height="25" class="td">板块名称</td>
            <td width="9%" class="td">帖子数量</td>
            <td width="19%" class="td">推出时间</td>
            <td width="13%" class="td">排序</td>
            <td width="16%" class="td">操作</td>
          </tr>

          <?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form id="form1" name="form1" method="post" action="/app/admin.php?s=/BBS/update_bankuai">
              <input name="ttedu_id" type="hidden" value="<?php echo ($vo["ttedu_id"]); ?>" />
              <tr>
                <td class="td">
                  <input name="ID" type="checkbox" id="ID" value="" />
                </td>
                <td class="td"><?php echo ($vo["ttedu_id"]); ?></td>
                <td class="td">
                  <input type="text" name="ttedu_zhuti_topic" size="30" value="<?php echo ($vo["ttedu_zhuti_topic"]); ?>" />
                </td>
                <td class="td"><?php echo ($vo["counts"]); ?></td>
                <td class="td"><?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?></td>
                <td class="td">
                  <input type="text" name="ttedu_paixu" size="5" value="<?php echo ($vo["ttedu_paixu"]); ?>" />
                </td>
                <td class="td">
                  <input type="Submit" name="Submit3" value="修改" class="btn"/>
                  <input type="button" name="Submit" value="删除"  class="btn"
           onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){
            window.location.href='/app/admin.php?s=/BBS/delete_bankuai/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>;}else{history.go(0);}"/>
                </td>
              </tr>
            </form><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div><?php echo ($page); ?></div>
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