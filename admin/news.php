<?php
include("../conn.php");
 require("index.php");
if($act=="del")
mysqli_query($conn,"delete from news where id=$id");
?>
<?php
  $sql1=mysqli_query($conn,"select * from news order by addtime desc ");
?>
<form name="form1" method="post" action="?act=del">
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7E7E7" colspan = "3"><div align="center" >新闻公告管理</div></td>
  </tr>

      <tr>
        <td width="330" bgcolor="#FFFFFF"><div align="center">新闻公告主题</div></td>
        <td width="75" bgcolor="#FFFFFF"><div align="center">操作</div></td>
		        <td width="80" height="25" bgcolor="#FFFFFF"><div align="center">删除</div></td>

      </tr>
	    <?php

		   while($info1=mysqli_fetch_array($sql1))
		    {
	  ?>
	  <tr>

        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info1['title'];?></div></td>
	    <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="news_edit.php?id=<?php echo $info1['id'];?>"><font color="#000000">查看编辑</font></a></div></td>
		 <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="?act=del&id=<?php echo $info1['id'];?>"><font color="#000000">删除</font></a></div></td>
	  </tr>
	  <?php
	       }

	  ?>

</table>


</form>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>

