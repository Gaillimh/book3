<?php
 include("check_login.php");
 include("../conn.php");
	  //É¾³ýÍ¼Êé
      mysqli_query($conn,"delete from shu where id='".$id."'");
	  //É¾³ýÆÀ¼Û
	  mysqli_query($conn,"delete from pingjia where spid='".$id."'");
 header("location:shu.php");
?>