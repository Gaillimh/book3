<html>
<?php
	header("Content-type: text/html; charset=gb2312");
	include("check_login.php");
	?>
	
<head>
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="jQuery/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body target="main" style="background: rgba(211,211,211,1.00)">


	<div id="wrapper" >
        <div class="overlay"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                       SISYPHE
                    </a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> 图书管理 <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">图书管理</li>
                    <li><a href='class.php' target='main'>图书分类管理</a></li>
                    <li><a href='chubanshe.php' target='main'>出版社管理</a></li>
                    <li><a href='shu_add.php' target='main'>添加图书</a></li>
                    <li><a href='shu.php' target='main'>图书管理</a></li>
                    <li><a href='shu_s.php' target='main'>图书查询</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> 会员管理 <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">会员管理</li>
					<li><a href='user.php' target='main'>注册会员管理</a></li>
                    <li><a href='user_s.php' target='main'>注册会员查询</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> 订单管理 <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">订单管理</li>
                    <li><a href='order.php' target='main'>订单处理</a></li>
                    <li><a href='order_s.php' target='main'>订单查询</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> 留言公告 <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">留言公告管理</li>
                    <li><a href='guest.php' target='main'>网站留言管理</a></li>
                    <li><a href='news_add.php' target='main'>新闻公告添加</a></li>
                    <li><a href='news.php' target='main'>新闻公告管理</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> 管理员管理 <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">管理员管理</li>
                    <li><a href='admin_add.php' target='main'>管理员添加</a></li>
                    <li><a href='admin.php' target='main'>管理员管理</a></li>
                    <li><a href='pwd.php' target='main'>修改密码</a></li>
                  </ul>
                </li>
            </ul>
        </nav>
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
			<div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">


	<script type="text/javascript">
		$(document).ready(function () {
		  var trigger = $('.hamburger'),
		      overlay = $('.overlay'),
		      isClosed = false;
		      trigger.click(function () {
		      hamburger_cross();      
		    });
		    function hamburger_cross() {

		      if (isClosed == true) {          
		        overlay.hide();
		        trigger.removeClass('is-open');
		        trigger.addClass('is-closed');
		        isClosed = false;
		      } else {   
		        overlay.show();
		        trigger.removeClass('is-closed');
		        trigger.addClass('is-open');
		        isClosed = true;
		      }
		  }
		  
		  $('[data-toggle="offcanvas"]').click(function () {
		        $('#wrapper').toggleClass('toggled');
		  });  
		});
	</script>
</body>
</html>