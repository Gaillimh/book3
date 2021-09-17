<?php
 require("index.php");
require "../conn.php";

if($act=="Del")
{
$sql="delete from chubanshe where id=$id";
$result=mysqli_query($conn,$sql);

}
?>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="30" ><div align="center" >出版社管理</div></td>
  </tr>
  <tr>
    <td  ><table width="600" border="0" align="center" cellpadding="0" cellspacing="1">
       <?php
$sql="select * from chubanshe";
$result=mysqli_query($conn,$sql);

	   ?>
	   <tr>
          <td width="224" height="20" bgcolor="#FFFFFF"><div align="center">出版社名称</div></td>



 <td width="75" bgcolor="#FFFFFF"><div align="center">页面操作</div></td>
        </tr>
       <?php
	      while($chubanshe=mysqli_fetch_array($result))
		     {
	   ?>
	   <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $chubanshe['name'];?></div></td>

           <td height="20" bgcolor="#FFFFFF"><div align="center">
<a href="?id=<?php echo $chubanshe['id']?>&act=Del"><font color="rgba(0,0,0,1.00)">删除</font></a>

          </div></td>
        </tr>
		<?php
	        }

		?>
    </table></td>
  </tr>
</table>
<?php
if($act=="save")
{
 $sql="insert into chubanshe (name) values ('$p0')";
 if(mysqli_query($conn,$sql))
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=chubanshe.php\">";
 else
	 echo "添加失败";
}

?><p>
<div align="center">
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
    <form name="form1" method="post" action="?act=save" onSubmit="return chkinput(this)">
	<tr>
      <td height="30"  colspan = "3"><div align="center" >添加出版社</div></td>
    </tr>



        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">出版社名称</div></td>
          <td bgcolor="#FFFFFF"><div align="center"><input type="text" name="p0" class="inputcss" size="20"></div></td>
          <td height="20" bgcolor="#FFFFFF" ><div align="center" ><input type="submit" value="添加出版社" class="buttoncss">&nbsp;</div></td>
          </tr>



	</form>
  </table>
</p>
<p>&nbsp;</p>
</form>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>
