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
		     	<div class="col-md-12" style="margin:10px 0px 20px 10px"><span style="float:left;color:#d14500;">查看订单</span></div>
				 </div>	 
	<div class="row">
		<div class="col-md-12" style="margin-left: 10%" >
			<div align="left"><h5>订单号：<?php echo $orderid;?></h5></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="margin-left: 10%">
			<div align="left" ><h5>图书列表(如下)：</h5></div>
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
			<th>图书名称</th>
			<th>市场价</th>
			<th>会员价</th>
			<th>数量</th>
			<th>小计</th>
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
			<td colspan="5">总计费用:<?php echo $info['total'];?></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr>
				<th>下单人：</th>
				<td><?php echo $_SESSION['username'];?></td>
				<th>收货人：</th>
				<td><?php echo $info['shouhuoren'];?></td>
			</tr>
			<tr>
				<th>收货人地址：</th>
				<td><?php echo $info['dizhi'];?></td>
				<th>E-mail:</t>
				<td><?php echo $info['email'];?></td>
			</tr>
			<tr>
				<th>邮&nbsp;&nbsp;编:</th>
				<td><?php echo $info['youbian'];?></td>
				<th>电&nbsp;&nbsp;话：</th>
				<td><?php echo $info['tel'];?></td>
			</tr>
			<tr>
				<th>送货方式：</th>
				<td><?php echo $info['shff'];?></td>
				<th>支付方式：</th>
				<td><?php echo $info['zfff'];?></td>
			</tr>
		</tbody>
</table>
</div>  	

	         </div></div>
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