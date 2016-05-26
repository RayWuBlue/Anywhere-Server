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

<DIV class=zxtop>
<DIV class=PleftM>
<DIV class=rcur>
<P><STRONG>当前位置：</STRONG><A href="http://www.eduease.com/">首页</A> &gt; 查看 <?php echo ($teach_info["ttedu_id"]); ?> 
号教员信息 </P></DIV>
<TABLE class=mberTab cellSpacing=1 cellPadding=1>
  <TBODY>
  <TR>
    <TH colSpan=4><?php echo ($teach_info["ttedu_id"]); ?> 号教员基本信息 </TH></TR>
  <TR>
    <TD width="119" align=right><STRONG>教员编号：</STRONG></TD>
    <TD width="331" class=green><?php echo ($teach_info["ttedu_id"]); ?></TD>
    <TD width="117" align=right><STRONG>姓名：</STRONG></TD>
    <TD width="255" class=blue><?php echo (msubstr($teach_info["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师</TD>
  </TR>
  <TR>
    <TD align=right><STRONG>性别：</STRONG></TD>
    <TD><?php echo ($teach_info["ttedu_sex"]); ?></TD>
    <TD align=right><STRONG>籍贯：</STRONG></TD>
    <TD><?php echo ($teach_info["ttedu_jiguan"]); ?></TD></TR>
  <TR>
    <TD align=right><STRONG>出生年月：</STRONG></TD>
    <TD class=yel><?php echo ($teach_info["ttedu_birth"]); ?> </TD>
    <TD align=right><STRONG>高校：</STRONG></TD>
    <TD><STRONG>清华大学</STRONG></TD></TR>
  <TR>
    <TD align=right><STRONG>学历：</STRONG></TD>
    <TD><?php echo ($teach_info["ttedu_mqxueli"]); ?> </TD>
    <TD align=right><STRONG>目前身份：</STRONG></TD>
    <TD><?php echo ($teach_info["ttedu_mqshengfei"]); ?></TD></TR>
  <TR>
    <TD align=right><STRONG>专业：</STRONG></TD>
    <TD><?php echo ($teach_info["ttedu_zhuanye"]); ?></TD>
    <TD align=right><STRONG>住址：</STRONG></TD>
    <TD><?php echo ($teach_info["ttedu_address"]); ?></TD></TR>
  <TR>
    <TD align=right><STRONG>注册时间：</STRONG></TD>
    <TD class=yel><?php echo (date('Y-m-d H:i:s',$teach_info["ttedu_zhucedate"])); ?></TD>
    <TD align=right><STRONG>认证情况：</STRONG></TD>
    <TD>
	<?php if(($$teach_info["ttedu_shengheishifoutongguo"])  ==  "1"): ?>已通过审，<?php endif; ?>
	<?php if(($$teach_info["ttedu_shengheishifoutongguo"])  !=  "1"): ?>未通过审核<?php endif; ?></TD></TR>
  <TR>
    <TD align=right><STRONG>最近登陆时间：</STRONG></TD>
    <TD><?php echo (date('Y-m-d H:i:s',$teach_info["ttedu_logindate"])); ?></TD>
	<TD align=right><STRONG>教员星级：</STRONG></TD>
    <TD>
	<?php if(($teach_info["ttedu_shifoushengji"])  ==  "0"): ?>普通会员<?php endif; ?>
	<?php if(($teach_info["ttedu_shifoushengji"])  >  "0"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
	<?php if(($teach_info["ttedu_shifoushengji"])  >  "1"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
	<?php if(($teach_info["ttedu_shifoushengji"])  >  "2"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
	<?php if(($teach_info["ttedu_shifoushengji"])  >  "3"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
	<?php if(($teach_info["ttedu_shifoushengji"])  >  "4"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
	</TD></TR></TBODY></TABLE>
<DIV class=mberlx><A class=yyjy href="__APP__/YuyueTeachInfo/yuyue_teach_info/teachid/<?php echo ($teach_info["ttedu_id"]); ?>">在线预约该教员</A>
(为保护教员隐私，具体面谈时会向您提供全名及各种证件）<BR>预约中心电话：<STRONG><?php echo ($web_info["ttedu_tel"]); ?>
</STRONG>（工作时间：<SPAN class=blue>9:00－20:00</SPAN>）（预约时，请提供此教员的编号：<STRONG 
class=red><?php echo ($teach_info["ttedu_id"]); ?></STRONG> ）</DIV>
<TABLE class=mberTab cellSpacing=1 cellPadding=1>
  <TBODY>
  <TR>
    <TH colSpan=4>家教信息 </TH></TR>
  <TR>
    <TD width="17%" align=right><STRONG>可教授科目：</STRONG></TD>
    <TD class=nonutd colSpan=3><?php echo ($teach_info["ttedu_renjiaoxueke"]); ?></TD></TR>
  <TR>
    <TD align=right><STRONG>自我描述：</STRONG></TD>
    <TD colSpan=3><?php echo ($teach_info["ttedu_xiangxijieshao"]); ?></TD></TR>
  <TR>
    <TD align=right><STRONG>所获证书：</STRONG></TD>
    <TD colSpan=3><?php echo ($teach_info["ttedu_suohuozhengshu"]); ?></TD></TR>
  <TR>
    <TD align=right><STRONG>可授课区域：</STRONG></TD>
    <TD class=yel width="40%"><?php echo ($teach_info["ttedu_jiajiaodiqu"]); ?></TD>
    <TD width="14%" align=right><STRONG>可辅导方式：</STRONG></TD>
    <TD class=blue width="29%"><?php echo ($teach_info["ttedu_fudaofangshi"]); ?></TD></TR>
  
  <TR>
    <TD align=right><STRONG>薪水要求：</STRONG></TD>
    <TD colSpan=1><SPAN class=red><?php echo ($teach_info["ttedu_xingshuiyaoqiu"]); ?></SPAN> </TD>
	<TD width="14%" align=right><STRONG>授课对象：</STRONG></TD>
    <TD class=blue width="29%"><?php echo ($teach_info["ttedu_renjiaoduixiang"]); ?></TD></TR></TR></TBODY></TABLE>
<DIV class=mberlx><A class=yyjy href="__APP__/YuyueTeachInfo/yuyue_teach_info/teachid/<?php echo ($teach_info["ttedu_id"]); ?>">在线预约该教员</A> 
</DIV></TABLE>
<DIV class=tit01>
<DIV class=tit01TB1>
<H2>同类教员信息</H2><IMG src="Public/images/d10.gif"> </DIV>
<OL class=line02>
  <LI class=lin02bg><EM>姓名</EM><U>高校</U><U>专业</U><EM>学历</EM><EM>时间</EM></LI>
  
<?php if(is_array($teach_more)): $i = 0; $__LIST__ = $teach_more;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><EM><A href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>"><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师</A></EM><U> <?php echo ($vo["ttedu_biyexuexiao"]); ?> 
  </U><U><?php echo ($vo["ttedu_zhuanye"]); ?></U><EM><?php echo ($vo["ttedu_mqxueli"]); ?></EM><EM><?php echo (date('Y-m-d H:i:s',$vo["ttedu_zhucedate"])); ?></EM></LI><?php endforeach; endif; else: echo "" ;endif; ?>   
  
</OL></DIV></DIV>
<DIV class=tright>
<DIV class=tit01>
<DIV class=zxtit01T2>
<H2><IMG src="Public/images/d03.gif">本站搜索</H2></DIV>
<DIV>
<DIV class=s01>
<FORM method=post action="__APP__/index/mfsearch">
<input type="hidden" name="types" value="5" />
<INPUT class=seainpu 
onclick="this.value=''" value="信息标题" size=10 type=text name="titles"> 
<SELECT style="WIDTH: 95px" id=select3 class=input_text name="subject"> 
<OPTION selected 
  value="">所有文章</OPTION> <OPTION value=15>新闻动态</OPTION> <OPTION 
  value=17>助教公告</OPTION> <OPTION value=18>小学教育</OPTION> <OPTION 
  value=19>初中教育</OPTION> <OPTION value=20>高中教育</OPTION> <OPTION 
  value=21>中考咨询</OPTION> <OPTION value=22>高考咨询</OPTION> <OPTION 
  value=23>常见问题</OPTION> <OPTION value=24>心灵沟通</OPTION> <OPTION 
  value=25>好书推荐</OPTION> <OPTION value=26>家教之路</OPTION> <OPTION 
  value=27>其他咨询</OPTION> </SELECT> <SPAN 
class=seacbg1><INPUT id=imageField src="Public/images/but.gif" type=image 
name=imageField> </SPAN></FORM>
</DIV></DIV></DIV>
<DIV class=rightM1>
<DIV class=tit01T2><A href="__APP__/index/searchteach" >-更多-</A><IMG 
src="Public/images/d17.gif"> 
<H2>星级教员 </H2></DIV>
<UL class=tit01T2B>
  <LI><A id=t_1 class=tit01T2Bc onmouseover=x:Hover(1); 
  href="__APP__/index/searchteach/ttedu_renjiaoxueke/语文" >语文家教</A></LI>
  <LI><A id=t_2 onmouseover=i:Hover(2); 
  href="__APP__/index/searchteach/ttedu_renjiaoxueke/数学" >数学家教</A></LI>
  <LI><A id=t_3 onmouseover=i:Hover(3); 
  href="__APP__/index/searchteach/ttedu_renjiaoxueke/英语" >英语家教</A></LI></UL>
<OL style="DISPLAY: block" id=tbc1 class="line0r2 cle">

<?php if(is_array($yuwenjiaoshi)): $i = 0; $__LIST__ = $yuwenjiaoshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI class=line0r2bg><A href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师 
  <SPAN class=green>详细介绍</SPAN>
  <?php if(($vo["ttedu_shifoushengji"])  >  "0"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "1"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "2"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "3"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "4"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  </A></LI><?php endforeach; endif; else: echo "" ;endif; ?>
 
</OL>
<OL style="DISPLAY: none" id=tbc2 class="line0r2 cle">

<?php if(is_array($shuxuejiaoshi)): $i = 0; $__LIST__ = $shuxuejiaoshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI class=line0r2bg><A href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师 
  <SPAN class=green>详细介绍</SPAN>
  <?php if(($vo["ttedu_shifoushengji"])  >  "0"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "1"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "2"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "3"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "4"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  </A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
<OL style="DISPLAY: none" id=tbc3 class="line0r2 cle">

<?php if(is_array($yingyujiaoshi)): $i = 0; $__LIST__ = $yingyujiaoshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><LI><A href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师
  <SPAN class=green>详细介绍</SPAN>
  <?php if(($vo["ttedu_shifoushengji"])  >  "0"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "1"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "2"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "3"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  <?php if(($vo["ttedu_shifoushengji"])  >  "4"): ?><IMG src="Public/images/d18.gif"><?php endif; ?>
  </A></LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL></DIV>


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