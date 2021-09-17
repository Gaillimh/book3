<?php
  include("check_login.php");
  $page=intval($_POST['page_id']);
  include("../conn.php");
  while(list($value,$name)=each($_POST))
   {
     mysqli_query($conn,"delete from orders where id='".$value."'");
   }
 header("location:order.php?page=".$page."");

?>
