<div class="container">
<div class="row">
<?php
require("header.php");
if($_SESSION['login']=="")
  {
    echo "<script>alert('请先登录');history.back();</script>";
	exit;
  }
?>
		</div>
		
			<!--左边的 --><div class="container-fluid">
			<div class="row" >
		     <div class="col-md-8" >	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">我的订单</span></div>
				 </div>
				 <div class="row">
				 <div class="col-md-12">
				 
				 
				 
<table class="table table-hover">
	<thead>
		<tr>
			<th>订单号</th>
			<th>图书总价</th>
			<th>下单时间</th>
			<td>订单状态</td>
			<td>操作</td>
		</tr>
	</thead>
	<tbody>
<?php
$sql="select * from orders where xiadanren='$_SESSION[login]' order by id DESC";
			$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result)){
if($data['zt']=='未作任何处理') $a="<a href=?act=del&id=$data[id]>删除</a>";
else
	$a="";
?>
		 <tr>
			<td><a href="orderDetail.php?orderid=<?php echo $data['orderid']?>"><?php echo $data['orderid']?></a></td>
			<td>￥<?php echo $data['total']?><br/></td>
		    <td><?php echo $data['time']?></td>
			<td><?php echo $data['zt']?></td>
			<td><a href="orderDetail.php?orderid=<?php echo $data['orderid']?>">查看详情</a> <?php echo $a?></td>
		 </tr>
<?php
}
	?>
	</tbody>
</table>
		 </div>
</div>					
		      		  
	        </div>
	     </div>
		
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