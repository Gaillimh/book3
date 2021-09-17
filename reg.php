      <div class="container">
      	<div class="row">
<?php
require("header.php");
if($act=="save")
{$dongjie=0;
$sql="select * from `user` where name='$usernc'";
$res=mysqli_query($conn,$sql);
if(!mysqli_num_rows($res))
	{
	$sql="insert into `user` (name,pwd,dongjie,email,sfzh,tel,qq,dizhi,youbian,truename) values ('$usernc','$p1','$dongjie','$email','$sfzh','$tel','$qq','$dizhi','$youbian','$truename')";
$res=mysqli_query($conn,$sql);
	if($res)
	{
	echo "<script>alert('注册成功');location.href='index.php';</script>";
	exit;
	}
	else
	{
	exit("失败了");
	}
	}

else
{
	echo "<SCRIPT LANGUAGE='JavaScript'>alert('失败,帐号已存在');history.back();</SCRIPT>";
	exit;
}
}
?>
 </div>
 <script language="javascript">
  function chkinput(form)
  {
    if(form.usernc.value=="")
	{
	 alert("请输入帐号!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("请输入注册密码!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("请输入确认密码!");
	 form.p2.select();
	 return(false);
	 }
	if(form.p1.value.length<6)
	 {
	 alert("注册密码长度应大于6!");
	 form.p1.select();
	 return(false);
	 }
	if(form.p1.value!=form.p2.value)
	 {
	 alert("密码与重复密码不同!");
	 form.p1.select();
	 return(false);
	 }
   if(form.email.value=="")
	{
	 alert("请输入电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("请输入正确的电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
   if(form.tel.value=="")
	{
	 alert("请输入联系电话!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert("请输入真实姓名!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("请输入身份证号!");
	 form.sfzh.select();
	 return(false);
	 }

   return(true);
  }
</script>
		<div class="container-fluid">
			<div class="row" >
		     <div class="col-md-8" >	
		    <div class="panel panel-default" style="margin:0px 0px 0px -15px">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">用户注册</span></div>
				 </div>
<form action="?act=save" name="f" method="post" onSubmit="return chkinput(this)">                    
<table class="table table-striped">
	<tbody>
		<tr>
			<td>用户帐号：</td>
			<td><input type="text" name="usernc" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>新密码：</td>
			<td><input type="password" name="p1" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>确认密码：</td>
			<td><input type="password" name="p2" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>真实姓名：</td>
			<td><input type="text" name="truename" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>邮箱：</td>
			<td><input type="text" name="email" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>联系qq：</td>
			<td><input type="text" name="qq" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>邮政编码：</td>
			<td><input type="text" name="youbian" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>联系电话：</td>
			<td><input type="text" name="tel" size="25" class="form-control mr-sm-2"></td>
		</tr>
		<tr>
			<td>身份证号：</td>
			<td><input type="text" name="sfzh" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>邮寄住址：</td>
			<td><input type="text" name="dizhi" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" value="注 册 提 交"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></td>
		</tr>

	</tbody>
</table>
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