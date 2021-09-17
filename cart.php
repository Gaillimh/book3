<div class="container-fluid">
     <div class="container">
      	<div class="row">
<?php
require("header.php");
if($_SESSION["login"]=="")
  {
    echo "<script>alert('请先登录，后购物!');history.back();</script>";
	exit;
  }
if($act=="buy")
{
$sql="select * from shu where id=$id";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($result);
if($data["shuliang"]<=0)
 {

   echo "<script>alert('该图书已经售完!');history.back();</script>";
   exit;

 }
   $array=explode("@",$_SESSION["goodslist"]);

 for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$id)
	  {
	     echo "<script>location.href='cart.php';</script>";
		 exit;
	  }
	}
}
//购物车代码实现
if($act=="del")
{//移除购物车
	 $arraysp=explode("@",$_SESSION["goodslist"]);
 $arraysl=explode("@",$_SESSION["goodsnum"]);
for($i=0;$i<count($arraysp);$i++)
 {
   if($arraysp[$i]==$id)
    {
	  $arraysp[$i]="";
	  $arraysl[$i]="";
	}
 }
$_SESSION["goodslist"]=implode("@",$arraysp);
$_SESSION["goodsnum"]=implode("@",$arraysl);
echo "<script>location.href='cart.php';</script>";
exit;
}

$array=explode("@",$_SESSION["goodslist"]);

  $_SESSION["goodslist"]=$_SESSION["goodslist"].$id."@";
  $_SESSION["goodsnum"]=$_SESSION["goodsnum"]."1@";

  if($_GET["qk"]=="yes")
 {
 $_SESSION["goodslist"]="";
 $_SESSION["goodsnum"]="";
}
$arraygwc=explode("@",$_SESSION["goodslist"]);
  $s=0;
   for($i=0;$i<count($arraygwc);$i++)
   {
       $s+=intval($arraygwc[$i]);
   }
   $goodstotal=0;
$array=explode("@",$_SESSION["goodslist"]);
$arraygoodsnum=explode("@",$_SESSION["goodsnum"]);
while(list($name,$value)=$_POST)
 {
  for($i=0;$i<count($array)-1;$i++)
 {
    if(($array[$i])==$name)
	{
  $arraygoodsnum[$i]=$value;
	}
 }
}
$_SESSION["goodsnum"]=implode("@",$arraygoodsnum);

			?>	</div>		<div class="row" >
		     <div class="col-md-8" >	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;"><?php echo $_SESSION["login"];?>的购物车</span></div>
				 </div>
       <div class="row">
       <div class="col-md-12">
        <form name="form1" method="post" action="">
	<table class="table">
			<th >图书名称</th>
			<th >会员价</th>
			<th >数量</th>
			<th >市场价</th>
			<th >删除</th>
		<?php
for($i=0;$i<count($array)-1;$i++)
 {
  $id=$array[$i];
  $num=$arraygoodsnum[$i];
 if($id!="")
				   {
   $sql=mysqli_query($conn,"select * from shu where id=$id");
   $data=mysqli_fetch_array($sql);
$sql1=mysqli_query($conn,"select * from shu where id=$id");
$rs=mysqli_fetch_array($sql1);
if($rs["shuliang"]<$num){
	$_SESSION["goodsnum"]=1;
   echo "<script>alert('该图书库存不足!');location.href='cart.php';</script>";
  exit;
 }
 $goodstotal1=$num*$data["huiyuanjia"];
		$da=$data['id'];
$goodstotal+=$goodstotal1;
 $_SESSION["goodstotal"]=$goodstotal;
if($num=="") $num=1;?>
			<tr bgcolor="#FFFFFF" height="22">
				<td style="border: white 0px solid;"><?php echo $data["name"]?></td>
				<td style="border: white 0px solid;">￥<?php echo $data["huiyuanjia"]?><br/></td>
				<td style="border: white 0px solid;"> <input type="text" name="numa" size="2" class="inputcss" value=<?php echo $num;?>></td>
				<td style="border: white 0px solid;">￥<?php echo $data["shichangjia"]?></td>
				<td style="border: white 0px solid;"><a href="?id=<?php echo $data["id"]?>&act=del"> <img src="./images/delete_01.gif" border="0"/></a></td>
			</tr>
<?php
	}
	}
	?>
			<tr>
				<td colspan="5" >
					<img hspace="5" src="./images/me03.gif"/> 总金额：￥<span ><?php echo $goodstotal;?></span>&nbsp;&nbsp;&nbsp;&nbsp;
					<img id="indicator1" src="./images/loading.gif" style="display:none"/>
				</td>
			</tr>
	     </table>
    </div>
       <div class="row">
       	<div class="col-xs-1 col-sm-1 ol-md-1">&nbsp; </div>
       	<div class="col-xs-3 col-sm-3 col-md-3"><a href="?qk=yes" ><img border="0" src="./images/Car_icon_01.gif"/></a></div>
       	<div class="col-xs-3 col-sm-3 col-md-3" style="margin-right: 2%"><a href="index.php"><img border="0" src="./images/Car_icon_02.gif"/></a></div>
       	<div class="col-xs-3 col-sm-3 col-md-3"><a href="jiesuan.php?ida=<?php echo $da?>&numa=<?php echo $num?>"><img border="0" src="./images/Car_icon_03.gif"/></a></div>
       </div>  
			               </form>
			               </div>
	         </div></div>
	     <div class="col-md-4">
			<!--左边的 -->	<?php

			require("right.php");
			?>
</div></div>
			<!-- 右边的 -->
<div class="row">
<div class="col-md-12" align="center">
<?php
require("footer.php");
?>	</div></div>
	</div></div>