<div class="container-fluid">
<div class="container" style="margin-top: 5px">
	<div class="row">
<?php
require("header.php");

?></div>
      <script type="text/javascript">	
		  
		//ajax访问WebServer
		$(document).ready(function () {
			var backEndUrl = "http://172.16.144.146/netWebserver/WebService1.asmx/ImgItems";//请根据自身部署情况自行修改端口号
			$.ajax({
				type: "POST",
				url: backEndUrl, 
				data: "", //变量名称一定要与接口形参名称相同 data: "{i: 50,j:60}", 
				contentType: "application/json;charset=utf-8",
				dataType: 'json',
				success: function (data,status,jqXHR) {
					// data 是返回的数据
					// textStatus 可能为"success"、"notmodified"等
					// jqXHR 是经过jQuery封装的XMLHttpRequest对象
					
					returnStr = data.d;//返回数据集

					//定义一数组用于存放分割数据
					var strArray = new Array();
					strArray = returnStr.split("|");//字符分割
					
					var tempStr1="";//用于存放轮播指标
					var tempStr2="";//用于存放轮播项目					
					for(var i=0;i<strArray.length;i++)
					{
						//读取并设置轮播项目数据			
						var strArrayTemp = new Array();
						var childStr = strArray[i];
						strArrayTemp = childStr.split("@");						
						strArrayTemp[1];//数据标题名称
						strArrayTemp[2];//图片路径
						
						
						//读取并设置轮播指标数据
						if(i==0){
							tempStr1 += "<li data-target='#myCarousel' data-slide-to='" + i + "' class='active'></li>"//轮播指标
							tempStr2 += "<div class='item active'><img src='" + strArrayTemp[2] + "'><div class='carousel-caption'>" + strArrayTemp[1] + "</div></div>"
						}else{
							tempStr1 += "<li data-target='#myCarousel' data-slide-to='" + i + "'></li>"//轮播指标
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
		<!-- 轮播（Carousel）指标 -->
		<ul class="carousel-indicators" id="carousel01">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ul>   
		<!-- 轮播（Carousel）项目 -->
		
		<div class="carousel-inner" id="carousel02">
			<div class="item active"><img width="100%" height="100%" src="img/lunbo1.jpg"></div>
			<div class="item"><img src="img/lunbo2.jpg"></div>
			<div class="item"><img src="img/lunbo3.jpg"></div>
			<div class="item"><img src="img/lunbo4.jpg"></div>
			<div class="item"><img src="img/lunbo1.jpg"></div>
		</div>
		<!-- 轮播（Carousel）导航 -->
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
		    <!--左边的 -->
		    <div style="float: right;width: 99%">
		    <div class="row">
			<div class="col-md-8">
				<!-- 第一 -->
				<div class="row">
					<div class="panel panel-default">
					<div class="row">
						<div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 5px">
							 <span style="color:#d14500;">推荐图书</span></div>
						<div class="col-md-2 col-sm-2 col-xs-2" align="right" style="margin-top: 5px;" >
							 <a href="./tuijian.php">更多>></a></div>
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
																<font size="-1">会员价<?php echo $data['huiyuanjia']?>￥</font>
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
				<!-- 排行榜 -->
				<!-- 特价 -->
				<div class="row">
					<div class="panel panel-default">
					<div class="row">
						<div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 5px;">
							 <span style="color:#d14500;">特价区域</span></div>
						<div class="col-md-2 col-sm-2 col-xs-2" align="right" style="margin-top: 5px;" >
							 <a href="./tejia.php">更多>></a></div>
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
											<font size="-1">会员价<?php echo $data['huiyuanjia']?>￥</font>
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
				<!-- 特价 -->			 
				<!-- 新品上市 -->
				<div class="row">
					<div class="panel panel-default">
					<div class="row">
						<div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 5px;">
							 <span style="color:#d14500;">新品上市</span></div>
						<div class="col-md-2 col-sm-2 col-xs-2"  align="right" style="margin-top: 5px;" >
							 <a href="./new.php">更多>></a></div>
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
											<font size="-1">会员价<?php echo $data['huiyuanjia']?>￥</font>
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
				<!-- 新品上市 -->
			</div>	
			<!--左边的 -->
<div class="col-md-4">
			<?php
			require("right.php");
			?>
			</div>
			<!-- 右边的用户登录。留言。投票 -->
				</div>	</div>
	<div class="row">
	<div class="col-md-12">
		<center><?php
			require("footer.php");
				?></center></div>
			</div>
		</div>
</div>
