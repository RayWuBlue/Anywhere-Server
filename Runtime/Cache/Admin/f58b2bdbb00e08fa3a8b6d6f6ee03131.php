<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<title>管理后台菜单</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/M1.css">
<script src="Public/admin/images/common.js" type="text/javascript"></script>
<script>
var collapsed = getcookie('cdb_collapse');
function collapse_change(menucount) {
	if($('menu_' + menucount).style.display == 'none') {
		$('menu_' + menucount).style.display = '';collapsed = collapsed.replace('[' + menucount + ']' , '');
		$('menuimg_' + menucount).src = 'Public/admin/images/menu_reduce.gif';
	} else {
		$('menu_' + menucount).style.display = 'none';collapsed += '[' + menucount + ']';
		$('menuimg_' + menucount).src = 'Public/admin/images/menu_add.gif';
	}
	setcookie('cdb_collapse', collapsed, 2592000);
}
</script>
</head>
<body style="margin:5px!important;margin:3px;">
<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
	<tr class="leftmenutext">
		<td>
			<div align="center"><a href="__APP__/Admin/index/index" target="_parent">站长首页</a></div>
	  </td>
	</tr>
</table>
<div id="home">
							
	<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
		<tr class="leftmenutext">
			<td><a href="#" onClick="collapse_change(2)"><img id="menuimg_2" src="Public/admin/images/menu_add.gif" border="0"/></a>&nbsp;
			<a href="#" onClick="collapse_change(2)">信息管理</a></td>
		</tr>
		<tbody id="menu_2" style="display:none">
			<tr class="leftmenutd">
				<td>
					<table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
						<tr >
						  <td><a href="__APP__/Admin/JiajiaoInfo/admin_info_edu" target="main">家教信息</a></td>
						</tr>
					    <tr >
							<td><a href="__APP__/Admin/JiajiaoInfo/admin_order" target="main">订单管理</a></td>
					    </tr>
					</table>
			  </td>
			</tr>
		</tbody>
	</table>
    <table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(3)"><img id="menuimg_3" src="Public/admin/images/menu_add.gif" border="0"/></a>&nbsp; 
		<a href="#" onClick="collapse_change(3)">人员管理</a></td>
      </tr>
      <tbody id="menu_3" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
              <tr >
                <td><a href="__APP__/Admin/TeachInfo/admin_member_teh" target="main">老师会员</a></td>
              </tr>
              <tr >
                <td><a href="__APP__/Admin/HuiyuanInfo/admin_member_stu" target="main">学生会员</a></td>
              </tr>
			  <?php if(($admin["ttedu_mquanxian"])  ==  "0"): ?><tr >
                <td><a href="__APP__/Admin/ManagerUsers/admin_manager" target="main">管理员管理</a></td>
              </tr><?php endif; ?>
          </table></td>
        </tr>
      </tbody>
    </table>
    <table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(4)"><img id="menuimg_4" src="Public/admin/images/menu_add.gif" border="0"/></a>&nbsp; 
		<a href="#" onClick="collapse_change(4)">审核管理</a></td>
      </tr>
      <tbody id="menu_4" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
              <tr >
                <td><a href="__APP__/Admin/TeachInfo/admin_audit_regist" target="main">注册审核</a></td>
              </tr>
              <tr >
                <td><a href="__APP__/Admin/TeachInfo/admin_audit_update" target="main">修改审核</a></td>
              </tr>
          </table></td>
        </tr>
      </tbody>
    </table>
    <table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(5)"><img id="menuimg_5" src="Public/admin/images/menu_add.gif" border="0"/></a>&nbsp;
		<a href="#" onClick="collapse_change(5)">社区管理</a></td>
      </tr>
      <tbody id="menu_5" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
              <tr >
                <td><a href="__APP__/Admin/bbs/admin_bbs_bankuai" target="main">板块管理</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/bbs/admin_bbs_tiezi" target="main">帖子管理</a></td>
              </tr>
			  <!--
			  <tr >
                <td><a href="__APP__/Admin/bbs/admin_bbs_huifu" target="main">回复管理</a></td>
              </tr>
			  -->
          </table></td>
        </tr>
      </tbody>
    </table>
	<?php if(($admin["ttedu_mquanxian"])  ==  "0"): ?><table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(6)"><img id="menuimg_6" src="Public/admin/images/menu_add.gif" border="0"/></a>&nbsp;
		<a href="#" onClick="collapse_change(6)">设置管理</a></td>
      </tr>
      <tbody id="menu_6" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
			  <tr >
                <td><a href="__APP__/Admin/SetAdmin/admin_set_jiben" target="main">基本设置</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/SetAdmin/admin_set_pay" target="main">支付接口设置</a></td>
              </tr>
              <tr >
                <td><a href="__APP__/Admin/SetAdmin/set_other_website_info" target="main">分站点设置</a></td>
              </tr>
          </table></td>
        </tr>
      </tbody>
    </table><?php endif; ?>
    <table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(7)"><img src="Public/admin/images/menu_add.gif" alt="" border="0" id="menuimg_7"/></a>&nbsp;
		<a href="#" onClick="collapse_change(7)">资源管理</a></td>
      </tr>
      <tbody id="menu_7" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
              <tr >
                <td><a href="__APP__/Admin/InfoDown/admin_sourse_type" target="main">资料类型管理</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/InfoDown/add_sourse" target="main">上传资料</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/InfoDown/admin_sourse" target="main">资料库管理</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/SpinfoDetail/admin_shipin_type" target="main">视频类型管理</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/SpinfoDetail/add_shipin" target="main">上传视频</a></td>
              </tr>
              <tr >
                <td><a href="__APP__/Admin/SpinfoDetail/admin_shipin"  target="main">视频库管理</a></td>
              </tr>
          </table></td>
        </tr>
      </tbody>
    </table>
	
	
    <table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(11)"><img src="Public/admin/images/menu_add.gif" alt="" border="0" id="menuimg_11"/></a>&nbsp;<a href="#" onClick="collapse_change(11)">新闻管理</a></td>
      </tr>
      <tbody id="menu_11" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
              <tr >
                <td><a href="__APP__/Admin/InfoDetail/add_info" target="main">添加新闻</a></td>
              </tr>
              <tr >
                <td><a href="__APP__/Admin/InfoDetail/info_list" target="main">新闻列表</a></td>
              </tr>
          </table></td>
        </tr>
      </tbody>
    </table>
    <table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
      <tr class="leftmenutext">
        <td><a href="#" onClick="collapse_change(10)"><img src="Public/admin/images/menu_add.gif" alt="" border="0" id="menuimg_10"/></a>&nbsp;<a href="#" onClick="collapse_change(10)">其它管理</a></td>
      </tr>
      <tbody id="menu_10" style="display:none">
        <tr class="leftmenutd">
          <td><table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
              <tr >
                <td><a href="__APP__/Admin/index/other_admin_ad" target="main">广告管理</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/index/other_admin_link" target="main">友情链接</a></td>
              </tr>
			  <tr >
                <td><a href="__APP__/Admin/index/other_admin_ly" target="main">留言建议</a></td>
              </tr>
          </table></td>
        </tr>
      </tbody>
    </table>
</div>
<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist">
	<tr class="leftmenutext">
		<td><div style="margin-left:38px;"><a href="__APP__/admin/login/logout" target="_parent">退出</a></div></td>
	</tr>
</table>
</body>
</html>