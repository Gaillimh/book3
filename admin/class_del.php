<?php
require "../conn.php";
if ( $id == "" ) exit( "i�Ƿ�����");

$sql = "select * from categories where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ( $row['reid'] == 0 )
		{

				$sql= "select * from categories where reid=".$row['id'];
				$result=mysqli_query($conn,$sql);
				if ( 1 <= mysqli_num_rows($result))
				{
						echo "<script language='javascript'>alert('��Ҫɾ���Ķ������������ӷ���,����ɾ�����ӷ���!');history.go(-1);</script>";
				}
				else
				{
						$sql="delete from categories where id='".$id."'";
$result=mysqli_query($conn,$sql);
echo "<script>alert('�ɹ�ɾ��ͼ�����');location.href='class.php'</script>";						



		exit();				}

		}
		else
		{

			$sql= "delete from categories where id='".$id."'";
$result=mysqli_query($conn,$sql);
				echo "<script>alert('�ɹ�ɾ��ͼ�����');location.href='class.php'</script>";

		exit();
		}
?>
