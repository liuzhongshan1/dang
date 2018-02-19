<?php if (!defined('THINK_PATH')) exit();?><nav id="nav" class="navbar navbar-default navbar-fixed-top">
				  <div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
	</button>
					 
					  <a class="navbar-brand" style="margin-top:1px;" href="/index.php/Home/Text/index">
						<!--
						<img src="/Public/reception/img/logo.png" height="35">
						-->
						捂挡派
					  </a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  
					
					  <ul class="nav navbar-nav navbar-left ">
					
						<li ><a href="/index.php/Home/index/index" ><span class="glyphicon glyphicon-home">精选</span></a></li>
						<li ><a href="/index.php/Home/Text/index" ><span class="glyphicon glyphicon-pencil">文字</span></a></li>
						<li><a href="/index.php/Home/Img/index" ><span class="glyphicon glyphicon-picture">图片</span></a></li>
						<li><a href="/happy/index.php/Home/Index/Video" ><span class="glyphicon glyphicon-film">视频</span></a></li>
							<li><a href="/Video/index" ><span class="glyphicon glyphicon-film">最新</span></a></li>
							
						<li><a href="/happy/index.php/Home/Index/Imgshow" ><span class="glyphicon glyphicon-film">妹子</span></a></li>
						<li><a href="#" ><span class="glyphicon glyphicon-film">待开发</span></a></li>
						
					  </ul>
					  <ul class="nav navbar-nav navbar-right " style="margin-left:40px;">
						<li >
						
						<?php if(empty($_SESSION['uid'])): ?><button class="btn btn-default" style="height:50px; font-size:20px;" data-toggle="modal" data-target="#myModal">登录</button>
						<?php else: ?>
							<a style="display:inline" href="/index.php/Usercenter/Center/post/uid/<?php echo (session('uid')); ?>"><img src="/Public/user/head/user.jpg" height="50" width="50" class="img-circle"></a><?php endif; ?>
						
					
					
						
						<button class="btn btn-default" style="height:50px; font-size:20px;">皮肤</button></li>
						
						
						<?php if(empty($_SESSION['uid'])): else: ?>
							<a style="display:inline" href="/index.php/Home/Login/over">
							<button class="btn btn-default" style="height:50px; font-size:20px;">退出</button></a><?php endif; ?>
						
						
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
</nav> 









<!-- Modal -->
<div class="modal fade container" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">捂挡门人</h4>
		  </div>
		  <div class="modal-body">
				
						 <div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<form action="/index.php/Home/Login/login" method="post">
									<div class="form-group has-success has-feedback">
									  <label class="control-label" for="inputGroupSuccess1"></label>
									  <div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" name="user" placeholder="手机号或者邮箱">
									  </div>
									  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
									  <span id="inputGroupSuccess1Status" class="sr-only"></span>
									</div>
									<div class="form-group has-success has-feedback">
									  <label class="control-label" for="inputGroupSuccess1"></label>
									  <div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="text" class="form-control" id="inputGroupSuccess1"  name="pwd" aria-describedby="inputGroupSuccess1Status" placeholder="口令">
									  </div>
									 
									  <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
									</div>
									<br>
									<input class="btn btn-primary btn-block" value="登录" type="submit">
									
									</form>
									
									<div style="text-align:center;">
										<a>忘记密码？</a>
										<a>注册</a>
									</div>
								</div>
								<div class="col-md-3"></div>
								
								
						 </div>
				
						<hr>
						<div style="text-align:center;">
							<img src="/Public/reception/img/sanfang.png">
					    </div>
						
			
			
				
			
			
		  </div>
		 
		</div>
  </div>
</div>
   


<script>
	

</script>