<?php
include("check_login.php");
$zt=$_POST['yfh'];


 if(($zt==""))
  {
    echo "<script>alert('请选择处理状态!');history.back();</script>";
	exit;
  }
 include("../conn.php");

 $sql3=mysqli_query($conn,"select * from orders where id='".$_GET['id']."'");
 $data3=mysqli_fetch_array($sql3);
 if(trim($data3['zt'])=="未作任何处理")
 {
 $sql=mysqli_query($conn,"select * from orders where id='".$_GET['id']."'");
 $data=mysqli_fetch_array($sql);
 $array=explode("@",$data['spc']);
 $arraysl=explode("@",$data['slc']);

   for($i=0;$i<count($array);$i++)
    { $id=$array[$i];
     $num=$arraysl[$i];
      mysqli_query($conn,"update shu set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'");
    }
  }
  mysqli_query($conn,"update orders set zt='".$zt."'where id='".$_GET['id']."'");
 header("location:order.php");
?>
