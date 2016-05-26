<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
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
<LINK rel=stylesheet type=text/css href="Public/css/EDUee2.css">
<LINK rel=stylesheet type=text/css href="Public/css/float.css">
<LINK rel=stylesheet type=text/css href="Public/css/ForcePic.css">
<SCRIPT language=javascript src="Public/js/ForcePic.js"></SCRIPT>

<SCRIPT language=javascript src="Public/js/forcelog.js"></SCRIPT>

<SCRIPT language=javascript src="Public/js/move_float.js"></SCRIPT>

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
<DIV class=topTcB><EM><?php echo ($set_web_info["ttedu_website"]); ?> </EM><IMG 
src="Public/images/d14.gif">请家教热线:<?php echo ($set_web_info["ttedu_tel"]); ?> </DIV></DIV>
<DIV class=topTr>

<?php if(($_SESSION['username'])  ==  ""): ?><A href="__APP__/index/index">登录</A> | 
<?php else: ?>
<div>
<span style="color:#0000ff"><?php echo ($_SESSION['username']); ?></span>&nbsp;您好！欢迎你回来！&nbsp;
<A href="__APP__/member/index" style="color:#00ff00">个人中心</A>&nbsp;
<A href="__APP__/Login/logout" style="color:#FF0000">退出登录</A>&nbsp;
</div><?php endif; ?>
<A class=red href="__APP__/TeachInfo/zhuce_teh" >教员注册</A> &nbsp;
| <A class=red href="__APP__/HuiyuanInfo/xuesheng_zhuce" >学生注册</A>&nbsp;



<BR><A onClick="varstrHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.baidu.com');">
<IMG src="Public/images/d13.gif">设为首页</A>　
<A href="javascript:window.external.AddFavorite('http://');">
<IMG src="Public/images/d15.gif">收藏本站</A> </DIV></DIV>
<DIV class=hackbox></DIV>

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
align="left">欢迎您光临易教网，感谢大家一直以来对易教网重庆家教的大力支持和关注！我们将竭诚为您提供更优质便捷的服务，打造重庆地区请家教,做家教,找家教的最佳平台，敬请致电：40003-40009</MARQUEE></P></DIV></DIV><!--[if !IE]>导航结束，主区开始<![endif]-->


