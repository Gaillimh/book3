<style type="text/css">
	/*.a{
	border-top-right-radius: 5px;
	border-top-left-radius: 5px; 
	border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	}*/
	
</style>

<div class="container">
  <div class="container-fluid">
   <div class="row">
      	<?php
require("header.php");
if($_SESSION["login"]=="")
  {
    echo "<script>alert('请先登录');history.back();</script>";
	exit;
  }
if($act=="save")
{
	if($title=="" || $content=="")
	{
	echo "<script>alert('留言标题,内容,不能为空');history.back();</script>";
	exit;
	}

$sql="insert into liuyan (title,content,userid) values ('$title','$content','$_SESSION[login]')";

$res=mysqli_query($conn,$sql);
if($res)
	{
	echo "<script>alert('成功');location.href='guest.php';</script>";
	exit;
	}
	else

	exit("失败了");

	}
?>
	  </div></div>
	  <div class="container-fluid">
			<div class="row" >
		     <div class="col-md-8" >	
		    <div class="panel panel-default">		
		     <div class="row">
		     	<div class="col-md-12" style="margin:10px 0px 0px 10px"><span style="float:left;color:#d14500;">用户留言</span></div>
				 </div>
<form id="form1" method="post" action="?act=save">	
			<div class="row" style="margin-bottom: 10px">
				<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: -5px"  align="left">
				<div class="col-xs-3 col-sm-3 col-md-3" align="right"> 
					<font size="+1">留言标题:</font>
					</div>
				<div class="col-xs-4 col-sm-4 col-md-4"><input  class="form-control mr-sm-2"  type="text" name="title" id="title" /></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: -5px" align="left">
				<div class="col-xs-3 col-sm-3 col-md-3" align="right">
					<font size="+1">留言内容:</font>
				</div>
				<div class="col-xs-7 col-sm-7 col-md-7">
					<textarea   class="form-control mr-sm-2"  name="content" id="content1" cols="45" rows="5" ></textarea>
				</div>
				</div>
			</div>
			<div class="row" style="margin-top: 10px">
				<div class="col-md-12" align="center"><input type="submit" class="btn btn-outline-success my-2 my-sm-0" name="button" id="button" value="留言提交" /></div>
			</div>
			</form>
			<div class="row" style="margin-top: 10px">
				<div class="col-md-12" align="center"><h4>我的留言列表</h4></div>
			</div>
        <?php
			$sql="select * from liuyan where userid='$_SESSION[login]' order by id DESC";
			$res=mysqli_query($conn,$sql);
			while($d=mysqli_fetch_array($res))
			{
			?>
			<div class="row">
				<div class="col-md-12" style="margin-top: -5px" align="left">
					<div class="col-xs-3 col-sm-3 col-md-3" align="right">	
					<font size="+1">留言标题:</font>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8"><font color="blue" size="4"><?php echo $d["title"]?></font></div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 5px" align="left">
				<div class="col-xs-3 col-sm-3 col-md-3" align="right">
					<font size="+1">留言内容:</font>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8"><?php echo $d["content"]?><br><br>时间:<?php echo $d["addtime"]?></div>
				</div>

			</div>
                  <?php
				  if($d["replay"]!="")
				  {
				  ?>
			<div class="row">
				<div class="col-md-12" style="margin-top: -5px" align="left">
			<div class="col-md-2">&nbsp; &nbsp; </div>
				<div class="col-md-8">
					<font>管理回复:</font>
					<font color="red" size="3"><br><?php echo $d["replay"]?><br><br><?php echo $d["rtime"]?></font></div>
				</div>
			</div>
                  <?php
				  }
				  ?>
				  <tr>
				    <td colspan="2" align="right">&nbsp;</td>
			      </tr>
                  <?php
                  }
				  ?>
		         </div>
	        </div>
	     <div class="col-md-4">
			<!--左边的 -->	<?php

			require("right.php");
			?>
</div></div></div>
			<!-- 右边的 -->
<div class="row">
<div class="col-md-12" align="center">
<?php
require("footer.php");
?>	</div></div>
</div>