<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
 
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE><?php echo ($set_web_info["ttedu_titlename"]); ?> | <?php echo ($web_title); ?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META name=keywords content="<?php echo ($set_web_info["ttedu_keyword"]); ?> | <?php echo ($web_title); ?>">
<META name=description content="<?php echo ($set_web_info["ttedu_description"]); ?> | <?php echo ($web_title); ?>">
<META name=author content=助教网>
<META name=copyright content=助教网> 
<STYLE type=text/css>
.dis {
	DISPLAY: block
}
.undis {
	DISPLAY: none
}
</STYLE>
<LINK rel=stylesheet type=text/css href="Public/member/css/EDUee.css">
<LINK rel=stylesheet type=text/css href="Public/member/css/float.css">
<LINK rel=stylesheet type=text/css href="Public/member/css/News.css">
<LINK rel=stylesheet type=text/css href="Public/member/css/ForcePic.css">
<SCRIPT language=javascript src="Public/member/js/ForcePic.js"></SCRIPT>

<SCRIPT language=javascript src="Public/member/js/forcelog.js"></SCRIPT>

<SCRIPT language=javascript src="Public/member/js/move_float.js"></SCRIPT>

<META name=GENERATOR content="MSHTML 8.00.6001.19088"></HEAD>
<BODY><!--[if !IE]>顶部开始<![endif]-->
<DIV class=topT>
<DIV class=topTl><A href="__APP__/index/index"><IMG src="Public/images/logobj.gif"></A> </DIV>
<DIV class=topTc>
<DIV class=topTcT>
<DIV class=topTcT_left>


<DIV id=bg></DIV>
<DIV class=hidden id=selectItem >
<DIV class="tit1 bgc_ccc move" onmousedown=drag(event,this)>
<H2 style="margin-right:270px; padding-left:8px;height:29px; line-height:29px; vertical-align:middle;color:#fff;" class=left>请选择城市</H2><SPAN class="pointer" style="height:29px; color:#fff;line-height:29px; vertical-align:middle;" onclick=openBg(0);openSelect(0);>[关闭]</SPAN> </DIV>
<DIV class="cont">

