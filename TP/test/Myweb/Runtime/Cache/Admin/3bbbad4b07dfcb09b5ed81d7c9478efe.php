<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>灵步网后台 内容管理</title>
<link href="/tp/test/Public/css/global.css" type="text/css" rel="stylesheet" />
<link href="/tp/test/Public/css/content_2.css" type="text/css" rel="stylesheet" />
</head>

<body>
<!--页面整体-->
<div id="container">
<!-- top部分DIV -->
	<div id="top">
    	<!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco">
           	  <img src="/tp/test/Public/images/avatar1.png" width="72" height="72" alt="" />
            </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord">
       	    	<img src="/tp/test/Public/images/LBWB2.gif" width="128" height="60" alt="" />
            </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li><a href="#"><?php echo ($_SESSION['username']); ?>欢迎您</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
              <li><a href="/tp/test/index.php/admin/Login/logout">退出系统</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
	</div>
    <!-- top部分结束 -->
    <div id="menu">
      <table width="767" border="0" align="center">
       <tr>
          <td width="113"><a href="Customer.html">用户管理</a></td>
          <td width="123"><a href="content.html">关键字管理</a></td>
          <td width="118"><a href="content_2.html">内容管理</a></td>
          <td width="122"><a href="notice.html">微博公告</a></td>
        </tr>
      </table>
    </div>
    <!--页面主体-->
    <div id="banner">	
	  <table width="765" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		    <td>
		      <table width="765" border="1" cellpadding="0" cellspacing="0" class="banner_table">
		        <tr>
		          <td width="43">&nbsp;</td>
		          <td width="98">用户</td>
		          <td width="271">用户已发送内容</td>
		          <td width="76">删除</td>
		          <td width="170">警告</td>
		          <td width="93">&nbsp;</td>
	            </tr>
		        <tr>
		          <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
		          <td>新浪微博</td>
		          <td><textarea name="textarea" cols="30" rows="5" readonly="readonly" id="textarea">这是个过期的新鲜事</textarea></td>
		          <td><input type="reset" name="button2" id="button2" value="删除" /></td>
		          <td><input type="text" name="textfield2" id="textfield2" /></td>
		          <td><input type="submit" name="button3" id="button3" value="发送" /></td>
	            </tr>
                <tr>
		          <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
		          <td>李承鹏</td>
		          <td><textarea name="textarea" cols="30" rows="5" readonly="readonly" id="textarea">这是个过期的新鲜事</textarea></td>
		          <td><input type="reset" name="button2" id="button2" value="删除" /></td>
		          <td><input type="text" name="textfield2" id="textfield2" /></td>
		          <td><input type="submit" name="button3" id="button3" value="发送" /></td>
	            </tr>
                <tr>
		          <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
		          <td>平安太原</td>
		          <td><textarea name="textarea" cols="30" rows="5" readonly="readonly" id="textarea">这是个过期的新鲜事</textarea></td>
		          <td><input type="reset" name="button2" id="button2" value="删除" /></td>
		          <td><input type="text" name="textfield2" id="textfield2" /></td>
		          <td><input type="submit" name="button3" id="button3" value="发送" /></td>
	            </tr>
                <tr>
		          <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
		          <td>佳彤</td>
		          <td><textarea name="textarea" cols="30" rows="5" readonly="readonly" id="textarea">这是个过期的新鲜事</textarea></td>
		          <td><input type="reset" name="button2" id="button2" value="删除" /></td>
		          <td><input type="text" name="textfield2" id="textfield2" /></td>
		          <td><input type="submit" name="button3" id="button3" value="发送" /></td>
	            </tr>
            </table>
              <div class="banner_button">
		      <form id="form1" name="form1" method="post" action="">
		        <input name="button" type="submit" id="button" value="提  交" />
            </form></div></td>
	    </tr>
	  </table>
    </div>
   <!-- footer部分 -->
    <div id="footer">
       <!--footer网站链接部分--> 
      <div id="footerLink">
          <ul>
              <li><a href="#">灵步网介绍</a></li>
                <li><a href="#">广告服务</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">诚征英才</a></li>
                <li><a href="#">保护隐私权</a></li>
                <li><a href="#">免责条款</a></li>
                <li><a href="#">法律顾问</a></li>
                <li><a href="#">意见反馈</a></li>
            </ul>
        </div>
        <!-- footer网站链接部分结束--> 
         <!--footer网站版权信息--> 
        <div id="footerCopy">
          Copyright&copy;2011-2012 灵步小组 版权所有
        </div>
         <!--footer网站版权信息结束--> 
    </div>
     <!--footer部分结束-->  
</div> 
</body>
</html>