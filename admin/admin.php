<?php
require("index.php");
?>
<?php
include("../conn.php");
if($act=="del")
{
	$sql="delete from admin where id=$id";
$result=mysqli_query($conn,$sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('����Ա�˺�ɾ���ɹ�');location.href='admin.php';</SCRIPT>";
}
?>

<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#E7E7E7">
  <tr>
    <td colspan="4" class="title" bgcolor="#E7E7E7"><div align="center" class="title"> <div align="center" class="title"><a href="admin_add.php"> <font color="#000000">��ӹ���Ա</font></a></div></td>
  </tr>

  <tr>
    <td width="6%" bgcolor="#E7E7E7">    <div align="center">���</div></td>
    <td width="13%" bgcolor="#E7E7E7"><div align="center"><span class="Forumrow">����Ա�˺�</span></div></td>


    <td width="6%" bgcolor="#E7E7E7"><div align="center">����</div></td>
  </tr>
<?php
$sql="select * from admin order by id DESC";
$result=mysqli_query($conn,$sql);
while($rs=mysqli_fetch_array($result))
{
//print_r($rs);
?>
<tr onmouseover=this.style.backgroundColor="#F2F2F2" onmouseout=this.style.backgroundColor=""  bgcolor="#FFFFFF">
    <td><div align="center"><?php   echo $rs['id']; ?></div></td>
    <td>&nbsp;<div align="center"><?php   echo $rs["name"]; ?></div></td>

    <td><div align="center">
	<a href="admin_pwd.php?id=<?php   echo $rs['id']; ?>" ><font color="#000000">�޸�</a>

	<a href="?id=<?php   echo $rs['id']; ?>&act=del" onclick="{if(confirm('��ȷ��Ҫɾ����ס����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a></div></td>
  </tr>
  <?php
}
		?>
		                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>

