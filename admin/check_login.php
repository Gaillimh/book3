<?php
error_reporting(E_ALL ^ E_NOTICE);//����������
session_start();
if($_SESSION['admin_username']==""){
	echo "<script>alert('���¼');window.top.location.href='login.php';</script>";
}
?>
