<?php
session_start();
require("conn.php");
if($act=="login")
{
$sql="select * from `user` where name='$userName' and pwd='$userPw'";
$res=mysqli_query($conn,$sql);
   $info=mysqli_fetch_array($res);
if($info==false){
          echo "<script>
		  alert('Account or password error');
		  history.back();</script>";
          exit;
       }
	   else
		   {
		   $_SESSION['login']=$userName;
 echo "<script>alert('登陆成功');location.href='index.php';</script>";
	   }
}
?>