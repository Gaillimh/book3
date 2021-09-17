<?php
session_start();
  include("../conn.php");
  $sql="select * from admin where name='".$userName."'";
     $re=mysqli_query($conn,$sql);
     $data=mysqli_fetch_array($re);
     if(!$data){
          echo "<script language='javascript'>alert('There is no');history.back();</script>";
          exit;
       }
      else{
          $_SESSION['admin_username']=$userName;
          if($data['pwd']==$userPw){
               header("location:index.php");
           }
          else{
             echo "<script language='javascript'>alert('Password mistake');history.back();</script>";
             exit;
	
           }
      }
?>