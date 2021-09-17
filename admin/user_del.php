<?php
include("check_login.php");
include("../conn.php");
while(list($name,$value)=each($_POST))
  {
    mysqli_query($conn,"delete from user where id=".$value."");
  }
header("location:user.php");
?>