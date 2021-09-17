<?php
require("index.php");
?>
<?php
       include("../conn.php");
       $sql=mysqli_query($conn,"select count(*) as total from user ");
	   $data=mysqli_fetch_array($sql);
	   $total=$data['total'];


?>

<div class="container-fluid">
<div class="container">
<div class="row">
	<div class="col-md-8 col-sm-8 col-xs-8">


<form name="form1" method="post" action="user_del.php">
<table class="table table-bordered">

  <tr>
    <td colspan = "6"><div align="center" >用户管理</div></td>
  </tr>
  <tr>
       <?php
	     $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			}
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;

			}else{
			   $pagecount=$total/$pagesize;

			}
			if(($_GET['page'])==""){
			    $page=1;

			}else{
			    $page=intval($_GET['page']);

			}

             $sql1=mysqli_query($conn,"select * from user  order by id desc limit ".($page-1)*$pagesize.",$pagesize ");


	   ?>
	   <tr>
          <th>用户帐号</th>
          <th>电话</th>
          <th>email</th>
          <th>姓名</th>
          <th>删除</th>
          <th>查看信息</th>

        </tr>
       <?php
	      while($data1=mysqli_fetch_array($sql1))
		     {
	   ?>
	   <tr>
          <td><div align="center"><?php echo $data1['name'];?></div></td>
          <td><div align="center"><?php echo $data1['tel'];?></div></td>
		  <td><div align="center"><?php echo $data1['email'];?></div></td>
		  <td><div align="center"><?php echo $data1['truename'];?></div></td>
          <td><div align="center"><input type="checkbox" name="<?php echo $data1['id'];?>" value=<?php echo $data1['id'];?>></div></td>
          <td><div align="center"><a href="user_view.php?id=<?php echo $data1['id'];?>">查看用户</a></div></td>
        </tr>
		<?php
	        }
		?>
  </tr>
</table></div>
<div class="col-md-8 col-sm-8 col-xs-8">
<table class="table">
  <tr>
    <td width="508"><div align="left">
	&nbsp;本站共有注册用户&nbsp;<?php
		   echo $total;
		  ?>&nbsp;位&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;位&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="user.php?page=1" title="首页"><font face="webdings"> 9 </font></a>
		<a href="user.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="user.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
        <a href="user.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="user.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a>
		<a href="user.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>

	</div></td>
    <td width="92"><div align="center"><input type="submit" value="删除选项" class="buttoncss" onclick="return confirm('确定要删除吗');">
    </div></td>
  </tr>

</table>
</div>

</form>
               
               
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>
