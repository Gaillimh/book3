<div class="container">
<div class="row">
<?php
require("header.php");
if($_SESSION['login']=="")
  {
    echo "<script>alert('���ȵ�¼');history.back();</script>";
	exit;
  }
?>
		</div>
		
			<!--��ߵ� --><div class="container-fluid">
			<div class="row" >
		     <div class="col-md-8" >	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">�ҵĶ���</span></div>
				 </div>
				 <div class="row">
				 <div class="col-md-12">
				 
				 
				 
<table class="table table-hover">
	<thead>
		<tr>
			<th>������</th>
			<th>ͼ���ܼ�</th>
			<th>�µ�ʱ��</th>
			<td>����״̬</td>
			<td>����</td>
		</tr>
	</thead>
	<tbody>
<?php
$sql="select * from orders where xiadanren='$_SESSION[login]' order by id DESC";
			$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result)){
if($data['zt']=='δ���κδ���') $a="<a href=?act=del&id=$data[id]>ɾ��</a>";
else
	$a="";
?>
		 <tr>
			<td><a href="orderDetail.php?orderid=<?php echo $data['orderid']?>"><?php echo $data['orderid']?></a></td>
			<td>��<?php echo $data['total']?><br/></td>
		    <td><?php echo $data['time']?></td>
			<td><?php echo $data['zt']?></td>
			<td><a href="orderDetail.php?orderid=<?php echo $data['orderid']?>">�鿴����</a> <?php echo $a?></td>
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