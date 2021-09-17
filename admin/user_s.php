<?php
require("index.php");
include("../conn.php")
?>

<div class="container-fluid">
<div class="container">
<div class="row">
<div class="col-md-8" align="center">

<form name="form2" method="post" action="">
  <label for="textfield"></label>
  请输入用户帐号
  <input type="text" name="name" id="name">
  <input type="submit" name="button" id="button" value="查找">
</form>
</div>	</div>
<?php
if($name!="")
{
?>

<div class="row">
<div class="col-md-8">
<form name="form1" method="post" action="user_del.php">
<div class="row">
<div class="col-md-12" align="center">
	<font>用户查询</font>
</div>
</div>

       <?php
$sql="select * from `user` where name='$name'";
             $sql1=mysqli_query($conn,$sql);

	   ?>
      <div class="row">
      	<div class="col-md-2 col-sm-2 col-xs-2"><font>用户帐号</font></div>
      	<div class="col-md-2 col-sm-2 col-xs-2"><font>电话</font></div>
      	<div class="col-md-3 col-sm-3 col-xs-3"><font>email</font></div>
      	<div class="col-md-2 col-sm-2 col-xs-2"><font>姓名</font></div>
      	<div class="col-md-1 col-sm-1 col-xs-1"><font>删除</font></div>
      	<div class="col-md-2 col-sm-2 col-xs-2"><font>查看信息</font></div>
      </div>
       <?php
	      while($data1=mysqli_fetch_array($sql1))
		     {
	   ?>
      <div class="row">
      	<div class="col-md-2 col-sm-2 col-xs-2"><font><?php echo $data1['name'];?></font></div>
      	<div class="col-md-2 col-sm-2 col-xs-2"><font><?php echo $data1['tel'];?></font></div>
      	<div class="col-md-3 col-sm-3 col-xs-3"><font><?php echo $data1['email'];?></font></div>
      	<div class="col-md-2 col-sm-2 col-xs-2"><font><?php echo $data1['truename'];?></font></div>
      	<div class="col-md-1 col-sm-1 col-xs-1"><input type="checkbox" name="<?php echo $data1['id'];?>" value=<?php echo $data1['id'];?>></div>
      	<div class="col-md-2 col-sm-2 col-xs-2"><a href="user_view.php?id=<?php echo $data1['id'];?>">查看用户</a></div>
      </div>    
		<?php
	        }

		?>

	</form></div></div>
	
	<div class="row">
	<div class="col-md-6" align="right">
<?php
}
else
echo "请输入你要查找的帐号";
?>
	</div></div></div></div>
               
               
               
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>
