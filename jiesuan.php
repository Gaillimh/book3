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
//�����
$numa=$_GET['numa'];
$sql="update shu set shuliang=shuliang-$numa,cishu=cishu+$numa where id=".$_GET['ida'];  
mysqli_query($conn,$sql);

$xiadanren=$_SESSION['username'];
 $time=date("Y-m-j H:i:s");
 $zt="δ���κδ���";
 $total=$_SESSION['goodstotal'];
$sql="INSERT INTO orders(orderid,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,liuyan,time,xiadanren,zt,total) values('".$ordershao."','".$spc."','".$slc."','".$shouhuoren."','".$sex."','".$dz."','".$yb."','".$tel."','".$email."','".$shff."','".$zfff."','".$ly."','".$time."','".$_SESSION['login']."','".$zt."','".$total."')";

 $res=mysqli_query($conn,$sql);
 echo "<script language='javascript'>alert('����ɹ���');location.href='myOrder.php';</script>";
	   }
			?>
	</div> <script language="javascript">
		     function chkinput(form)
			 {
			   if(form.shouhuoren.value=="")
			    {
				  alert("�������ջ�������!");
				  form.shouhuoren.select();
				  return(false);

				}
				if(form.dz.value=="")
			    {
				  alert("�������ջ��˵�ַ!");
				  form.dz.select();
				  return(false);

				}
				if(form.yb.value=="")
			    {
				  alert("�������ջ����ʱ�!");
				  form.yb.select();
				  return(false);

				}
				if(form.tel.value=="")
			    {
				  alert("�������ջ�����ϵ�绰!");
				  form.tel.select();
				  return(false);

				}
				if(form.email.value=="")
			    {
				  alert("�������ջ���E-mail��ַ!");
				  form.email.select();
				  return(false);

				}
				if(form.email.value.indexOf("@")<0)
				 {
				    alert("�ջ���E-mail��ַ��ʽ�������!");
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
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="margin-bottom: 10px; float:left;color:#d14500;">�û�����</span></div>
				 </div>
				 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">�ջ���������</font></div>
				 	<div  class="col-md-5"><input align="left" type="text" class="form-control mr-sm-2"  name="shouhuoren" size="25"  ></div>
				 	<div class="col-md-2"><font style="float: right" size="+1">�Ա�</font></div>
				 	<div class="col-md-2">   
                      <select name="sex"  class="form-control mr-sm-2" >
                        <option selected value="��">��</option>
                        <option value="Ů">Ů</option>
                      </select></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px">
				 	<div class="col-md-3"><font style="float: right" size="+1">��ϸ��ַ��</font></div>
				 	<div  class="col-md-5"><input align="left" class="form-control mr-sm-2"  name="dz" type="text" id="dz"  size="25" ></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">�������룺</font></div>
				 	<div  class="col-md-5"><input align="left" class="form-control mr-sm-2"  name="yb" type="text" id="yb"  size="25"></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">��ϵ�绰��</font></div>
				 	<div  class="col-md-5"><input align="left"  class="form-control mr-sm-2" type="text" name="tel" size="25"  ></div>
				 </div>
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">�������䣺</font></div>
				 	<div  class="col-md-5"><input align="left"  class="form-control mr-sm-2" type="text" name="email" size="25"  ></div>
				 </div>	 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">�ͻ���ʽ��</font></div>
				 	<div  class="col-md-3">
                      <select name="shff" id="shff"  class="form-control mr-sm-2" >
                        <option selected value="��ͨƽ��">��ͨƽ��</option>
                        <option value="�ؿ�ר��">�ؿ�ר��</option>
                        <option value="�ͻ�����">�ͻ�����</option>
                        <option value="�����ͻ�">�����ͻ�</option>
                        <option value="E-mail">E-mail</option>
                      </select>
				 	</div>
				 </div> 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">֧����ʽ��</font></div>
				 	<div  class="col-md-3">
                      <select name="zfff" id="zfff"  class="form-control mr-sm-2" >
                        <option selected value="�������л��">�������л��</option>
                        <option value="��ͨ���л��">��ͨ���л��</option>
                        <option value="�ʾֻ��">�ʾֻ��</option>
                        <option value="����֧��">����֧��</option>
                      </select>
				 	</div>
				 </div>	
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-3"><font style="float: right" size="+1">�������ԣ�</font></div>
				 	<div  class="col-md-6"><textarea name="ly" class="form-control mr-sm-2" cols="60" rows="8" class="inputcss" ></textarea></div>
				 </div>		 
				 <div class="row" style="margin-bottom: 10px" >
				 	<div class="col-md-12" align="center"><input  name="submit2" type="submit" class="btn btn btn-primary my-2 my-sm-0" value="�ύ����"></div>
				 </div>          
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