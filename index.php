<div class="container-fluid">
<div class="container" style="margin-top: 5px">
	<div class="row">
<?php
require("header.php");

?></div>
      <script type="text/javascript">	
		  
		//ajax����WebServer
		$(document).ready(function () {
			var backEndUrl = "http://172.16.144.146/netWebserver/WebService1.asmx/ImgItems";//�������������������޸Ķ˿ں�
			$.ajax({
				type: "POST",
				url: backEndUrl, 
				data: "", //��������һ��Ҫ��ӿ��β�������ͬ data: "{i: 50,j:60}", 
				contentType: "application/json;charset=utf-8",
				dataType: 'json',
				success: function (data,status,jqXHR) {
					// data �Ƿ��ص�����
					// textStatus ����Ϊ"success"��"notmodified"��
					// jqXHR �Ǿ���jQuery��װ��XMLHttpRequest����
					
					returnStr = data.d;//�������ݼ�

					//����һ�������ڴ�ŷָ�����
					var strArray = new Array();
					strArray = returnStr.split("|");//�ַ��ָ�
					
					var tempStr1="";//���ڴ���ֲ�ָ��
					var tempStr2="";//���ڴ���ֲ���Ŀ					
					for(var i=0;i<strArray.length;i++)
					{
						//��ȡ�������ֲ���Ŀ����			
						var strArrayTemp = new Array();
						var childStr = strArray[i];
						strArrayTemp = childStr.split("@");						
						strArrayTemp[1];//���ݱ�������
						strArrayTemp[2];//ͼƬ·��
						
						
						//��ȡ�������ֲ�ָ������
						if(i==0){
							tempStr1 += "<li data-target='#myCarousel' data-slide-to='" + i + "' class='active'></li>"//�ֲ�ָ��
							tempStr2 += "<div class='item active'><img src='" + strArrayTemp[2] + "'><div class='carousel-caption'>" + strArrayTemp[1] + "</div></div>"
						}else{
							tempStr1 += "<li data-target='#myCarousel' data-slide-to='" + i + "'></li>"//�ֲ�ָ��
							tempStr2 += "<div class='item'><img src='" + strArrayTemp[2] + "'><div class='carousel-caption'>" + strArrayTemp[1] + "</div></div>"
						}						
					}
					$("#carousel01").html(tempStr1);
					$("#carousel02").html(tempStr2);				
				},
			});
		});
    </script> 
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div id="myCarousel" class="carousel" data-ride="carousel" style="margin:0px 0px 10px 0px;">
		<!-- �ֲ���Carousel��ָ�� -->
		<ul class="carousel-indicators" id="carousel01">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ul>   
		<!-- �ֲ���Carousel����Ŀ -->
		
		<div class="carousel-inner" id="carousel02">
			<div class="item active"><img width="100%" height="100%" src="img/lunbo1.jpg"></div>
			<div class="item"><img src="img/lunbo2.jpg"></div>
			<div class="item"><img src="img/lunbo3.jpg"></div>
			<div class="item"><img src="img/lunbo4.jpg"></div>
			<div class="item"><img src="img/lunbo1.jpg"></div>
		</div>
		<!-- �ֲ���Carousel������ -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev"> 
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
		</a>
	</div> 
	<script type="text/javascript">
		$(document).ready(function(){
			$("#myCarousel").carousel({
				interval: 2000
			})
		});
	</script>
	</div>
