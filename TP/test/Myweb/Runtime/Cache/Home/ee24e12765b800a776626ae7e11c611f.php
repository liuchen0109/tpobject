<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>灵步网后台管理 管理员登录</title>
<link href="/tp/test/Public/css/global.css" type="text/css" rel="stylesheet" />
<link href="/tp/test/Public/css/admin.css" type="text/css" rel="stylesheet" />
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
 	 </div>
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li><a href="login.html">登录微博</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
              <li><a href="/tp/test/index.php/home/Index/index">返回主页</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
	</div>
    <!-- top部分结束 -->
    <!--中部文字导航-->
	<div id="menu">
      <table width="767" border="0" align="center">
        <tr>
          <td width="113"></td>
          <td width="123"></td>
          <td width="118"></td>
          <td width="122"></td>
        </tr>
      </table>
	</div>
    <div id="word">后台登录管理</div>
    <!--主体登录部分-->
	<div id="banner">
		 <form id="LoginForm" action="/tp/test/index.php/home/index/check" method="post">
     <table width="565" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="19"></td>
         <td width="188"></td>
         <td width="337"></td>
         <td width="21"></td>
       </tr>
       <tr>
         <td></td>
         <td class="ld">管理员账号</td>
         <td><input name="username" type="text" class="la" id="userId" /></td>
         <td></td>
       </tr>
       <tr>
         <td></td>
         <td class="ld">密码</td>
         <td><input name="password" type="password" class="la" id="passWord" /></td>
         <td></td>
       </tr>
       <tr>
         <td></td>
         <td class="ld"></td>
        <td class="button"><a href="">
           <input type="submit" value="登录" width="170" height="29">
         </a></td>
         
         <td></td>
       </tr>
     </table>
     </form>
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
</body>
</html>