<?php
  require("index.php");
require("../conn.php");
if($action=="save")
{
 mysqli_query($conn,"update news set title='$title',content='$content' where id='".$_POST['id']."'");
  echo "<script>alert('���Ź����޸ĳɹ�!');location.href='news.php';</script>";
}
?>

<?php
 $sql=mysqli_query($conn,"select * from news where id=".$_GET['id']."");
 $info=mysqli_fetch_array($sql);

?>
<script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
	 {
	   alert("���������Ź�������!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("���������Ź�������!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
<table width="800" border="0" align="center" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7E7E7" colspan = "2"><div align="center" >�鿴�޸����Ź���</div></td>
  </tr>
       <form name="form1" method="post" action="?action=save" onSubmit="return chkinput(this)">
	  <tr>
        <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">���Ź�������</div></td>
        <td width="647" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="title" size="50" class="inputcss" value="<?php echo $info['title'];?>"></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">���Ź������ݣ�</div></td>
        <td bgcolor="#FFFFFF"><div align="left"><textarea name="content" cols="60" rows="8" class="inputcss"><?php echo $info['content'];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"><input type="submit" value="����" class="buttoncss"></div></td>
      </tr>
	  </form>

</table>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>

