<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
   $conn = mysqli_connect("localhost", "root", "", "db_tushu", "3308") or die("连接数据库服务器失败！".mysqli_error());
     mysqli_query($conn,"set names gbk");
date_default_timezone_set('PRC');
function get_name($id,$table)
{
	$conn = mysqli_connect("localhost", "root", "", "db_tushu", "3308") or die("连接数据库服务器失败！".mysqli_error());
     mysqli_query($conn,"set names gbk");
	$sql="select * from $table where id =".$id;
	$r=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_array($r);
	return $rows['name'];
}
function getfenlei($id,$reid){

	$conn = mysqli_connect("localhost", "root", "", "db_tushu", "3308") or die("连接数据库服务器失败！".mysqli_error());
     mysqli_query($conn,"set names gbk");
	$sql="select * from categories where reid=0";
	$result=mysqli_query($conn,$sql);
	echo '<select name="dalei" onchange="getCity(this.value)">';
	$i=1;
while($row=mysqli_fetch_array($result))
{
	if($reid==''){
    	if($i==1)$initid=$row['id'];}
	else
		$initid=$id;
	if ($id==$row['id'])
	echo "<option value='".$row['id']."' selected>".$row['name']."</option>";
	else
	echo "<option value='".$row['id']."'>".$row['name']."</option>";
	$i++;
	}

	echo "</select>";
	//读取子分类

	 $sql1="select * from categories where reid='$initid'";
	 	$result1=mysqli_query($conn,$sql1);

	 echo ' -> <select name="xiaolei">';
while($row1=mysqli_fetch_array($result1))
	{
	  if($row1['id']==$reid)
	  echo "<option value='".$row1['id']."' selected>".$row1['name']."</option>";
	  else
	  echo "<option value='".$row1['id']."'>".$row1['name']."</option>";
	 }

 	 echo "</select>";
}
@extract($_POST);
@extract($_GET);
?>
