<div class="container-fluid">
  <div class="container">
   <div class="row">
<?php
require("header.php");

						$sql="select * from news where id=$id";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($result);
?>
	</div>
	<div class="row" >
		<div class="col-md-8" s>	
			<div class="panel panel-default">		
		    	<div class="row">
		     		<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">�鿴����</span></div>
				</div>
<div class="row">
	<div class="col-md-12" align="center">
		<font size="+1" color="#000000"><?php echo $data["title"]?></font>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<font><?php echo $data["content"]?></font>
	</div>
</div>  
			 </div>
				  </div>
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