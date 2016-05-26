<?php if (!defined('THINK_PATH')) exit();?> 
<!--头部部分-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE><?php echo ($set_web_info["ttedu_titlename"]); ?> | <?php echo ($web_title); ?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META name=keywords content="<?php echo ($set_web_info["ttedu_keyword"]); ?> | <?php echo ($web_title); ?>">
<META name=description content="<?php echo ($set_web_info["ttedu_description"]); ?> | <?php echo ($web_title); ?>">
<META name=author content=助教网>
<META name=copyright content=助教网> 
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META name=GENERATOR content="MSHTML 8.00.6001.19088"></HEAD>
<BODY>
<DIV id=hd>
<DIV class=logo><A href="__URL__/index"><IMG border=0 src="Public/images/l.gif" width=125 height=38></A></DIV>
<DIV class=sel>
<FORM id=sel method=post name=sel action="__URL__/search_info">
<INPUT size=50 name="ttedu_shequ_title">
<INPUT value="搜索帖子" type=submit name=Submit><br>&nbsp;</FORM></DIV>

<DIV class=login>

<?php if(($_SESSION['username'])  ==  ""): ?><A href="__APP__/index/index">登录</A> | 
<?php else: ?>
<div>
<span style="color:#0000ff"><?php echo ($_SESSION['username']); ?></span>&nbsp;您好！欢迎你回来！&nbsp;
<A href="__APP__/member/index" style="color:#00ff00">个人中心</A>&nbsp;
<A href="__APP__/Login/logout" style="color:#FF0000">退出登录</A>&nbsp;
</div><?php endif; ?>
<A class=red href="__APP__/TeachInfo/zuo_edu" >教员注册</A> &nbsp;
| <A class=red href="__APP__/HuiyuanInfo/xuesheng_zhuce" >学生注册</A>&nbsp;


<A href="__APP__/index/index">助教网首页</A>
</DIV></DIV>


<STYLE type=text/css>
BODY {
	TEXT-ALIGN: left; MARGIN: 0px; FONT: 400 12px/18px 宋体
}
FORM {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
P {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
UL {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
LI {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
IMG {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}
TD {
	LINE-HEIGHT: 18px; FONT-SIZE: 12px
}
TH {
	LINE-HEIGHT: 18px; FONT-SIZE: 12px
}
DIV {
	LINE-HEIGHT: 18px; FONT-SIZE: 12px
}
#hd {
	ZOOM: 1
}
#hd .logo {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 10px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 15px
}
#hd .sel {
	PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 15px
}
#hd .login {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 10px; FONT-FAMILY: Arial; FLOAT: right; PADDING-TOP: 5px
}
#guide {
	PADDING-BOTTOM: 5px; BACKGROUND-COLOR: #6a9cff; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; COLOR: #fff; CLEAR: both; PADDING-TOP: 8px
}
#guide A {
	COLOR: #fff; TEXT-DECORATION: none
}
#guide A:hover {
	TEXT-DECORATION: underline
}
#main {
	MARGIN: 0px 0px 0px -130px; WIDTH: 100%; FLOAT: left; OVERFLOW: hidden
}
#submain {
	MARGIN: 0px 0px 0px 150px; WIDTH: 100%
}
#side {
	TEXT-ALIGN: right; WIDTH: 250px; FLOAT: right; OVERFLOW: hidden
}
#ft {
	TEXT-ALIGN: center; PADDING-BOTTOM: 5px; BACKGROUND-COLOR: #e0e0e0; PADDING-LEFT: 5px; WIDTH: 100%; PADDING-RIGHT: 5px; CLEAR: both; PADDING-TOP: 5px
}
#tblist {
	TABLE-LAYOUT: fixed
}
#tblist TD {
	BORDER-BOTTOM: #e2e7f4 1px solid; PADDING-LEFT: 10px; WORD-BREAK: break-all
}
#tblist TR {
	HEIGHT: 36px
}
#tblist A {
	COLOR: #000; TEXT-DECORATION: none
}
#tblist A:hover {
	TEXT-DECORATION: underline
}
#tblist TD.t A {
	COLOR: #0000ff; FONT-SIZE: 14px
}
#tblist TD.t A:visited {
	COLOR: #800080
}
.rpcl {
	COLOR: red
}
</STYLE>


