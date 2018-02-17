<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>捂挡派</title>

    
    <link href="/5dangpai.com/Public/reception/css/bootstrap.min.css"  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
  
  
  
  
		<?php echo W('Navfooter/head');?>
		
		
		
		
		
		
		
		
		<div class="container" style="margin-top:60px;">
			
			
			
		
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
					  <li class="active">
						  <a href="#word" data-toggle="tab">
							<img src="/5dangpai.com/Public/reception/img/word.png"  class="img-rounded img-responsive" width="30" height="40">
						  </a>
					  </li>
					  
					  <li><a href="#img" data-toggle="tab">
							<img src="/5dangpai.com/Public/reception/img/img.png"  class="img-rounded img-responsive" width="30" height="40">
					  </a></li>
					  <li><a href="#video" data-toggle="tab">
							<img src="/5dangpai.com/Public/reception/img/video.png"  class="img-rounded img-responsive" width="30" height="40">
					  </a></li>
					  <li><a href="#imgshow" data-toggle="tab">
							<img src="/5dangpai.com/Public/reception/img/video.png"  class="img-rounded img-responsive" width="30" height="40">
					  </a></li>
					</ul>

					<!-- Tab panes -->
					

					<div class="tab-content">
						  <div class="tab-pane active fade in " id="word">
								<form role="form" style="margin-top:20px;" action="/5dangpai.com/index.php/Home/Send/word" method="post">
									
									<textarea class="form-control" rows="4" name="word" placeholder="少侠！！水浅王八多，遍地是大哥！谨言慎行！！！"></textarea>
									<input type="hidden" value="<?php echo ($_SESSION['uid']); ?>" name="uid">
									<center>
									<input type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;" value="提交" >
									</center>
								</form>
							
						  </div>
					  <div class="tab-pane fade" id="img">
								<form role="form" enctype="multipart/form-data" style="margin-top:20px;"  action="/5dangpai.com/index.php/Home/Send/img" method="post">
									<div style="border:1px dashed #66ef69; max-width:140px;height:50px; background-image: url(/happy/Public/Home/img/bg.png); margin-bottom:14px;">
										<input type="file"  value=""  class="btn-lg" style="opacity:0;" name="img">
									</div>
									<textarea class="form-control" rows="4" name="text"></textarea>
									<input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>"></input>
									<center>
									<input type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;" value="提交">
									</center>
								</form>
					  </div>
					  <div class="tab-pane fade" id="video">
									<form role="form" style="margin-top:20px;" enctype="multipart/form-data" style="margin-top:20px;"  action="/happy/index.php/Home/Post/VideoAfter" method="post"  >
										<div style="border:1px dashed #66ef69; max-width:140px;height:50px; background-image: url(/happy/Public/Home/img/bg.png); margin-bottom:14px;">
											<input type="file"  value=""  class="btn-lg" style="opacity:0;" name="video">
										</div>
										<textarea class="form-control" rows="4" name="content"></textarea>
										<input type="hidden" name="uid" value="43"></input>
										<center>
										<input type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;" value="提交">
										</center>
									</form>
					  </div>
					  <div class="tab-pane fade" id="imgshow">
								<form role="form" style="margin-top:20px;" >
									
									<textarea class="form-control" rows="4"></textarea>
									
									<center>
									<input type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;" value="提交">
									</center>
								</form>
					  </div>
					</div>


				
				</div>
				<div class="col-lg-3">
					<img class="img-responsive" src="/5dangpai.com/Public/reception/img/erwei.png" height="100">
					<img class="img-responsive" src="/5dangpai.com/Public/reception/img/rule.png" height="100">
					
				</div>
				<div class="col-lg-1"></div>
				
			</div>
		</div>
		
		

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/5dangpai.com/Public/reception/js/bootstrap.min.js"></script>
  </body>
</html>