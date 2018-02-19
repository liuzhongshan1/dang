<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>捂挡派</title>

    
    <link href="/Public/reception/css/bootstrap.min.css"  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
  
  
  
  
		<?php echo W('Navfooter/head');?>
		
		
		
		
		
		
		
		
		<div id="content" class="container" style="margin-top:60px;">
			<div class="row">
				<div class="col-md-7">
					

					
					
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default" style="margin-top:15px;-moz-box-shadow:5px 5px 8px #333333; -webkit-box-shadow:5px 5px 8px #333333; box-shadow:5px 5px 8px #333333;">
												<div class="panel-heading" style="background:white;">
													<a href="/index.php/Home/Discuz/index/uid/<?php echo ($vo["uid"]); ?>">
														<img src="/Public/user/head/<?php echo ($vo["headShow"]); ?>"  class="img-circle" height="30">
													</a>
												</div>
											
												<div class="panel-body" style="text-indent:2em;">
																								
													<a href="/index.php/Home/Discuz/index/id/<?php echo ($vo["pid"]); ?>" style="font-size: 16px;line-height: 1.8;word-wrap: break-word;color: #333;margin-bottom: 10px;text-decoration: none;">
														<p><?php echo ($vo["text"]); ?>
														</p>
													</a>
												
												</div>
											
											<div class="panel-heading" style="height:50px;">
												<div class="user-footer" width="100%">
													<div class="user-footer-left" style="width:50%;float:left">
														<div class="col-md-3 col-sm-3 col-xs-3 text-center" style="font-size:12px;">
															<span class="glyphicon glyphicon-thumbs-up"></span>
															
															<?php echo ($vo["like"]); ?>
															
														</div>
														<div class="col-md-3 col-sm-3 col-xs-3 text-center" style="font-size:12px;">
															<span class="glyphicon glyphicon-thumbs-down"></span>
															<?php echo ($vo["dislike"]); ?>											</div>
														<div class="col-md-3 col-sm-3 col-xs-3 text-center" style="font-size:12px;">
															<span class="glyphicon glyphicon-comment"></span>
															<?php echo ($vo["discussNum"]); ?>
														</div>
														
													</div>
													<div class="user-footer-right" style="width:50%;float:right;">
														
													
													</div>
													
													
												</div>
												
												
											</div>
												
														
											
											
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
								
								
								
								
								
								
								
								<?php echo ($page); ?>
								
								
				</div>
				<div class="col-md-1">
					<a href="/index.php/Home/Send/index"><img src="/Public/reception/img/post.png" class="img-responsive img-thumbnail" height="40" width="40" style="position:fixed;  bottom:150px;"></a>
				</div>
				
				

			
			
			</div>
			
			
			
			
			
			
			
			
			
			
			
	
			
			
		</div>
		
		
   
		<?php echo W('Navfooter/footer');?>
   
   
   
   
   
 


   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/reception/js/bootstrap.min.js"></script>
  </body>
</html>