<div style="margin-left:10px;">
<?php if(is_array($SOWI)): $i = 0; $__LIST__ = $SOWI;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$SOWI): ++$i;$mod = ($i % 2 )?><p style="float:left; margin-left:8px; margin-top:5px;"><a href="<?php echo ($SOWI["ttedu_website"]); ?>" target="_blank"><?php echo ($SOWI["ttedu_webname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

</DIV>
<DIV class=cont>
<DIV id=selectSub></DIV>
</DIV>
</DIV>


当前城市：<STRONG style="COLOR: #000; FONT-SIZE: 14px; FONT-WEIGHT: bold">北京</STRONG> 
[<A class="bton pointer" onclick=openBg(1);openSelect(1);>切换其它城市</A>]　 <STRONG 
class=red>助教网-北京</STRONG> 
【<A class=green href="__APP__/BBS/index" target=_blank>助教社区</A>】 </DIV>
<DIV class=topTcT_right></DIV></DIV>
<DIV class=topTcB><EM>www.<I></I>intoot<I>.com</I></EM> <IMG 
src="Public/member/images/d14.gif">请家教热线：15086860120 </DIV></DIV>

<DIV class=topTr>

<?php if(($_SESSION['username'])  ==  ""): ?><A href="__APP__/index/index">登录</A> | 
<?php else: ?>
<div>
<span style="color:#0000ff"><?php echo ($_SESSION['username']); ?></span>&nbsp;您好！欢迎你回来！&nbsp;
<A href="__APP__/member/index" style="color:#00ff00">个人中心</A>&nbsp;
<A href="__APP__/Login/logout" style="color:#FF0000">退出登录</A>&nbsp;
</div><?php endif; ?>
<A class=red href="__APP__/TeachInfo/zuo_edu" >教员注册</A> &nbsp;
| <A class=red href="__APP__/HuiyuanInfo/xuesheng_zhuce" >学生注册</A>&nbsp;


<BR><A onClick="varstrHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.baidu.com');">
<IMG src="Public/member/images/d13.gif">设为首页</A>　
<A href="javascript:window.external.AddFavorite('http://');">
<IMG src="Public/member/images/d15.gif">收藏本站</A> </DIV></DIV>
<DIV class=hackbox></DIV><!--顶部结束，导航开始-->

<DIV  class=daobg01  >
 
<DIV id=t_3_3_1>&nbsp;</DIV>
 
<DIV id=t_3_3_2 class=t >
<UL><LI>
<A href="__APP__/index/index">首页</A></LI></UL></DIV>
 
<DIV id=t_3_3_3  >&nbsp;</DIV>
 
<DIV id=t_3_3_4 class=t style=" width:786px;" >
<UL>
  <LI><A href="__APP__/JiajiaoInfo/qing_edu">请家教</A></LI>
  <LI><A href="__APP__/JiajiaoInfo/edu_info">家教信息</A></LI>
  <LI><A href="__APP__/TeachInfo/tehlist">老师库</A></LI>
  <LI><A href="__APP__/TeachInfo/zuo_edu">做家教</A></LI>
  <LI><A href="__APP__/InfoDetail/edu_news">助教咨询</A></LI>
  <LI><A href="__APP__/InfoDown/downloadlist">资料下载</A></LI>
  <LI><A href="__APP__/SpinfoDetail/videolist">教学视频</A></LI></UL></DIV>
<DIV id=t_3_3_5></DIV>
 

</DIV>
  
 
  
  
<DIV class=daobg02>
<DIV><EM>助教播报</EM> 
<P style="margin-right:5px;"><SPAN id=demo></SPAN>
<MARQUEE onmouseover=this.stop() onmouseout=this.start() behavior=alternate 
scrollAmount=3 
align="left">欢迎您光临助教网，感谢大家一直以来对助教网重庆家教的大力支持和关注！我们将竭诚为您提供更优质便捷的服务，打造重庆地区请家教,做家教,找家教的最佳平台，敬请致电：40003-40009</MARQUEE></P></DIV></DIV><!--[if !IE]>导航结束，主区开始<![endif]-->


<SCRIPT language=javascript>
function daohang(d){
	for(i=1;i<=3;i++){
		var zdhx=document.getElementById("zdh"+i);
		if(i==d){
			zdhx.style.display="block";
		}else{
			zdhx.style.display="none";
		}
	}
}
</SCRIPT>

<?php if(($_SESSION['mid'])  ==  "1"): ?><DIV class="main ZXmainbg clearfix">
<DIV class=jyleft>
<DIV class=dh1 onClick="daohang(1);"><A>助教导航</A></DIV>
<DIV id="zdh1" style="display:block">
<A class=daolist href="__APP__/JiajiaoInfo/edu_info" target=_blank>最新学员需求</A> 
<A class=daolistc href="__URL__/xjjyjs" target="mainFrame">星级教员介绍</A> 
<!--<A class=daolist href="__URL__/sqjpjj" target="mainFrame">申请金牌家教</A>--> 
<A class=daolistc href="__URL__/tsjy" target="mainFrame">投诉建议</A> 
<A class=daolist href="__URL__/znxx" target="mainFrame">站内消息</A> </DIV>
<DIV class=dh2 onClick="daohang(2);"><A>我的助教</A></DIV>
<DIV id="zdh2" style="display:none">
<A class=daolist href="__URL__/ddjl" target="mainFrame">订单记录</A> 
<A class=daolistc href="__URL__/sfsh" target="mainFrame">身份审核</A>
<A class=daolist href="__URL__/gjhy" target="mainFrame">星级会员</A>
<A class=daolistc href="__URL__/lxjl" target="mainFrame">联系记录</A> 
<A class=daolist href="__URL__/jecz" target="mainFrame">金额充值</A>
<!--<A class=daolistc href="__URL__/jetx" target="mainFrame">金额提现</A>-->
</DIV>
<DIV class=dh3 onClick="daohang(3);"><A>个人操作</A></DIV>
<DIV id="zdh3" style="display:none">
<A class=daolist href="__URL__/xgmm" target="mainFrame">密码修改</A> 
<A class=daolistc href="__URL__/jlxg" target="mainFrame">简历修改</A>
<!--<A class=daolist href="__URL__/ztxg" target="mainFrame">状态修改</A>-->
<A class=daolistc href="__URL__/grzp" target="mainFrame">个人照片</A> 
<A class=daolist href="__URL__/zjzp" target="mainFrame">证件照片</A> 
<A class=daolistc href="__APP__/TeachInfo/tehdetail/id/<?php echo ($_SESSION['userid']); ?>" target=_blank>预览简历</A> </DIV>
<DIV class=dh1>
<DIV class=tl1><A 
href="__APP__/Login/logout">退出系统</A></DIV></DIV></DIV>

<DIV class=jyright>
<DIV class=jyt1><A href="__URL__/welcome" target="mainFrame"><IMG 
src="Public/member/images/d05.gif" width=10 height=11> 教员管理系统</A> </DIV>
<DIV class=nr>欢迎您<SPAN class=jyred> <?php echo ($member["ttedu_chenfu"]); ?> </SPAN>，您的教员编号是<SPAN class=jyred> 
 <?php echo ($member["ttedu_id"]); ?>  </SPAN>。<BR>为了保证您的个人资料不被窃取或修改，请务必在离开时退出并关闭浏览器窗口！</DIV></DIV>
<DIV class=jyxx>

<iframe src="__URL__/welcome" width="100%" height="350" frameborder="0" name="mainFrame" 
	onload="this.height=mainFrame.document.body.scrollHeight<350 ? 350: mainFrame.document.body.scrollHeight;"></iframe>

</DIV>
</DIV>

<?php else: ?>

<DIV class="main ZXmainbg clearfix">
<DIV class=jyleft>
<DIV class=dh1 onClick="daohang(1);"><A>助教导航</A></DIV>
<DIV id="zdh1" style="display:block">
<A class=daolist href="__APP__/TeachInfo/tehlist" target=_blank>专业教师库</A> 
<A class=daolistc href="__URL__/huiyuan_jjxx" target="mainFrame">我的家教信息</A> 
<A class=daolistc href="__URL__/huiyuan_wdyy" target="mainFrame">我的预约</A> 
<A class=daolist href="__URL__/huiyuan_znxx" target="mainFrame">联系记录</A>
 </DIV>
<DIV class=dh1>
<DIV class=tl1><A 
href="__APP__/Login/logout">退出系统</A></DIV></DIV></DIV>

<DIV class=jyright>
<DIV class=jyt1><A href="__URL__/welcome" target="mainFrame"><IMG 
src="Public/member/images/d05.gif" width=10 height=11> 学生会员中心</A> </DIV>
<DIV class=nr>欢迎您<SPAN class=jyred> <?php echo ($member["ttedu_username"]); ?> </SPAN>，您的会员编号是<SPAN class=jyred> 
 <?php echo ($member["ttedu_id"]); ?>  </SPAN>。<BR>为了保证您的个人资料不被窃取或修改，请务必在离开时退出并关闭浏览器窗口！</DIV></DIV>
<DIV class=jyxx>

<iframe src="__URL__/huiyuan_jjxx" width="100%" height="350" frameborder="0" name="mainFrame" 
	onload="this.height=mainFrame.document.body.scrollHeight<350 ? 350: mainFrame.document.body.scrollHeight;"></iframe>

</DIV>
</DIV><?php endif; ?>



<DIV></DIV>
<DIV></DIV><!--主区结束，底区开始--><!--友情链接-->





<DIV class=ljmain>
<DIV class=ljnr></DIV>
<DIV class=ljnr1>

</DIV>
<DIV class=ljnr>
<SPAN class=red>[友情链接]：</SPAN> 
<?php if(is_array($set_youqing)): $i = 0; $__LIST__ = $set_youqing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($vo["ttedu_website"]); ?>" title="<?php echo ($vo["ttedu_webname"]); ?>" target="_blank"><?php echo ($vo["ttedu_webname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</DIV>
</DIV><!--主区结束，底区开始-->



<DIV class=hackbox></DIV>
<DIV class=footer>


<P>联系电话： 40003-40009 传真：40003-40009 </P>
<P>公司总部地址：北京市江北区红星大厦26-1 </P>
</DIV>
<SCRIPT type=text/javascript charset=gb2312 src="images/msg.js"></SCRIPT>

<SCRIPT type=text/javascript>
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</SCRIPT>

<SCRIPT type=text/javascript>
try {
var pageTracker = _gat._getTracker("UA-770217-10");
pageTracker._trackPageview();
} catch(err) {}</SCRIPT>
</BODY></HTML>