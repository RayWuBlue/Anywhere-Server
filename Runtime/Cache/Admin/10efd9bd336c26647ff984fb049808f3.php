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
        <h4>修改帖子<span onclick="javascript:history.back()">X</span></h4>
      </div>
      <div class="panel-content">
        <form  name="add" method="post" action="/app/admin.php?s=/BBS/update_post" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo ($forum_post["id"]); ?>" name="id" />
          <table class="table table-border">
            <tr>
              <td width="16%" >帖子标题</td>
              <td width="84%" >
                <input name="title" type="text" value="<?php echo ($forum_post["title"]); ?>" size="30"  />
              </td>
            </tr>
            <tr>
              <td width="16%" >主题</td>
              <td width="84%"  >
                <select name="forum_id">
                  <?php if(is_array($forum)): $i = 0; $__LIST__ = $forum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $forum_post["forum_id"]): ?>selected<?php endif; ?>
                    ><?php echo ($vo["title"]); ?>
                  </option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td width="16%" >是否置顶</td>
            <td width="84%"  >
              <input type="radio" name="is_top" value="1" <?php if(($forum_post["is_top"]) == "1"): ?>checked<?php endif; ?>
            />&nbsp;置顶&nbsp;
            <input type="radio" name="is_top" value="0" <?php if(($forum_post["is_top"]) == "0"): ?>checked<?php endif; ?>
          />&nbsp;不置顶&nbsp;
        </td>
      </tr>
      <tr>
        <td width="16%" >是否热帖</td>
        <td width="84%"  >
          <input type="radio" name="is_hot" value="1" <?php if(($forum_post["is_hot"]) == "1"): ?>checked<?php endif; ?>
        />&nbsp;是&nbsp;
        <input type="radio" name="is_hot" value="0" <?php if(($forum_post["is_hot"]) == "0"): ?>checked<?php endif; ?>
      />&nbsp;否&nbsp;
    </td>
  </tr>
  <tr>
    <td width="16%" >是否需要审核</td>
    <td width="84%"  >
      <input type="radio" name="is_verify" value="1" <?php if(($forum_post["is_verify"]) == "1"): ?>checked<?php endif; ?>
    />&nbsp;是&nbsp;
    <input type="radio" name="is_verify" value="0" <?php if(($forum_post["is_verify"]) == "0"): ?>checked<?php endif; ?>
  />&nbsp;否&nbsp;
</td>
</tr>
<tr>
<td height="25" >帖子内容</td>
<td >
  <textarea id="content1" name="content" style="width:700px;height:300px;" readonly="true"><?php echo ($forum_post["content"]); ?></textarea>
</td>
</tr>
<tr>
<td></td>
<td >
  <input type="submit" name="button" id="button" value="确认提交"  class="btn"/>
  <button onclick="javascript:history.back()">返回</button>
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