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
    <td colspan = "6"><div align="center" >�û�����</div></td>
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
          <th>�û��ʺ�</th>
          <th>�绰</th>
          <th>email</th>
          <th>����</th>
          <th>ɾ��</th>
          <th>�鿴��Ϣ</th>

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
          <td><div align="center"><a href="user_view.php?id=<?php echo $data1['id'];?>">�鿴�û�</a></div></td>
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
	&nbsp;��վ����ע���û�&nbsp;<?php
		   echo $total;
		  ?>&nbsp;λ&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;λ&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="user.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a>
		<a href="user.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
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
        <a href="user.php?page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a>
		<a href="user.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php }?>

	</div></td>
    <td width="92"><div align="center"><input type="submit" value="ɾ��ѡ��" class="buttoncss" onclick="return confirm('ȷ��Ҫɾ����');">
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
