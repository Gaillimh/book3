<?php
require("index.php");
include("check_login.php");
include("../conn.php");
include("fun.php");
//修改保存
if($action=="save")
{
if ($upfile!="")
{
$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);
move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
$uploadfile="admin/".$uploadfile;
$addtime=date("Y-m-d");
$sql="update shu set name='$name',jianjie='$jianjie',xinghao='$xinghao',tupian='$uploadfile',dalei='$dalei',xiaolei='$xiaolei',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',chubanshe='$chubanshe',tuijian='$tuijian',tejia='$tejia',shuliang='$shuliang' where id=".$_GET['id']."";
	}
else
$sql="update shu set name='$name',jianjie='$jianjie',xinghao='$xinghao',dalei='$dalei',xiaolei='$xiaolei',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',chubanshe='$chubanshe',tuijian='$tuijian',tejia='$tejia',shuliang='$shuliang' where id=".$_GET['id']."";

mysqli_query($conn,$sql);
echo "<script>alert('图书修改成功!');location.href='shu.php';</script>";
}
//取数据
  $sql1=mysqli_query($conn,"select * from shu where id=".$_GET['id']."");
 $data1=mysqli_fetch_array($sql1);
?>
<script language = "JavaScript">
var onecount;
onecount = 0;
subcat = new Array();
<?php
$count=0;
$sql="select * from categories where reid!=0";
$result=mysqli_query($conn,$sql);
  while($rs=mysqli_fetch_array($result))
  {
?>
subcat[<?php echo $count;?>] = new Array("<?php echo $rs['name'];?>","<?php echo $rs['reid'];?>","<?php echo $rs['id'];?>");
<?php
    $count++;
}
?>
onecount=<?php echo $count?>;
function getCity(locationid)
{
    document.form1.xiaolei.length = 0;

    var locationid=locationid;

    var i;
    //document.form1.xiaolei.options[0] = new Option('选择子分类','');
    for (i=0;i < onecount; i++)
    {
        if (subcat[i][1] == locationid)
        {
        document.form1.xiaolei.options[document.form1.xiaolei.length] = new Option(subcat[i][0], subcat[i][2]);
        }
    }

}

</script>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7E7E7" colspan = "2"><div align="center" >更改图书信息</div></td>
  </tr>
        <script language="javascript">
	function chkinput(form)
	{
	  if(form.name.value=="")
	   {
	     alert("请输入图书名称!");
		 form.name.select();
		 return(false);
	   }

	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入图书会员价!");
		 form.huiyuanjia.select();
		 return(false);
	   }



	  if(form.shichangjia.value=="")
	   {
	     alert("请输入图书市场价!");
		 form.shichangjia.select();
		 return(false);
	   }


	   if(form.chubanshe.value=="")
	   {
	     alert("请输入图书出版社!");
		 form.chubanshe.select();
		 return(false);
	   }

	   if(form.xinghao.value=="")
	   {
	     alert("请输入图书I S B N!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入图书数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入图书简介!");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="?action=save&id=<?php echo $_GET['id'];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">图书名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="name" size="25" class="inputcss" value="<?php echo $data1['name'];?>">
            </div></td>
          </tr>
  		<tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">图书图片：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $data1['shichangjia'];?>">
                元&nbsp;&nbsp;会员价：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $data1['huiyuanjia'];?>">
                元</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">图书类型：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <?php
    getfenlei($data1['dalei'],$data1['xiaolei']);
	?>
            </div></td>
          </tr>

          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">图书出版社：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
              <select name="chubanshe" id="chubanshe">
  <?php
  $sql="select * from chubanshe order by id DESC";
 $res=mysqli_query($conn,$sql);
 while($rs=mysqli_fetch_array($res))
 {
	 ?>

	  <option value="<?php echo $rs['id']?>" <?php if($rs['id']==$data1['chubanshe']) echo "selected"; ?>><?php echo $rs['name']?></option>
	 <?php
	 }
  ?>

  </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">图书I S B N：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php echo $data1['xinghao'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="tuijian" class="inputcss" >
                  <option value=1 <?php if($data1['tuijian']==1) {echo "selected";}?>>是</option>
                  <option value=0 <?php if($data1['tuijian']==0) {echo "selected";}?>>否</option>
                </select>
            </div></td>
          </tr> <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">是否特价：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="tejia" class="inputcss" >
            <option selected value=1>是</option>
            <option value=0>否</option>
          </select>
     </div>
      </td>
      </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">图书数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $data1['shuliang'];?>">
            </div></td>
          </tr>

          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">图书简介：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $data1['jianjie'];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
            </div></td>
          </tr>
        </form>
</table>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
</html>
