<?php
 require("index.php");

include("../conn.php");
if($act=="save")
{
 $time=date("Y-m-d h:i:s");
 $sql="insert into news (title,content,addtime) values ('$title','$content','$time')";
 mysqli_query($conn,$sql);
 echo "<script>alert('��ӳɹ�!');location.href='news.php';</script>";
}
?>

<script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
	 {
	   alert("�����빫������!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("�����빫������!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7E7E7" colspan = "2"><div align="center" >��ӹ���</div></td>
  </tr>
      <form name="form1" method="post" action="?act=save" onSubmit="return chkinput(this)">
	  <tr>
        <td width="80" height="25" bgcolor="#FFFFFF"><div align="center">�������⣺</div></td>
        <td width="667" bgcolor="#FFFFFF"><div align="left"><input type="text" name="title" size="50" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="125" bgcolor="#FFFFFF"><div align="center">�������ݣ�</div></td>
        <td height="125" bgcolor="#FFFFFF"><div align="left"><textarea name="content" rows="8" cols="70"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="���" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss"></div></td>
      </tr>
	  </form>

                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>


