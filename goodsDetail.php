<div class="container-fluid">
     <div class="container">
<div class="row">
<?php
require("header.php");
$sql="select * from shu where id=".$_GET['goodsId'];
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($result);
			?></div>
			<div class="row" >
		     <div class="col-md-8" >	
			<div class="panel panel-default">	
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">ͼ������</span></div>		    
				 </div>
					 <div class="row">
				 <div class="col-md-12">
				 
<form action="cart.php?id=<?php echo $data["id"]?>&act=buy" name="f" method="post" onSubmit="return chkinput(this)">
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">&nbsp;</div>
	<div class="col-xs-4 col-sm-4 col-md-4" align="left"><font size="+1">ͼ��ͼƬ</font></div>
</div>
<div class="row" align="left" style="margin-left: 8%">
	<div class="col-xs-6 col-sm-6 col-md-6" >
		<div class="row" style="margin-bottom: 50px">&nbsp;</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" align="left"><font>ͼ�����ƣ�</font>
			<font><?php echo $data["name"]?></font></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"align="left"><font>ͼ����ࣺ</font>
			<font><?php echo get_name($data['dalei'],'categories')?>--><?php echo get_name($data['xiaolei'],'categories')?></font></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" align="left"><font>ͼ������磺</font>
			<font><?php echo get_name($data["chubanshe"],'chubanshe')?></font></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" align="left"><font>�г��ۣ�</font>
			<font><?php echo $data["shichangjia"]?>Ԫ</font></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" align="left"><font>��Ա�ۣ�</font>
			<font><?php echo $data["huiyuanjia"]?>Ԫ</font></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" align="left"><font>ͼ��������</font>
			<font><?php echo $data["shuliang"]?></font></div>
		</div>
		<div class="row" align="left">
		<div class="col-xs-4 col-sm-4 col-md-4">&nbsp; &nbsp;</div>
		<div class="col-xs-4 col-sm-4 col-md-4"><input type="submit" value="���빺�ﳵ"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></div></div>
		
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4" align="left" style="margin-left: -10%;"><img src="<?php echo $data['tupian']?>"/></div>
</div>
</div></div>
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