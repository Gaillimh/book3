<div class="container">
    <div class="row">
<?php
require("header.php");
?>
	</div>
			<!--左边的 -->
		<div class="container-fluid">
			<div class="row" >
		     <div class="col-md-8"  >	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">最新图书</span></div>
				 </div>
				 <div class="row">
				 <div class="col-md-12">		 
	<table class="table">
			<th style="border: white 0px solid;">图书名称</th>
			<th style="border: white 0px solid;">市场价</th>
			<th style="border: white 0px solid;">会员价</th>
			<th style="border: white 0px solid;">图书图片</th>
			<th style="border: white 0px solid;">操作</th>
<?php
$sql="select * from shu order by id DESC";
			$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result)){
?>
			<tr >
				<td style="border: white 0px solid;"><a href="goodsDetail.php?goodsId=<?php echo $data['id']?>"><?php echo $data['name']?></a></td>
				<td style="border: white 0px solid;">￥<?php echo $data['shichangjia']?><br/></td>
				<td style="border: white 0px solid;">￥<?php echo $data['huiyuanjia']?></td>
				<td style="border: white 0px solid;"><a href="goodsDetail.php?goodsId=<?php echo $data['id']?>"> <img width="60" height="60" src="<?php echo $data['tupian']?>"/> </a></td>
				<td style="border: white 0px solid;"><a href="cart.php?id=<?php echo $data['id']?>&act=buy"><img alt="" src="./images/icon_buy.gif" border=0/></a></td>
			</tr>
<?php
}
	?></table></div>
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