</div> 
		    <!--��ߵ� -->
		    <div style="float: right;width: 99%">
		    <div class="row">
			<div class="col-md-8">
				<!-- ��һ -->
				<div class="row">
					<div class="panel panel-default">
					<div class="row">
						<div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 5px">
							 <span style="color:#d14500;">�Ƽ�ͼ��</span></div>
						<div class="col-md-2 col-sm-2 col-xs-2" align="right" style="margin-top: 5px;" >
							 <a href="./tuijian.php">����>></a></div>
					</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
											<table class="table" style="margin-bottom: -2%">
												<tr align="center" >
                                                <?php
												$sql="select * from shu where tuijian=1 order by id DESC limit 0,5";
												$result= mysqli_query($conn,$sql);
												while($data=mysqli_fetch_array($result)){
												?>
													<td>
														<dl >
															<dd style="margin-left:0;">
																<a href="./goodsDetail.php?goodsId=<?php echo $data['id']?>">
																   <img   class="img-responsive" src="<?php echo $data['tupian']?>"/>
																</a>
															</dd>
															<dt style="margin-top: 5px">
																<font size="-1"><?php echo $data['name']?></font>
															</dt>
															<dt>
																<font size="-1">��Ա��<?php echo $data['huiyuanjia']?>��</font>
															</dt>
														</dl>
													</td>
                                                    <?php
													}
													?>
												</tr>
											</table></div>
					</div>
					</div>
					</div>		
				<!-- ���а� -->
				<!-- �ؼ� -->
				<div class="row">
					<div class="panel panel-default">
					<div class="row">
						<div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 5px;">
							 <span style="color:#d14500;">�ؼ�����</span></div>
						<div class="col-md-2 col-sm-2 col-xs-2" align="right" style="margin-top: 5px;" >
							 <a href="./tejia.php">����>></a></div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table class="table" style="margin-bottom: -2%" >
								<tr align="center">
                                    <?php
										$sql="select * from shu where tejia=1 order by id DESC limit 0,5";
										$result= mysqli_query($conn,$sql);
										while($data=mysqli_fetch_array($result)){
									?>
									<td>
										<dl >
											<dd style="margin-left:0;">
												<a href="./goodsDetail.php?goodsId=<?php echo $data['id']?>">
													<img  class="img-responsive" src="<?php echo $data['tupian']?>"/>
												</a>
											</dd>
										<dt style="margin-top: 5px">
											<font size="-1"><?php echo $data['name']?></font>
										</dt>
										<dt>
											<font size="-1">��Ա��<?php echo $data['huiyuanjia']?>��</font>
										</dt>
										</dl>
									</td>
                                    <?php
									}
									?>
								</tr>
							</table>
						 </div>
						</div>
					</div>
				</div>
				<!-- �ؼ� -->			 
				<!-- ��Ʒ���� -->
				<div class="row">
					<div class="panel panel-default">
					<div class="row">
						<div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 5px;">
							 <span style="color:#d14500;">��Ʒ����</span></div>
						<div class="col-md-2 col-sm-2 col-xs-2"  align="right" style="margin-top: 5px;" >
							 <a href="./new.php">����>></a></div>
					</div>
					 <div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table class="table" style="margin-bottom: -2%">
								<tr align="center">
                                    <?php
										$sql="select * from shu  order by id DESC limit 0,5";
										$result= mysqli_query($conn,$sql);
										while($data=mysqli_fetch_array($result)){
									?>
									<td>
										<dl >
											<dd style="margin-left:0;">
												<a href="./goodsDetail.php?goodsId=<?php echo $data['id']?>">
													<img  class="img-responsive" src="<?php echo $data['tupian']?>"/>
												</a>
											</dd>
										<dt style="margin-top: 5px">
											<font size="-1"><?php echo $data['name']?></font>
										</dt>
										<dt>
											<font size="-1">��Ա��<?php echo $data['huiyuanjia']?>��</font>
										</dt>
										</dl>
									</td>
                                    <?php
									}
									?>
								</tr>
							</table>
						 </div>
						</div>
					</div>
				</div>
				<!-- ��Ʒ���� -->
			</div>	
			<!--��ߵ� -->
<div class="col-md-4">
			<?php
			require("right.php");
			?>
			</div>
			<!-- �ұߵ��û���¼�����ԡ�ͶƱ -->
				</div>	</div>
	<div class="row">
	<div class="col-md-12">
		<center><?php
			require("footer.php");
				?></center></div>
			</div>
		</div>
</div>
