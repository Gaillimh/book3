<!-- �ұߵ��û���¼�����ԡ�ͶƱ -->
<div class="container-fluid">
<div class="row">
<div class="panel panel-default" >
<div class="row"  style="margin-bottom: 10px">
	<div class="col-xs-12 col-sm-12 col-md-12" style="margin:10px 0px 0px 10px">�û���¼</div>
</div>				
<script type="text/javascript">
	function login(){
		if(document.userLogin.userName.value==""){
				alert("�������û���");
				return(false);}
				if(document.userLogin.userPw.value==""){
	               alert("����������");
	             return(false);}
   			return(true);}
</script>
<?php
if($_SESSION['login']=="")
{
?>

<form action="login.php?act=login" name="userLogin" method="post" onSubmit="return login()">
<div class="row" >
	<div class="col-md-12" align="center" style="margin-bottom: 10px">
		<font>�û�����</font>
		<input  id="username" title="�û�������Ϊ��" size="14" name="userName" type="text" />
	</div>
</div>

<div class="row">
	<div class="col-md-12" align="center" style="margin-bottom: 10px">
		<font>�ܡ��룺</font>
		<input  title="���벻��Ϊ��" type="password" size="14" name="userPw"/>
	</div>
</div>
<div class="row">
	<div class="col-md-12" align="center" style="margin-bottom: 5%">
	  <input type="submit" value="��  ¼"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />	
	  <input type="button" value="ע  ��" onclick="javascript:location.href='reg.php'" style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />		
	</div>
</div>
		    </form>
<?php
							   }
						   else
						   {
							   ?>

		        <br/>
			    <div style="margin-left:20%"> ��ӭ����<font color="red" ><?php echo $_SESSION['login']?> &nbsp;&nbsp;&nbsp;&nbsp;</font>
			    <a href="./logout.php">��ȫ�˳�</a> &nbsp;&nbsp;&nbsp;&nbsp;</div>
			    <br/><br/><br/>

<?php
	}
	?>
		

	</div>	
</div>



<div class="row">
<div class="panel panel-default"  >
<div class="row">
	<div class="col-md-4" style="margin:10px 0px 0px 10px">ͼ�����</div>
	</div>
	<div class="row">
     <div class="col-md-12" style="margin:10px 0px 0px">
	     <table class="table">
<?php
	$sql="select * from categories where reid=0";
	$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result))
{
						?>
		          <tr>
		             <td height="28"  width="100%">
		                   <img src="./img/head-mark3.gif" align="middle" class="img-vm" border="0"/>
		                      <a href="./cat.php?dalei=<?php echo $data['id']?>">
		                         <span style="font-size:14px;color:red"><?php echo $data['name']?></span></a>->
<?php
	$sq="select * from categories where reid=".$data['id'];
$res=mysqli_query($conn,$sq);
while($d=mysqli_fetch_array($res))
echo  '<a href="./cat.php?xiaolei='.$d['id'].'">  <span style="font-size:14px;">'.$d['name'].'</span></a>&nbsp;';
						?>
		              </td>

		          </tr> <?php
							}
							?>
		 </table>
 </div>
</div>

		</div>			
</div>
			
				<div class="row">
					<div class="panel panel-default"  >
						<div class="row">
							<div class="col-md-12" style="margin:10px 0px 0px 0px">
							<font style="margin-left: 10px">��վ����</font>
							<a  style="float: right" href="./gonggao.php">����>></a></div>
						</div>
						
	<div class="row">
     <div class="col-md-12" style="margin:10px 0px 0px">
		<div style="overflow:hidden;height:180px;">
		 <table class="table">
<?php
			 $sql="select * from news order by id DESC limit 0,6";
			 $result=mysqli_query($conn,$sql);
			 while($data=mysqli_fetch_array($result)){
						?>
		        <tr><td height="28"  width="100%"><div  style="padding:2px 0px;"><div class="f-left"><img src="./img/head-mark3.gif" align="middle" border="0"/> <a href="./details.php?id=<?php echo $data['id']?>" title=""><span style=""><?php echo $data['title']?></span></a></div><div class="clear"></div></div></td></tr>
<?php
							}
							?>
		 </table>
						 </div>
</div>			</div>
				    </div>
	</div></div>