<?php 
include("check_login.php"); 
 require("index.php");?>

<?php
include("../conn.php");
$id=$_GET['id'];
$sql=mysqli_query("select * from liuyan where id='".$id."'",$conn);
$data=mysqli_fetch_array($sql);

?>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="30" bgcolor="#E7E7E7" colspan = "4"><div align="center">���Բ鿴</div></td>
  </tr>
        <tr>
          <td width="87" height="25" bgcolor="#FFFFFF"><div align="center">��������:</div></td>
          <td width="392" height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $data['title'];?></div></td>
          <td width="83" bgcolor="#FFFFFF"><div align="center">����ʱ��:</div></td>
          <td width="183" bgcolor="#FFFFFF"><div align="center"><?php echo $data[time];?></div></td>
        </tr>
        <tr>
          <td height="100" bgcolor="#FFFFFF"><div align="center">��������:</div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
		<?php echo $data['content'];?>
		  </div></td>
        </tr>

  <tr>
    <td colspan = "4" height="20" bgcolor="#FFFFFF"><div align="center">&nbsp;<input type="button" value="����" class="buttoncss" onClick="javascript:history.back();"></div></td>
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
