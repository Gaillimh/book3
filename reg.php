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
	echo "<script>alert('ע��ɹ�');location.href='index.php';</script>";
	exit;
	}
	else
	{
	exit("ʧ����");
	}
	}

else
{
	echo "<SCRIPT LANGUAGE='JavaScript'>alert('ʧ��,�ʺ��Ѵ���');history.back();</SCRIPT>";
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
	 alert("�������ʺ�!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("������ע������!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("������ȷ������!");
	 form.p2.select();
	 return(false);
	 }
	if(form.p1.value.length<6)
	 {
	 alert("ע�����볤��Ӧ����6!");
	 form.p1.select();
	 return(false);
	 }
	if(form.p1.value!=form.p2.value)
	 {
	 alert("�������ظ����벻ͬ!");
	 form.p1.select();
	 return(false);
	 }
   if(form.email.value=="")
	{
	 alert("��������������ַ!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("��������ȷ�ĵ��������ַ!");
	 form.email.select();
	 return(false);
	 }
   if(form.tel.value=="")
	{
	 alert("��������ϵ�绰!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert("��������ʵ����!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("���������֤��!");
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
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">�û�ע��</span></div>
				 </div>
<form action="?act=save" name="f" method="post" onSubmit="return chkinput(this)">                    
<table class="table table-striped">
	<tbody>
		<tr>
			<td>�û��ʺţ�</td>
			<td><input type="text" name="usernc" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>�����룺</td>
			<td><input type="password" name="p1" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>ȷ�����룺</td>
			<td><input type="password" name="p2" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>��ʵ������</td>
			<td><input type="text" name="truename" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>���䣺</td>
			<td><input type="text" name="email" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>��ϵqq��</td>
			<td><input type="text" name="qq" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>�������룺</td>
			<td><input type="text" name="youbian" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>��ϵ�绰��</td>
			<td><input type="text" name="tel" size="25" class="form-control mr-sm-2"></td>
		</tr>
		<tr>
			<td>���֤�ţ�</td>
			<td><input type="text" name="sfzh" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr>
			<td>�ʼ�סַ��</td>
			<td><input type="text" name="dizhi" size="25" class="form-control mr-sm-2" ></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" value="ע �� �� ��"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></td>
		</tr>

	</tbody>
</table>
</form>
							
		      
	         </div></div>
	     <div class="col-md-4">
			<!--��ߵ� -->	<?php

			require("right.php");
			?>
				</div></div></div>
			<!-- �ұߵ� -->
<div class="row">
<div class="col-md-12" align="center">
<?php
require("footer.php");
?>	</div></div>
</div>