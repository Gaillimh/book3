<div class="container-fluid">
  <div class="container">
   <div class="row">
<?php
require("header.php");

?></div>
			<div class="row" >
		     <div class="col-md-8" >	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">��վ����</span></div>
				 </div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6" align="center"><font size="+1">��������</font></div>
	<div class="col-xs-6 col-sm-6 col-md-6" align="center"><font size="+1">�鿴����</font></div>
</div>
<?php
$sql="select * from news  order by id DESC";
			$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result)){
?>
<div class="row" style="margin-bottom: 3%">
	<div class="col-xs-6 col-sm-6 col-md-6" align="center"><font><a href="details.php?id=<?php echo $data["id"]?>"><?php echo $data["title"]?></a></font></div>
	<div class="col-xs-6 col-sm-6 col-md-6" align="center"><font><a href="details.php?id=<?php echo $data["id"]?>">�鿴����</a></a></font></div>
</div>
<?php
}
	?></div>
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