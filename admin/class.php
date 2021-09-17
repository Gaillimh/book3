<?php
 require("index.php");
require "../conn.php";
if ( $action == "save" )
{
		if ( $reid == "" )
		{
				$addsql = "insert into categories(name,reid) values('".$name."','0')";
		}
		else
		{
				$addsql = "insert into categories(name,reid) values('".$name."','{$reid}')";

		}
		mysqli_query($conn,$addsql);
echo "<script>alert('成功添加图书分类');location.href='class.php'</script>";

		exit();
}
?>
<table width="100%" border="0" id="table_style_all" cellpadding="0" cellspacing="0">
  <tr>
    <td id="table_style" class="l_t">&nbsp;</td>
    <td>&nbsp;</td>
    <td id="table_style" class="r_t">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<table width="100%" border="0" cellpadding="0" cellspacing="2">
     <tr>
      <td><strong>&nbsp;图书分类设置</strong>&nbsp;&nbsp;<a href="?action=new"><font color="#000000">添加顶级分类</font></a> </td>
     </tr>
	 <form action="?action=save" method="post">
     <tr>
      <td bgcolor="#FFFFFF">

<?php
if($action == "new")//添加新分类
{
$submitstring = $reid == "" ? " 添加顶级分类 " : " 添加子分类 ";

?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" id="table_border">

	    <tr>
		 <td id="row_style">&nbsp;分类名称:</td>
		 <td>&nbsp;<input type="text" name="name" size="20"><input type="hidden" name="reid" value="<?php echo $reid?>"></td>
	    </tr>
		<tr>
		 <td id="row_style">&nbsp;</td>
		 		 <td>&nbsp;<input type="submit" name="submit" value="<?php echo $submitstring?> "></td>
	    </tr>
		</form>
	   </table>
<?php
}//添加子分类结束
else
{
?>
	  <table width="100%" cellspacing="0" cellpadding="0" border="0" id="table_border">
	  <tr class='row_color_head'><td>名称</td><td>操作</td></tr>
<?php
//取顶级分类
$sql="select * from categories where reid=0";
$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($result))
	{
?>

	  <tr><td>&nbsp;&nbsp;<font color=blue size=4><?php echo $data['name']?></font></td><td><a href=class_edit.php?id=<?php echo $data['id']?>><font color="#000000">修改</font></a> | <a href=class_del.php?id=<?php echo $data['id']?>><font color="#000000">删除</font></a> | <a href=?action=new&reid=<?php echo $data['id']?>><font color="#000000">添子类</font></a></td></tr>
<?php
		  //根据顶级分类id取子分类
 $sql2="select * from categories where reid=".$data['id'];

	  $result2=mysqli_query($conn,$sql2);
	  while($data2=mysqli_fetch_array($result2))
		{

?>
	  <tr class='row_color_gray'><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- <?php echo $data2['name']?></td><td><a href=class_edit.php?id=<?php echo $data2['id']?>>修改</a> | <a href=class_del.php?id=<?php echo $data2['id']?>><font color="#000000">删除</font></a></td></tr>



<?php
		}
 }
echo  "</table>";

}
?>

  </td>
     </tr>
    </table>

	</td>
    <td>&nbsp;</td>

  </tr>
  <tr>
    <td id="table_style" class="l_b">&nbsp;</td>
    <td>&nbsp;</td>
    <td id="table_style" class="r_b">&nbsp;</td>
  </tr>


</table>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>