<DIV  style="width:950px;">
<DIV>
<script type=text/javascript>
        <!--
        var focus_width=950//图片宽
        var focus_height=200//图片高
        var text_height=0//设置显示文字标题高度,最佳为20（如果不显示标题值设为0即可）
        var swf_height = focus_height+text_height
		
        var pics="<?php echo ($pics); ?>";
        var links="<?php echo ($links); ?>";
        var texts="<?php echo ($texts); ?>";
		pics=pics.substr(0,pics.length-1);
		links=links.substr(0,links.length-1);
		texts=texts.substr(0,texts.length-1);
		//var pics='Public/ad/1.jpg|Public/ad/2.jpg|Public/ad/3.jpg'
		//var links='#|#|#'
		//var texts='广告二|广告一|广告三'

        document.write('<object ID="focus_flash" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
        document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="Public/flash/adplay.swf"><param name="quality" value="high"><param name="bgcolor" value="#FFFFFF">');
        document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
        document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
        document.write('<embed ID="focus_flash" src="Public/flash/adplay.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#C5C5C5" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');document.write('</object>'); 
        //-->
</script>
 </DIV></DIV><!--[if !IE]>焦点图片切换开始<![endif]-->

<LINK rel=stylesheet type=text/css href="Public/css/neweduee.css">
<SCRIPT language=javascript> 
//all by www.qpsh.com
var currslid = 0;
var slidint;
function setfoc(id){
	document.getElementById("focpic").src = picarry[id];
	document.getElementById("foclnk").href = lnkarry[id];
	document.getElementById("fttltxt").innerHTML = '<a href="'+lnkarry[id]+'" target="_blank">'+ttlarry[id]+'</a>';
	currslid = id;
	for(i=0;i<4;i++){
	 document.getElementById("tmb"+i).className = "thubpic";
	};
	document.getElementById("tmb"+id).className ="thubpiccur";
	focpic.style.visibility = "hidden";
	focpic.filters[0].Apply();
	if (focpic.style.visibility == "visible") {
		focpic.style.visibility = "hidden";
		focpic.filters.revealTrans.transition=23;
	}
	else {
		focpic.style.visibility = "visible";
		focpic.filters[0].transition=23;
	}
	focpic.filters[0].Play();
	stopit();
}
 
function playnext(){
	if(currslid==3){
		currslid = 0;
	}
	else{
		currslid++;
	};
	setfoc(currslid);
	playit();
}
function playit(){
	slidint = setTimeout(playnext,4500);
}
function stopit(){
	clearTimeout(slidint);
	}
window.onload = function(){
	playit();
}
function g(o){return document.getElementById(o);}
function Hover(n){ 
//如果有N个标签,就将i<=N; 
for(var i=1;i<=3;i++)
{
	g('t_'+i).className='zxbg1';
	g('tbc'+i).style.display='none';
}
	g('tbc'+n).style.display='block';
	g('t_'+n).className='zxbg2'; 
}
</SCRIPT>


<DIV class=zxtop>
<DIV class=zxleft>
<DIV class=zxt02>
<H2><A href="__APP__/InfoDetail/infolist/ttedu_id/26">家<Br><Br><Br>教<Br><Br><Br>之<Br><Br><Br>路</A></H2></DIV>
<UL class=zxline01>

<?php if(is_array($jiajiaozhilu)): $i = 0; $__LIST__ = $jiajiaozhilu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</UL>
</DIV>

<DIV class=zxbr style="float:left; height:368px">
<IMG src="Public/images/4.jpg" width="210" height="118">
<DIV style="height:20px"></DIV>
<DIV class=zxt06x><A href="__APP__/InfoDetail/infolist/ttedu_id/15">-更多-</A> 
<H2>教育新闻动态</H2>
</DIV>
<OL class=line01>

<?php if(is_array($xinwendongtai)): $i = 0; $__LIST__ = $xinwendongtai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>
  
  
</OL></DIV>
  

<DIV class=zxmid style="height:180px;">
<DIV class=zxt01><A href="__APP__/InfoDetail/infolist/ttedu_id/17">-更多-</A> 
<H2 class=white>助教公告</H2>
</DIV>

<UL class=zxline>

<?php if(is_array($zhujiaogonggao)): $i = 0; $__LIST__ = $zhujiaogonggao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?><?php echo substr('123456789',0,4); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

  </UL></DIV>
<DIV>
<UL class=zxt03>
  <LI id=t_1 class=zxbg2 onmouseover=x:Hover(1);>
  <H2><A href="__APP__/InfoDetail/infolist/ttedu_id/18">小学教育</A></H2></LI>
  <LI id=t_2 class=zxbg1 onmouseover=i:Hover(2);>
  <H2><A href="__APP__/InfoDetail/infolist/ttedu_id/19">初中教育</A></H2></LI>
  <LI id=t_3 class=zxbg1 onmouseover=i:Hover(3);>
  <H2><A href="__APP__/InfoDetail/infolist/ttedu_id/20">高中教育</A></H2></LI></UL>
<OL style="DISPLAY: block" id=tbc1 class="zxl fl">

<?php if(is_array($xiaoxuejiaoyu)): $i = 0; $__LIST__ = $xiaoxuejiaoyu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<OL style="DISPLAY: none" id=tbc2 class="zxl fl">

<?php if(is_array($chuzhongjiaoyu)): $i = 0; $__LIST__ = $chuzhongjiaoyu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<OL style="DISPLAY: none" id=tbc3 class="zxl fl">

<?php if(is_array($gaozhongjiaoyu)): $i = 0; $__LIST__ = $gaozhongjiaoyu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL></DIV></DIV>
</DIV>
<DIV class=main><IMG src="Public/images/banner.jpg" width=949 
height=80></DIV>
<DIV class=main>
<DIV class=zxbl>
<DIV class=zxblt>
<DIV class=zxt04><A href="__APP__/InfoDetail/infolist/ttedu_id/21">-更多-</A> 
<H2>中考资讯</H2></DIV>
<OL class=line01>

<?php if(is_array($zhongkaozixun)): $i = 0; $__LIST__ = $zhongkaozixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<DIV class=Rtu><IMG src="Public/images/new_3.gif"></DIV></DIV>
<DIV class=zxt05><A href="__APP__/InfoDetail/infolist/ttedu_id/22">-更多-</A> 
<H2>高考资讯</H2></DIV>
<OL class=line01>

<?php if(is_array($gaokaozixun)): $i = 0; $__LIST__ = $gaokaozixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<DIV class=Rtu><IMG src="Public/images/new_4.gif"></DIV>
<DIV class=zxblt>
<DIV class=zxt04><A href="__APP__/InfoDetail/infolist/ttedu_id/23">-更多-</A> 
<H2>常见问题</H2>
</DIV>
<OL class=line01>

<?php if(is_array($changjianwenti)): $i = 0; $__LIST__ = $changjianwenti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<DIV class=Rtu><IMG src="Public/images/new_1.gif"></DIV></DIV>
<DIV class=zxt05><A href="__APP__/InfoDetail/infolist/ttedu_id/24">-更多-</A> 
<H2>心灵沟通</H2>
</DIV>
<OL class=line01>

<?php if(is_array($xinlingoutong)): $i = 0; $__LIST__ = $xinlingoutong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<DIV class=Rtu><IMG src="Public/images/new_2.gif"></DIV></DIV>
<DIV class=zxbr>
<DIV class=zxt06><A href="__APP__/InfoDetail/infolist/ttedu_id/25">-更多-</A> 
<H2>好书推荐</H2>
</DIV>
<OL class=line01>

<?php if(is_array($haoshutuijian)): $i = 0; $__LIST__ = $haoshutuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL></DIV>
</DIV><!--友情链接--><!--友情链接-->
<DIV class=ljmain>
<DIV class=ljnr></DIV>

<DIV class=ljnr></DIV></DIV><!--主区结束，底区开始-->

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