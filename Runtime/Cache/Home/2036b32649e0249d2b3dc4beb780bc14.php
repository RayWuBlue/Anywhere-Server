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


<STYLE type=text/css>BODY {
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
	MARGIN: 0px 0px 0px -250px; WIDTH: 100%; FLOAT: left; OVERFLOW: hidden
}
#submain {
	MARGIN: 0px 0px 0px 255px; WIDTH: 86%
}
#side {
	TEXT-ALIGN: right; WIDTH: 250px; FLOAT: right; OVERFLOW: hidden
}
#pg {
	PADDING-BOTTOM: 20px; PADDING-LEFT: 0px; WIDTH: 94%; PADDING-RIGHT: 0px; FLOAT: right; OVERFLOW: hidden; PADDING-TOP: 20px
}
#send {
	PADDING-BOTTOM: 20px; PADDING-LEFT: 0px; WIDTH: 94%; PADDING-RIGHT: 0px; FLOAT: right; OVERFLOW: hidden; PADDING-TOP: 20px
}
#pg {
	PADDING-BOTTOM: 0px; FONT-SIZE: 14px
}
#ft {
	TEXT-ALIGN: center; PADDING-BOTTOM: 5px; BACKGROUND-COLOR: #e0e0e0; PADDING-LEFT: 5px; WIDTH: 100%; PADDING-RIGHT: 5px; CLEAR: both; PADDING-TOP: 5px
}
#p {
	WIDTH: 420px
}
.pl {
	PADDING-BOTTOM: 2px; PADDING-LEFT: 0px; WIDTH: 68px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 2px
}
.pr {
	PADDING-BOTTOM: 2px; PADDING-LEFT: 0px; WIDTH: 352px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 2px
}
.box {
	WIDTH: 100%
}
.lou {
	TEXT-ALIGN: center; MARGIN-TOP: 20px; WIDTH: 6%; FLOAT: left; COLOR: #0000ff; FONT-SIZE: 14px
}
.msg {
	MARGIN-TOP: 20px; WIDTH: 94%; FLOAT: left; FONT-SIZE: 14px; WORD-BREAK: break-all
}
.bt {
	COLOR: #0000ff; FONT-SIZE: 14px
}
.usr {
	BORDER-BOTTOM: gray 1px dashed; TEXT-ALIGN: right; PADDING-BOTTOM: 5px; MARGIN-TOP: 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-SIZE: 12px; PADDING-TOP: 5px
}
.usr SPAN {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; COLOR: gray; PADDING-TOP: 0px
}
</STYLE>


<DIV id=guide><A href="__URL__/index">社区首页</A> &gt; <?php echo ($shequ_info["ttedu_shequ_title"]); ?></DIV>
<DIV id=main>
<DIV id=submain>
<DIV class=box>
<DIV class=lou>楼主</DIV>
<DIV class=msg>
<DIV class=bt><?php echo ($shequ_info["ttedu_shequ_title"]); ?></DIV>

<div><?php echo ($shequ_info["ttedu_tiezi_content"]); ?></div>

<DIV class=usr>作者
<?php if(is_array($shequ_info['person'])): $i = 0; $__LIST__ = array_slice($shequ_info['person'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><?php if(($person["mid"])  ==  "1"): ?><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($person["id"]); ?>" style="color:#0000ff" target=_blank><?php echo ($person["name"]); ?>（<?php echo ($person["id"]); ?>）</a><?php endif; ?>
	<?php if(($person["mid"])  ==  "2"): ?><a href="__APP__/HuiyuanInfo/huiyuandetail/id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?>（<?php echo ($person["id"]); ?>）</a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
<SPAN><?php echo (date('Y-m-d H:i:s',$shequ_info["ttedu_fbdate"])); ?></SPAN>
</DIV></DIV></DIV>


<?php if(is_array($shequ_reply_info)): $k = 0; $__LIST__ = $shequ_reply_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shequ_reply_info): ++$k;$mod = ($k % 2 )?><DIV class=box>
<DIV class=lou><?php echo ($k); ?>楼</DIV>
<DIV class=msg><?php echo ($shequ_reply_info["ttedu_reply_content"]); ?>
<DIV class=usr>回复作者：
<?php if(($shequ_reply_info['person'])  ==  ""): ?>匿名
<?php else: ?>
	<?php if(is_array($shequ_reply_info['person'])): $i = 0; $__LIST__ = array_slice($shequ_reply_info['person'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><?php if(($person["mid"])  ==  "1"): ?><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($person["id"]); ?>" style="color:#0000ff" target=_blank><?php echo ($person["name"]); ?>（<?php echo ($person["id"]); ?>）</a><?php endif; ?>
		<?php if(($person["mid"])  ==  "2"): ?><a href="__APP__/HuiyuanInfo/huiyuandetail/id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?>（<?php echo ($person["id"]); ?>）</a><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?>
<SPAN><?php echo (date('Y-m-d H:i:s',$shequ_reply_info["ttedu_fbdate"])); ?></SPAN>
</DIV></DIV></DIV><?php endforeach; endif; else: echo "" ;endif; ?>


<DIV id=pg><?php echo ($page3); ?></DIV>
<DIV id=send>

<form action="__URL__/add_reply" method="post">
<input type="hidden" value="<?php echo ($shequ_info["ttedu_id"]); ?>" name="ttedu_info_id">
<?php if(($user)  ==  ""): ?><div style="margin-left:24px;">署名：&nbsp;&nbsp;匿名&nbsp;&nbsp;[<a href="#">登录</a>]</div>
<?php else: ?>
<div style="margin-left:24px;">署名：&nbsp;&nbsp;
	<?php if(is_array($user)): $i = 0; $__LIST__ = array_slice($user,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><span style="color:#0000ff"><?php echo ($person["name"]); ?></span>
		<input type="hidden" value="<?php echo ($person["id"]); ?>" name="ttedu_userid">
		<input type="hidden" value="<?php echo ($person["mid"]); ?>" name="ttedu_mid"><?php endforeach; endif; else: echo "" ;endif; ?>
</div><?php endif; ?>
<div>回复内容：</div>
<div style="margin-left:58px;"><textarea name="ttedu_reply_content" rows="5" cols="60"></textarea></div>
<div style="margin-left:90px; margin-top:20px;"><input type="submit" value="提交"></div>
</form>

</DIV></DIV></DIV>


<DIV id=side></DIV>
<DIV id=ft>助教·北京家教网 &copy;2003-2011</DIV>


</BODY></HTML>