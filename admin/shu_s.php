<?php
require("index.php");
?>
<?php
  include("../conn.php");
?>

<div class="container-fluid">
<div class="container">
	<div class="row">
		<div class="col-md-8" align="center">
			

	
<form name="form1" method="post" action="?act=search">
        图书名称:
	  <font color="#000000"><input type="text" name="name" id="name"></font>
	  <font color="#000000"><input type="submit" name="button" id="button" value="查询"></font>
	
  </div>
	</div>
	
  <?php
  if($act=="search")
  {
	  $where =" where 1=1";
	  if($name=="") exit("请输入图书名称");
	  if($name!="") $where.=" and name like '%$name%'";
  ?>
  <?php
$q="select count(*) as total from shu $where ";
	   $sql=mysqli_query($conn,$q);
	   $data=mysqli_fetch_array($sql);
	   $total=$data['total'];
	   if($total==0){
	     echo "暂无符合条件的图书!";
	   }
	   else
	    {
?>
 <div class="row">
 	<div class="col-md-8">
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
        <td height="20" colspan="10"><div align="center" >图书信息编辑</div></td>
      </tr>
      <tr>
        <td width="102" bgcolor="#FFFFFF"><div align="center">图书名称</div></td>
        <td width="86" bgcolor="#FFFFFF"><div align="center">出版社</div></td>
        <td width="71" bgcolor="#FFFFFF"><div align="center">I S B N</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">大类</div></td>
		<td width="60" bgcolor="#FFFFFF"><div align="center">小类</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
        <td width="68" bgcolor="#FFFFFF"><div align="center">操作</div></td>
      </tr>
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
$s="select * from shu $where order by addtime  desc limit ".($page-1)*$pagesize.",$pagesize";
           $sql1=mysqli_query($conn,$s);
		   while($list=mysqli_fetch_array($sql1))
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF">
        <div align="center"><?php echo $list['name'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo get_name($list['chubanshe'],'chubanshe')?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $list['xinghao'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo get_name($list['dalei'],'categories')?></div></td>
		<td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo get_name($list['xiaolei'],'categories')?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $list['shichangjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $list['huiyuanjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="shu_edit.php?id=<?php echo $list['id'];?>"><font color="#000000">修改</font></a> |  <a href="shu_del.php?id=<?php echo $list['id']; ?>" class="ajaxlink"  onclick="return confirm('确定要删除吗');" ><font color="#000000">删除</font></a></div></td>
      </tr>
	 <?php
	    }
      ?>
</table>
 	</div>
 </div>
 <div class="row">
 	<div class="col-md-8">
 		
 
<table width="750" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"></td>
    <td width="585"><div align="right">&nbsp;符合条件的图书
        <?php
		   echo $total;
		  ?>
        &nbsp;件&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;件&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="shu.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="shu.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="shu.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
        <a href="shu.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="shu.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="shu.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
	</div>
 </div>
<p>&nbsp;</p>
</form>
	<div class="row"><div class="col-md-8">
	
  <?php
	}
		}
		else
		echo "请先点击查询";
  ?>
  	</div>
	</div>
	</div></div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>