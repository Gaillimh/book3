<?php
require("index.php");
?>
<?php
include("../conn.php");
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from user where id=".$id."");
$data=mysqli_fetch_array($sql);
?>
<div class="container-fluid">
<div class="container">
<div class="row">
	<div class="col-md-8">
		

<table class="table table-bordered" align="center" style="margin-top: 3%">
 <form name="form1" method="post" action="djyh.php">
  <tr  align="center">
    <td bgcolor="rgba(198,198,198,1.00)" colspan = "2"><font size="+1">用户信息查看</font></td>
  </tr>
      <tr>
        <td ><div align="center">用户昵称：</div></td>
        <td ><div align="left"><?php echo $data['name'];?></div></td>
      
      </tr>
      <tr>
        <td ><div align="center">真实姓名：</div></td>
        <td ><div align="left"><?php echo $data['truename'];?></div></td>
      </tr>
      <tr>
        <td ><div align="center">身份证号：</div></td>
        <td ><div align="left"><?php echo $data['sfzh'];?></div></td>
      </tr>
	  <tr>
        <td ><div align="center">E-mail：</div></td>
        <td ><div align="left"><?php echo $data['email'];?></div></td>
      </tr>
	  <tr>
        <td><div align="center">联系电话：</div></td>
        <td><div align="left"><?php echo $data['tel'];?></div></td>
      </tr>
	  <tr>
        <td ><div align="center">QQ号码：</div></td>
        <td ><div align="left"><?php echo $data['qq'];?></div></td>
      </tr>
  </form>
</table> </div>	</div>
</div>
</div>
</div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>
