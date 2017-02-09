<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>灵步网后台 用户管理</title>
<link href="/tp/test/Public/css/global.css" type="text/css" rel="stylesheet" />
<link href="/tp/test/Public/css/Customer.css" type="text/css" rel="stylesheet" />
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
    <!--文字导航部分-->
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
    <!--主体部分-->
    <div id="banner">
    <form>
      <table width="765" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="98">编号</td>
          <td width="40">&nbsp;</td>
          <td width="112">用户名称</td>
          <td width="170">备注</td>
          <td width="61">人气等级</td>
          <td width="86">删除</td>
          <td width="86">黑名单</td>
          <td width="94">重置</td>
        </tr>
        <tr>
          <td>1</td>
          <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
          <td>新浪传媒</td>
          <td><input name="textfield" type="text" id="textfield" size="15" /></td>
          <td><select name="select" id="select">
            <option value=" " selected="selected"> </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select></td>
          <td><input type="submit" name="button" id="button" value="删除" /></td>
          <td><input type="submit" name="button9" id="button9" value="拉入黑名单" /></td>
          <td><input type="submit" name="button17" id="button17" value="重置" /></td>
        </tr>
        <tr>
          <td>2</td>
          <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
          <td>齐鲁晚报</td>
          <td><input name="textfield2" type="text" id="textfield2" size="15" /></td>
          <td><select name="select2" id="select2">
            <option value=" " selected="selected"> </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select></td>
          <td><input type="submit" name="button2" id="button2" value="删除" /></td>
          <td><input type="submit" name="button10" id="button10" value="拉入黑名单" /></td>
          <td><input type="submit" name="button18" id="button18" value="重置" /></td>
        </tr>
        <tr>
          <td>3</td>
          <td><input type="checkbox" name="checkbox3" id="checkbox3" /></td>
          <td>李承鹏</td>
          <td><input name="textfield3" type="text" id="textfield3" size="15" /></td>
          <td><select name="select3" id="select3">
            <option value=" " selected="selected"> </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select></td>
          <td><input type="submit" name="button3" id="button3" value="删除" /></td>
          <td><input type="submit" name="button11" id="button11" value="拉入黑名单" /></td>
          <td><input type="submit" name="button19" id="button19" value="重置" /></td>
        </tr>
      </table>
      </form>
    </div>
  <!--banner 按钮部分--> 
  <div id="banner_input">
  <form>
  <table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="233" align="right"><input type="checkbox" name="checkbox9" id="checkbox9" />
        全选</td>
      <td width="299" align="center"><input type="submit" name="button25" id="button25" value="保存" /></td>
      <td width="233"><input type="submit" name="button26" id="button26" value="提交" /></td>
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