<?php
include("check_login.php");
include("../conn.php");
while(list($name,$value)=each($_POST))
{
   mysqli_query("delete from liuyan where id='".$value."'",$conn);
}
header("location:guest.php");
?>
