<div class="container-fluid"><div class="container">
 <div class="row">
      	<?php
require("header.php");
$sql="select * from orders where orderid ='$orderid'";
 $res=mysqli_query($conn,$sql);
  $info=mysqli_fetch_array($res);
  $spc=$info['spc'];
  $slc=$info['slc'];
  $arraysp=explode("@",$spc);
  $arraysl=explode("@",$slc);

	 ?></div>
			<div class="row" >
		     <div class="col-md-8">	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 20px 10px"><span style="float:left;color:#d14500;">�鿴����</span></div>
				 </div>	 
	<div class="row">
		<div class="col-md-12" style="margin-left: 10%" >
			<div align="left"><h5>�����ţ�<?php echo $orderid;?></h5></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="margin-left: 10%">
			<div align="left" ><h5>ͼ���б�(����)��</h5></div>
		</div>
	</div>
<div class="row">
<div class="col-md-2">
	<div></div>
</div>
<div class="col-md-8">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ͼ������</th>
			<th>�г���</th>
			<th>��Ա��</th>
			<th>����</th>
			<th>С��</th>
		</tr>
	</thead>
	<tbody>
	  <?php
	  $total=0;
	  for($i=0;$i<count($arraysp)-1;$i++){
		 if($arraysp[$i]!=""){
	     $sql1=mysqli_query($conn,"select * from shu where id='".$arraysp[$i]."'");
	     $info1=mysqli_fetch_array($sql1);
		 $total=$total+=$arraysl[$i]*$info1['huiyuanjia'];
	  ?>
	  <tr >
        <td ><?php echo $info1['name'];?></td>
        <td ><?php echo $info1['shichangjia'];?></td>
        <td ><?php echo $info1['huiyuanjia'];?></td>
        <td ><?php echo $arraysl[$i];?></td>
        <td ><?php echo $arraysl[$i]*$info1['huiyuanjia'];?></td>
     </tr>
	 <?php
	   }
	   }
	 ?>
		<tr align="right">
			<td colspan="5">�ܼƷ���:<?php echo $info['total'];?></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr>
				<th>�µ��ˣ�</th>
				<td><?php echo $_SESSION['username'];?></td>
				<th>�ջ��ˣ�</th>
				<td><?php echo $info['shouhuoren'];?></td>
			</tr>
			<tr>
				<th>�ջ��˵�ַ��</th>
				<td><?php echo $info['dizhi'];?></td>
				<th>E-mail:</t>
				<td><?php echo $info['email'];?></td>
			</tr>
			<tr>
				<th>��&nbsp;&nbsp;��:</th>
				<td><?php echo $info['youbian'];?></td>
				<th>��&nbsp;&nbsp;����</th>
				<td><?php echo $info['tel'];?></td>
			</tr>
			<tr>
				<th>�ͻ���ʽ��</th>
				<td><?php echo $info['shff'];?></td>
				<th>֧����ʽ��</th>
				<td><?php echo $info['zfff'];?></td>
			</tr>
		</tbody>
</table>
</div>  	

	         </div></div>
	     <div class="col-md-4">
			<!--��ߵ� -->	<?php

			require("right.php");
			?>
	</div></div>
			<!-- �ұߵ� -->
<div class="row">
<div class="col-md-12" align="center">
<?php
require("footer.php");
?>	</div></div>
</div></div>