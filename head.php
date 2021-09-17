<?php
session_start();
require("conn.php");
header("Content-type: text/html; charset=gb2312");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <title>在线图书销售系统</title>
	 <script src="jQuery/jquery.min-2.1.1.js"></script>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap-theme.css"> 
    <script src="./js/bootstrap.js"></script>

  </head>

  <body>
      <div class="container">
      	<div class="row">
       		<div class="col-md-12" align="center" style="padding:0;">
        		<center><img src="./img/banner.jpg" width="1170px" height="150"></center></div>
        </div>
        <div class="row">
        <div class="container">
        <div class="col-md-12" style="width: 1200px;margin:10px 0px 0px -30px;">
    <nav class="navbar navbar-inverse">
        <div id="nav1" class="collapse navbar-collapse">
           <div class="col-md-8">
            <ul class="nav navbar-nav">
                <li class="active"><A href="index.php" >网站首页</A></li>
                <li><A href="tuijian.php" >推荐图书</A></li>
                <li><A href="tejia.php">特价图书</A></li>
                <li><A href="new.php">最新图书</A></li>
                <li><A href="user.php">会员中心</A></li>
                <li><A href="myOrder.php">我的订单</A></li>
                <li><A href="guest.php">我要留言</A></li>
                <li><A href="cart.php">我的购物车</A></li>              
            </ul>
</div>
    <form id="searchForm" action="./search.php" method="post">
                 <div class="col-md-2" style="margin-top: 5px;">
					<input class="form-control mr-sm-2" type="search" placeholder="搜索" aria-label="Search" id="goodsName" size="16" onkeypress="if(event.keyCode==13){searchFormSubmit();return false;}" name="goodsName" />
                   </div>
<div class="col-md-2" style="margin-top: 5px;"><input  class="btn btn-outline-success my-2 my-sm-0" type="submit" value="搜索"></div>
            </form>
 <!--<div class="col-md-1">
            <a href="#" class="navbar-btn btn btn-sm btn-primary navbar-right">登陆</a>        </div>
           <a href="#" class="navbar-btn btn btn-sm btn-primary navbar-right">注册</a>-->
  
        </div>
    </nav>
</div>                     
                                        
            </div>
		</div>

		<div class="row" style="float: right">
			<div class="col-md-12" style="margin:10px 0px 20px 0px">
					<script>
						var day="";
						var month="";
						var ampm="";
						var ampmhour="";
						var myweekday="";
						var year="";
						mydate=new Date();
						myweekday=mydate.getDay();
						mymonth=mydate.getMonth()+1;
						myday= mydate.getDate();
						year= mydate.getFullYear();
						if(myweekday == 0)
						weekday=" 星期日 ";
						else if(myweekday == 1)
						weekday=" 星期一 ";
						else if(myweekday == 2)
						weekday=" 星期二 ";
						else if(myweekday == 3)
						weekday=" 星期三 ";
						else if(myweekday == 4)
						weekday=" 星期四 ";
						else if(myweekday == 5)
						weekday=" 星期五 ";
						else if(myweekday == 6)
						weekday=" 星期六 ";
						document.write(year+"年"+mymonth+"月"+myday+"日 "+weekday);
					</script>
	
			</div>
			</div>	 

	  </div>
		</form>
		
