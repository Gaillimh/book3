<?php
 require("index.php");
require "../conn.php";
if ( $id == "" ) exit( "i�Ƿ�����");
if ( $action == "save" )
{
$sql = "update categories set name='".$name."' where id=$id";
$result=mysqli_query($conn,$sql);
	if($result){
		echo "<script>alert('�ɹ��޸�ͼ�����');location.href='class.php'</script>";
		exit( );
	}

}
$sql = "select * from categories where id='".$id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$submitstring = $row['reid'] == "0" ? "�޸Ķ�������" : "�޸��ӷ���";

?>

<table width="100%" border="0" id="table_style_all" cellpadding="0" cellspacing="0">
  <tr>
    <td id="table_style" class="l_t">&nbsp;</td>
    <td>&nbsp;</td>
    <td id="table_style" class="r_t">&nbsp;</td>
  </tr>

     <tr>
      <td><strong>&nbsp;��Ʒ�����޸�</strong></td>
     </tr>
	 <form action="?action=save" method="post">

	    <tr>
		 <td id="row_style">&nbsp;��������:</td>
		 <td>
		 &nbsp;<input type="text" name="name" size="20" value="<?php echo $row['name']?>">
		 <input type="hidden" name="id" value="<?php echo $id?>">
		 </td>
	    </tr>
		<tr>
		 <td id="row_style">&nbsp;</td>
		 <td>&nbsp;<input type="submit" name="submit" value=" <?php echo $submitstring?> "></td>
	    </tr>
		</form>

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