
<div class="container">
	<?php
		require("header.php");
		if($_SESSION['login']==""){
    		echo "<script>alert('请先登录');history.back();</script>";
			exit;
 		 }
  		if($act=="save"){
	  		if($pass!="")
	  			$sql="update `user` set email='$email',truename='$truename',sfzh='$sfzh',tel='$tel',qq='$qq',dizhi='$dizhi',youbian='$youbian',pwd='$pass' where name='$_SESSION[login]'";
			else
				$sql="update `user` set email='$email',truename='$truename',sfzh='$sfzh',tel='$tel',qq='$qq',dizhi='$dizhi',youbian='$youbian' where name='$_SESSION[login]'";
			mysqli_query($conn,$sql);
 		echo "<script language='javascript'>alert('修改成功！');location.href='user.php';</script>";
		}
	?>
	<script language="javascript">
		function chkinput1(form){
			if(form.email.value==""){
				alert("电子邮箱不能为空!");
				form.email.select();
				return(false);
			}
			if(form.email.value.indexOf('@')<0){
				alert("电子邮箱输入错误!");
				form.email.select();
				return(false);
			}
			if(form.truename.value==""){
				alert("真实姓名不能为空!");
				form.truename.select();
				return(false);
			}
			if(form.sfzh.value==""){
				alert("身份证号不能为空!");
				form.sfzh.select();
				return(false);
			}
			if(form.tel.value==""){
				alert("联系电话不能为空!");
				form.tel.select();
				return(false);
			}
			if(form.dizhi.value==""){
				alert("联系地址不能为空!");
				form.dizhi.select();
				return(false);
			}
			return(true);
		}
	</script>
<div class="container-fluid">		
	<div class="row" >
		<div class="col-md-8" >	
			<div class="panel panel-default">		
		     	<div class="row">
		     		<div class="col-md-12" style="margin:10px 0px 0px 10px;"><span style="float:left;color:#d14500;">会员中心</span></div>
				 </div>
			<form name="form1" method="post" action="?act=save" onsubmit="return chkinput1(this)">
                     
<table class="table table-striped">
       <?php
		$sql="select * from user where name='".$_SESSION['login']."'";
		   $res=mysqli_query($conn,$sql);
		   $info=mysqli_fetch_array($res);
		  ?>
	<tbody>
		<tr>
			<td>昵称：</td>
			<td><?php echo $_SESSION['login'];?></td>
		</tr>
		<tr>
			<td>新密码：</td>
			<td><input type="password" name="pass" size="25"   class="form-control mr-sm-2"  ></td>
		</tr>
		<tr>
			<td>真实姓名：</td>
			<td><input type="text" name="truename" size="25"  class="form-control mr-sm-2" value="<?php echo $info['truename'];?>"></td>
		</tr>
		<tr>
			<td>E-mail：</td>
			<td><input type="text" name="email" size="25"   class="form-control mr-sm-2"  value="<?php echo $info['email'];?>"></td>
		</tr>
		<tr>
			<td>QQ号码：</td>
			<td><input type="text" name="qq" size="25"   class="form-control mr-sm-2"  value="<?php echo $info['qq'];?>"></td>
		</tr>
		<tr>
			<td>联系电话：</td>
			<td><input type="text" name="tel" size="25"   class="form-control mr-sm-2"  value="<?php echo $info['tel'];?>"></td>
		</tr>
		<tr>
			<td>家庭住址：</td>
			<td><input type="text" name="dizhi" size="25"   class="form-control mr-sm-2" value="<?php echo $info['dizhi'];?>"></td>
		</tr>
		<tr>
			<td>邮政编码：</td>
			<td><input type="text" name="youbian" size="25"   class="form-control mr-sm-2"  value="<?php echo $info['youbian'];?>"></td>
		</tr>
		<tr>
			<td>身份证号：</td>
			<td><input type="text" name="sfzh" size="25"   class="form-control mr-sm-2" value="<?php echo $info['sfzh'];?>"></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input name="submit2" type="submit" value="修改帐号"></td>
		</tr>
	</tbody>
</table>          
   			</div>
   		</div>
		<div class="col-md-4">
			<!--左边的 -->	<?php

			require("right.php");
			?>
		</div></div>
			<!-- 右边的 -->
		<div class="row">
		<div class="col-md-12" align="center">
			<?php
			require("footer.php");
			?>	</div></div>
	</div></div>