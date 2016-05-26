<?php if (!defined('THINK_PATH')) exit();?><!--头部部分-->
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
<LINK rel=stylesheet type=text/css href="Public/css/EDUee.css">
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
<STYLE type=text/css>
@import url(Public/css/float.css );
</STYLE>




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
<DIV class=topTcB><EM><?php echo ($set_web_info["ttedu_website"]); ?></EM> <IMG 
src="Public/images/d14.gif">请家教热线：<?php echo ($set_web_info["ttedu_tel"]); ?></DIV></DIV>
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
</DIV><!--顶部结束，导航开始-->

<DIV  class=daobg01 >
 
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
<P style="margin-right:5px;">
<MARQUEE onmouseover=this.stop() onmouseout=this.start() behavior=alternate 
scrollAmount=3 
align="left">欢迎您光临助教网，感谢大家一直以来对助教网重庆家教的大力支持和关注！我们将竭诚为您提供更优质便捷的服务，打造重庆地区请家教,做家教,找家教的最佳平台，敬请致电：40003-40009</MARQUEE></P></DIV></DIV><!--[if !IE]>导航结束，主区开始<![endif]-->

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
<script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery.form.js"></script>
    
    <script language="JavaScript">
    <!--
    $(function(){
        $('#form1').ajaxForm({
            beforeSubmit:  checkForm,  // pre-submit callback
            success:       complete,  // post-submit callback
            dataType: 'json'
        });
        function checkForm(){
            if( '' == $.trim($('#newusername').val())){
                $('#result').html('用户名不能为空').show();
                return false;
            }
            //可以在此添加其它判断
        }
    function complete(data){
        if (data.status==1)
        {
            $('#result').html(data.info).show();
            // 更新列表
            data = data.data;
            var html =  '<div class="result" style=\'font-weight:normal;background:#A6FF4D\'><div style="border-bottom:1px dotted silver">'+data.title+'  ['+data.email+data.create_time+']</div><div class="content">'+data.content+'</div></div>';
            $('#list').prepend(html);
        }else{
            $('#result').html(data.info).show();
        }
    }

});
function checkTitle(){
    $.post('__URL__/checkuser',{'ttedu_username':$('#newusername').val()},function(data){
        $('#result').html(data.info).show();
    },'json');
} 
//-->
function checkpass()
 {
   var psslen=document.getElementById('newuserpassword').value.length;
   
     if(psslen<6)
	  {
	   //alert(document.getElementById('jieguo1').html);
	 // document.getElementById('jieguo1').innerText="密码长度小于了六位!";
	  $('#jieguo1').html('密码长度小于了六位!').show();
	 }
	 else if(psslen>10)
	 { 
	 
	 $('#jieguo1').html('密码长度大于于了十位!').show();
	 }
	 else  
	 { 
	 $('#jieguo1').html('密码长度适合!').show();
	 }
 }
   
    </script>


<DIV class="main  mainbg clearfix">
<DIV class=PleftM>
<DIV class=rcur>
<P><STRONG>当前位置：</STRONG><A href="__APP__/index/index">首页</A>&gt; <STRONG 
class=red>会员注册</STRONG></P></DIV>
<DIV class="tit01 clearfix">
<DIV class=Ptit01T1><IMG src="Public/images/d10.gif"> <SPAN 
class=tttext>会员注册</SPAN> </DIV>

<DIV class=loginb5>
<FIELDSET>
<FORM id=qingjiajiao onSubmit="return CheckValue(this)" name=qingjiajiao method=post action="__URL__/insert">
<DIV class=btbg2><IMG src="Public/images/d19.gif"><STRONG>请填写您的登录信息 </STRONG></DIV>
<DIV><LABEL for=confirm_password><STRONG class=red>*</STRONG>请输入新用户名</LABEL> 
<INPUT onBlur="checkTitle()" id=newusername class=zcinput 
onchange="checkTitle()" onkeyup="value=value.replace(/[\W]/g, '')"  maxLength=15 size=18 type=text name="ttedu_username"> 
<SPAN id=result class=zsbg>必须由英文字母或字母、数字组合组成</SPAN> </DIV>
<DIV><LABEL for=checkbox><STRONG class=red>*</STRONG>请输入您的密码</LABEL> <INPUT 
id=newuserpassword class=zcinput maxLength=15 size=18 type=password 
name="ttedu_password" onBlur="checkpass()"  onchange="checkpass()"> <SPAN class=zsbg id="jieguo1">请不少于六位、不超过十位</SPAN> </DIV>
<DIV><LABEL for=confirm_password><STRONG class=red>*</STRONG>请重复输入密码</LABEL> 
<INPUT id=re_newuserpassword class=zcinput maxLength=15 size=18 type=password 
name="ttedu_password2"> </DIV>

<DIV class=btbg2><IMG src="Public/images/d19.gif"><STRONG>请填写您的基本信息</STRONG></DIV>
<DIV><LABEL for=label>学生性别</LABEL>
<INPUT value="男" type="radio" name="ttedu_sex" > 男
<INPUT value="女" type="radio" name="ttedu_sex" > 女 </DIV>
<DIV><LABEL for=label>年龄</LABEL><input type="text" name="ttedu_old" class="zcinput" size="5" value=""/>&nbsp;岁</DIV>
<DIV><LABEL for=label>出生年月</LABEL> <INPUT id=way1 class=zcinput size=30 name="ttedu_birth"> </SPAN></DIV>

<DIV><LABEL for=checkbox>固定电话</LABEL> <INPUT id=contact_telephone class=zcinput 
maxLength=50 size=30 type=text name="ttedu_zuoji" value=""> </DIV>
<DIV><LABEL for=checkbox>移动电话</LABEL> <INPUT id=contact_mobile class=zcinput 
maxLength=50 size=30 type=text name="ttedu_shouji" value=""> </DIV>
<DIV><LABEL for=checkbox>QQ号码</LABEL> <INPUT id=contact_telephone class=zcinput 
maxLength=50 size=30 type=text name="ttedu_qq" value=""> </DIV>
<DIV><LABEL for=checkbox>email号码</LABEL> <INPUT id=contact_telephone class=zcinput 
maxLength=50 size=30 type=text name="ttedu_email" value=""> </DIV>



<DIV class=ac><INPUT style="CURSOR: pointer" class=butblue value="　确  定　" type=submit name=submit1>　 
<INPUT style="CURSOR: pointer" class=butblue value=　重　置　 type=reset name=reset1> 
</DIV></FORM></FIELDSET> </DIV></DIV></DIV><!--右区结束，左区开始-->



<DIV class=PrightM>
<DIV class=qqqjj>
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

  
  
</DIV><!--主区结束，底区开始--><!--友情链接-->





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