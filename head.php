<?php
session_start();
require("conn.php");
header("Content-type: text/html; charset=gb2312");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <title>����ͼ������ϵͳ</title>
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
                <li class="active"><A href="index.php" >��վ��ҳ</A></li>
                <li><A href="tuijian.php" >�Ƽ�ͼ��</A></li>
                <li><A href="tejia.php">�ؼ�ͼ��</A></li>
                <li><A href="new.php">����ͼ��</A></li>
                <li><A href="user.php">��Ա����</A></li>
                <li><A href="myOrder.php">�ҵĶ���</A></li>
                <li><A href="guest.php">��Ҫ����</A></li>
                <li><A href="cart.php">�ҵĹ��ﳵ</A></li>              
            </ul>
</div>
    <form id="searchForm" action="./search.php" method="post">
                 <div class="col-md-2" style="margin-top: 5px;">
					<input class="form-control mr-sm-2" type="search" placeholder="����" aria-label="Search" id="goodsName" size="16" onkeypress="if(event.keyCode==13){searchFormSubmit();return false;}" name="goodsName" />
                   </div>
<div class="col-md-2" style="margin-top: 5px;"><input  class="btn btn-outline-success my-2 my-sm-0" type="submit" value="����"></div>
            </form>
 <!--<div class="col-md-1">
            <a href="#" class="navbar-btn btn btn-sm btn-primary navbar-right">��½</a>        </div>
           <a href="#" class="navbar-btn btn btn-sm btn-primary navbar-right">ע��</a>-->
  
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
						weekday=" ������ ";
						else if(myweekday == 1)
						weekday=" ����һ ";
						else if(myweekday == 2)
						weekday=" ���ڶ� ";
						else if(myweekday == 3)
						weekday=" ������ ";
						else if(myweekday == 4)
						weekday=" ������ ";
						else if(myweekday == 5)
						weekday=" ������ ";
						else if(myweekday == 6)
						weekday=" ������ ";
						document.write(year+"��"+mymonth+"��"+myday+"�� "+weekday);
					</script>
	
			</div>
			</div>	 

	  </div>
		</form>
		
