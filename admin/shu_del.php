<?php
 include("check_login.php");
 include("../conn.php");
	  //ɾ��ͼ��
      mysqli_query($conn,"delete from shu where id='".$id."'");
	  //ɾ������
	  mysqli_query($conn,"delete from pingjia where spid='".$id."'");
 header("location:shu.php");
?>