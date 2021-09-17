<div class="container">
   <div class="row">
<?php
require("header.php");
if($act=="save")
{
$sql=mysqli_query($conn,"select * from user where name='".$_SESSION['username']."'");
$info=mysqli_fetch_array($sql);
$ordershao=date("YmjHis").$info['id'];
$spc=$_SESSION['goodslist'];
$slc= $_SESSION['goodsnum'];
//减库存
$numa=$_GET['numa'];
$sql="update shu set shuliang=shuliang-$numa,cishu=cishu+$numa where id=".$_GET['ida'];  
mysqli_query($conn,$sql);

$xiadanren=$_SESSION['username'];
 $time=date("Y-m-j H:i:s");
 $zt="未作任何处理";
 $total=$_SESSION['goodstotal'];
$sql="INSERT INTO orders(orderid,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,liuyan,time,xiadanren,zt,total) values('".$ordershao."','".$spc."','".$slc."','".$shouhuoren."','".$sex."','".$dz."','".$yb."','".$tel."','".$email."','".$shff."','".$zfff."','".$ly."','".$time."','".$_SESSION['login']."','".$zt."','".$total."')";

 $res=mysqli_query($conn,$sql);
 echo "<script language='javascript'>alert('购买成功！');location.href='myOrder.php';</script>";
	   }
			?>
	</div> <script language="javascript">
		     function chkinput(form)
			 {
			   if(form.shouhuoren.value=="")
			    {
				  alert("请输入收货人姓名!");
				  form.shouhuoren.select();
				  return(false);

				}
				if(form.dz.value=="")
			    {
				  alert("请输入收货人地址!");
				  form.dz.select();
				  return(false);

				}
				if(form.yb.value=="")
			    {
				  alert("请输入收货人邮编!");
				  form.yb.select();
				  return(false);

				}
				if(form.tel.value=="")
			    {
				  alert("请输入收货人联系电话!");
				  form.tel.select();
				  return(false);

				}
				if(form.email.value=="")
			    {
				  alert("请输入收货人E-mail地址!");
				  form.email.select();
				  return(false);

				}
				if(form.email.value.indexOf("@")<0)
				 {
				    alert("收货人E-mail地址格式输入错误!");
				    form.email.select();
				    return(false);

				 }
				return(true);

			 }

		   </script>
		   <div class="container-fluid">
  <form name="form1" method="post" action="?act=save" onSubmit="return chkinput(this)">
			<div class="row">
		     <div class="col-md-8">	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="margin-bottom: 10px; float:left;color:#d14500;">用户结算</span></div>
				 </div>
				 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">收货人姓名：</font></div>
				 	<div  class="col-md-5"><input align="left" type="text" class="form-control mr-sm-2"  name="shouhuoren" size="25"  ></div>
				 	<div class="col-md-2"><font style="float: right" size="+1">性别</font></div>
				 	<div class="col-md-2">   
                      <select name="sex"  class="form-control mr-sm-2" >
                        <option selected value="男">男</option>
                        <option value="女">女</option>
                      </select></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px">
				 	<div class="col-md-3"><font style="float: right" size="+1">详细地址：</font></div>
				 	<div  class="col-md-5"><input align="left" class="form-control mr-sm-2"  name="dz" type="text" id="dz"  size="25" ></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">邮政编码：</font></div>
				 	<div  class="col-md-5"><input align="left" class="form-control mr-sm-2"  name="yb" type="text" id="yb"  size="25"></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">联系电话：</font></div>
				 	<div  class="col-md-5"><input align="left"  class="form-control mr-sm-2" type="text" name="tel" size="25"  ></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">电子邮箱：</font></div>
				 	<div  class="col-md-5"><input align="left"  class="form-control mr-sm-2" type="text" name="email" size="25"  ></div>
				 </div>	 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">送货方式：</font></div>
				 	<div  class="col-md-3">
                      <select name="shff" id="shff"  class="form-control mr-sm-2" >
                        <option selected value="普通平邮">普通平邮</option>
                        <option value="特快专递">特快专递</option>
                        <option value="送货上门">送货上门</option>
                        <option value="个人送货">个人送货</option>
                        <option value="E-mail">E-mail</option>
                      </select>
				 	</div>
				 </div> 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">支付方式：</font></div>
				 	<div  class="col-md-3">
                      <select name="zfff" id="zfff"  class="form-control mr-sm-2" >
                        <option selected value="建设银行汇款">建设银行汇款</option>
                        <option value="交通银行汇款">交通银行汇款</option>
                        <option value="邮局汇款">邮局汇款</option>
                        <option value="网上支付">网上支付</option>
                      </select>
				 	</div>
				 </div>	
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">订单留言：</font></div>
				 	<div  class="col-md-6"><textarea name="ly" class="form-control mr-sm-2" cols="60" rows="8" class="inputcss" ></textarea></div>
				 </div>		 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-12" align="center"><input  name="submit2" type="submit" class="btn btn btn-primary my-2 my-sm-0" value="提交订单"></div>
				 </div>          
              </form>
	         </div></div>
	     <div class="col-md-4">
			<!--左边的 -->	<?php

			require("right.php");
			?>
	  </div></div></div>
			<!-- 右边的 -->
<div class="row">
<div class="col-md-12" align="center">
<?php
require("footer.php");
?>	</div></div>
</div>