<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
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




<DIV class="main  mainbg clearfix">
<DIV class=PleftM>
<DIV class=rcur>
<P><STRONG>当前位置：</STRONG><A href="http://www.intoot.com">首页</A>&gt; <STRONG 
class=red>重庆地区做家教</STRONG>&gt; 新教员必读</P></DIV>
<DIV class=tit01>
<DIV class=Ptit01T1><IMG src="Public/images/d10.gif"> 
<H2>新教员必读</H2></DIV>
<DIV id=cont1>
<DIV class=qlclj><A 
href="__URL__/zhuce_teh"><STRONG>现在就免费注册&gt;&gt;&gt;</STRONG></A></DIV>
<DIV class=qlcwenzi><SPAN 
class=qlcbt1><STRONG>一、优势</STRONG></SPAN><BR>1、助教网所属的公司是经工商局批准并登记注册的正规合法机构。<BR>2、拥有一个功能强大的信息处理网站平台，是一家完全实现家教电子商务管理的网站。<BR>3、具有完善健全的服务体系和严格的认证体系，所有教员必须通过认证，所有学员必须通过严格核实。<BR>4、助教网拥有来自重庆大学、西南师范大学、西南政法大学、重庆师范大学、重庆邮电大学、重庆工商大学、重庆理工大学、重庆医科大学、第三军医大学等全国重点大学，有着丰富家教经验的在校大学生、研究生和专业教师，还有社会上拥有资深家教经验和高素质高学历的在校教师或其它人员，是值得信赖的家教专业服务机构。<BR><SPAN 
class=qlcbt1><STRONG>二、特色</STRONG></SPAN><BR>1、透明度：教员可以在网上看到完整的家教信息（学员情况、上课地点、上课时间、对教员要求等）。<BR>2、及时性：即使教员上次的家教不成功也可以在七日内很快找到新的信息。<BR>3、服务诚信：教员可以在确定拿到家教信息后才交费，不会要求教员必需先交钱等待通知。<BR>4、信息可靠：助教网有专门的工作人员对每一条学员信息进行核实，确保信息真实有效。<BR>5、教员等级制度:对家长反馈好的，有经验成功率高的教员，助教网将优先给予推荐。<BR><SPAN 
class=qlcbt1><STRONG>三、<EM>做家教</EM>流程</STRONG></SPAN><BR></DIV>
<P align=center><IMG alt=做家教 src="Public/images/jylc.jpg"></P>
<DIV class=qlcwenzi><SPAN class=qlcbt1><STRONG>四、 
<EM>做家教</EM>注意事项</STRONG></SPAN><BR>1、教员注册：免费注册，须填写详细的个人资料。经过确认后，您的信息才会在网站上显示。<BR>2、教员认证：须带1寸相片两张、学生证、身份证。认证后发给教员易教家教认证卡。<BR>3、推荐学员：安排学员、签订协议、介绍信、收费与开收据为一步完成。<BR>4、教员权利：如教员没有与学员达成家教协议，我们将在一个月内为教员找到其它合适学员，如一个月内仍未找到合适信息，我公司将予以退费。<BR>5、教员义务：如连续多次因本人原因被家长投诉与拒绝接受家教服务，我公司将取消其会员资格且不承担任何责任并不予以退费。<BR>6、上门家教：教员前往学员处试讲时，应携带学生证、身份证、教员认证卡、介绍信及收据，并主动向学员出示。无论其成功与否，都要与家长或学员签订协议及收取费用。<BR>7、银行缴费：认证教员可通过网络银行直接汇款到指定账户，由助教网查收后提供学员信息，学员的会员服务指南由助教网统一邮寄。 
<BR></DIV>
<DIV class=qlcwenzi>
<DIV class=qlclj><A 
href="__URL__/zhuce_teh"><STRONG>现在就免费成为教员&gt;&gt;&gt;</STRONG></A></DIV></DIV></DIV></DIV></DIV><!--中部左区结束，右区开始-->


<DIV class=PrightM>
<DIV class=qqqjj1>
<H3>1027405904</H3></DIV>


<DIV class=tit01>
<DIV class=tit01T2><A 
href="__APP__/InfoDetail/infolist/ttedu_id/17" >-更多-</A><IMG 
src="Public/images/d10.gif"> 
<H2>助教公告</H2></DIV>
<OL class=line01>
  
<?php if(is_array($r_zhujiaogonggao)): $i = 0; $__LIST__ = $r_zhujiaogonggao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL></DIV>
<DIV class=tit01>
<DIV class=tit01T2><A 
href="__APP__/InfoDetail/infolist/ttedu_id/23" >-更多-</A><IMG 
src="Public/images/d10.gif"> 
<H2>常见问题</H2></DIV>
<OL class=line01>
   
<?php if(is_array($r_changjianwenti)): $i = 0; $__LIST__ = $r_changjianwenti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL></DIV>
<DIV class=tit01>
<DIV class=tit01T2><A 
href="__APP__/InfoDetail/infolist/ttedu_id/25" >-更多-</A><IMG 
src="Public/images/d10.gif"> 
<H2>好书推荐</H2></DIV>
<OL class=line01>
  
<?php if(is_array($r_haoshutuijian)): $i = 0; $__LIST__ = $r_haoshutuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
</DIV></DIV>



</DIV>


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