<DIV id=guide><A href="__URL__/index">社区首页</A></DIV>
<DIV id=main>
<DIV id=submain>
<TABLE id=tblist border=0 cellSpacing=0 cellPadding=0 width="100%">
  <TBODY>
  <TR bgColor=#eef1f9>
    <TD width="8%">帖子数</TD>
    <TD width="20%">版块名</TD>
    <TD width="20%">最后发帖</TD>
    <TD width="8%">回复数</TD>
	<TD width="20%">时间</TD>
    <TD width="20%">最后作者</TD></TR>
	
<?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shequ_zhuti): ++$i;$mod = ($i % 2 )?><?php if(($mod)  ==  "0"): ?><TR bgcolor="#eef1f9"><?php else: ?><TR bgcolor="#ffffff"><?php endif; ?>
    <TD><?php echo ($shequ_zhuti["counts"]); ?></TD>
    <TD><A href="__URL__/article_list/ttedu_zhuti_id/<?php echo ($shequ_zhuti["ttedu_id"]); ?>" target=_blank><B><FONT color=#e80c31><?php echo ($shequ_zhuti["ttedu_zhuti_topic"]); ?></FONT></B></A></TD>
    <TD>
	<?php if(is_array($shequ_zhuti['shequ_info'])): $i = 0; $__LIST__ = array_slice($shequ_zhuti['shequ_info'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shequ_info): ++$i;$mod = ($i % 2 )?><A href="__URL__/article/ttedu_id/<?php echo ($shequ_info["ttedu_id"]); ?>" target=_blank><?php echo ($shequ_info["ttedu_shequ_title"]); ?></A>
	<?php if(($shequ_info["ttedu_shifouretie"])  ==  "1"): ?>[<font color="#FF0000">热</font>]<?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
	</TD>
    <TD>
	<?php if(is_array($shequ_zhuti['shequ_info'])): $i = 0; $__LIST__ = array_slice($shequ_zhuti['shequ_info'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shequ_info): ++$i;$mod = ($i % 2 )?><?php echo ($shequ_info["counts"]); ?><?php endforeach; endif; else: echo "" ;endif; ?>
	</TD>
	<TD>
	<?php if(is_array($shequ_zhuti['shequ_info'])): $i = 0; $__LIST__ = array_slice($shequ_zhuti['shequ_info'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shequ_info): ++$i;$mod = ($i % 2 )?><?php echo (date('Y-m-d H:i:s',$shequ_info["ttedu_fbdate"])); ?><?php endforeach; endif; else: echo "" ;endif; ?>
	</TD>
    <TD>
	<?php if(is_array($shequ_zhuti['shequ_info'])): $i = 0; $__LIST__ = array_slice($shequ_zhuti['shequ_info'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shequ_info): ++$i;$mod = ($i % 2 )?><?php if(is_array($shequ_info['person'])): $i = 0; $__LIST__ = array_slice($shequ_info['person'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><?php if(($person["mid"])  ==  "1"): ?><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($person["id"]); ?>" style="color:#0000ff" target=_blank><?php echo ($person["name"]); ?>（<?php echo ($person["id"]); ?>）</a><?php endif; ?>
			<?php if(($person["mid"])  ==  "2"): ?><a href="__APP__/HuiyuanInfo/huiyuandetail/id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?>（<?php echo ($person["id"]); ?>）</a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
	</TD></TR><?php endforeach; endif; else: echo "" ;endif; ?>

	
</TBODY></TABLE></DIV></DIV>
	  
<DIV id=ft>助教·北京家教网﹫2011</DIV></BODY></HTML>