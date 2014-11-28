<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChenZiping's Homepage</title>
<link rel="stylesheet" href="css/cooker.css">
<link rel="stylesheet" href="css/docs.css">
<link rel="stylesheet" href="css/drawer.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/iscroll.js"></script>

<script src="js/prefixfree.min.js"></script>

<script src="js/jquery.drawer.min.js"></script>

<base target="_blank" />
</head>
<body class="drawer drawer-right">
<!-- 代码 开始 -->
<div class="drawer-toggle drawer-hamberger"><span></span></div>
<div class="drawer-main drawer-default">
  <nav class="drawer-nav" role="navigation">
    <div class="drawer-brand">
      <a href="http://chenziping_homepage.jd-app.com/404.php">Drawer</a>
    </div>
    <p class="drawer-nav-title">Demo</p>
    <ul class="drawer-nav-list">
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Left</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Right</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Responsive Left</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Responsive Right</a></li>
    </ul>
    <p class="drawer-nav-title">Other Projects</p>
    <ul class="drawer-nav-list">
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Animsition</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Chaffle</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Drawer</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Oblurlay</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Ripller</a></li>
    </ul>
    <p class="drawer-nav-title">Authtor:ChenZiping</p>
    <ul class="drawer-nav-list">
      <li><a href="http://weibo.com/u/3052352842">Weibo</a></li>
      <li><a href="https://twitter.com/ChenZiping">Twitter</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">GitHub</a></li>
      <li><a href="http://chenziping_homepage.jd-app.com/404.php">Dribbble</a></li>
    </ul>
  </nav>
</div>

<div class="drawer-overlay">
    <main class="masthead" role="main">
        <div class="container">
            <h1>ChenZiping 的主页</h1>
            <p class="lead">My First Homepage.</p>
            <p class="center-block form-inline" style="max-width:480px"><a class="button button-border button-lg js-trigger"><span class="oi oi-menu"></span>打开菜单</a></p>
        </div>
    </main>
	
    <div class="site-body">
      <div class="site-body-inner container">
            <div style="text-align:center;margin:50px 0">
			<Script Language="JavaScript"> 
			　　 var timedate= new Date("June 7,2015"); 
			　　 var times= "2015年高考"; 
			　　 var now = new Date(); 
			　　 var date = timedate.getTime() - now.getTime(); 
			　　 var time = Math.floor(date / (1000 * 60 * 60 * 24)); 
			　　 if (time >= 0) document.write("<p>现在离"+times+"还有: "+time +"天</p>");
			</Script>

			<?php
			$con=mysql_connect("10.0.16.16:4066","L16wOs03","6r29t5gtx673");
			mysql_query("set names 'utf8'");//编码转化
			if (!$con)
			  {
			  die("could not connect to the database:</br>".mysql_error());//诊断连接错误
			  }
			 // 从表中提取信息的sql语句 
			$strsql="select Count from Counter"; 
			//执行sql查询 
			mysql_select_db("heniping_mysql_ta52uy11",$con);
			$result=mysql_query($strsql);
			mysql_data_seek($result, 0); 
			$row=mysql_fetch_array($result);
			$visits=$row['Count']+1;
			echo "<p>感谢您的光临，当前访问量：".$visits."</p>";
			mysql_query("UPDATE Counter SET Count="."'".$visits."'");
			mysql_close($con);
			?>

			
			<p style="margin:20px 0"></p>
			
            </div>
      </div>
    </div>
	
</div><!-- /.drawer-overlay --> 

<script>
	$(document).ready(function(){
	$('.drawer').drawer();
	$('.js-trigger').click(function(){
	  $('.drawer').drawer("open");
	});
	});
</script> 

<script type="text/javascript">
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<!-- 代码 结束  -->
<div id="ftCon">
	<div id="ftConw">
		<div style="text-align:center;margin:50px 0">
			<p id="lh">
				<a href="javascript:void(0);" onclick="SetHome(this,'http://chenziping_homepage.jd-app.com/');">
					设为首页
				</a>
				<a href="javascript:void(0);" onclick="AddFavorite('陈子平的主页',location.href)">
					收藏本站
				</a>
				<a onmousedown="return ns_c({'fm':'behs','tab':'tj_about'})" href="http://chenziping_homepage.jd-app.com/404.php">
					关于ChenZiping
				</a>
			</p>
			<p id="cp">
				&copy;2014&nbsp;ChenZiping&nbsp;
			</p>
		</div>
	</div>
</div>

</body>
</html>
