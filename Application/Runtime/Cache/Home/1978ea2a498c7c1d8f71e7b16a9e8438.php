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
					<div class="col-md-8">
				
								<!--循环-->
								<div class="panel panel-default" style="margin-top:15px;-moz-box-shadow:2px 2px 0px #333333; -webkit-box-shadow:2px 2px 0px #333333; box-shadow:2px 2px 0px #333333;">
										<div class="panel-heading" style="background:white;">
											
												<img src="/Public/user/head/<?php echo ($list["0"]["headShow"]); ?>"  class="img-circle" height="30">
											
										</div>
									<div class="panel-body" style="text-indent:2em;">
										<?php echo ($list["0"]["text"]); ?>
										
										
										<img src="/Public/postImg/<?php echo ($list["0"]["img"]); ?>" style="margin: 0 auto;class="img-responsive img-thumbnail">
										
													
									</div>
									
									<div class="panel-heading" style="background-color:white;">
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-10">
												<blockquote class="blockquote-reverse" style="font-size:12px; ">
													  <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Integer posuere erat a ante.</strong>
													  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
												</blockquote>
											</div>
										</div>
										
										
								
									</div>
									<div class="row">
										<div class="col-md-6 col-xs-6 col-sm-6" >
											<button class="btn btn-block btn-primary btn-sm" style="-moz-box-shadow:4px 6px 5px #333333; -webkit-box-shadow:4px 6px 5px #333333; box-shadow:4px 6px 5px #333333;">上一条</button>
										</div>
										<div class="col-md-6 col-xs-6 col-sm-6">
											<button class="btn btn-block  btn-primary btn-sm" style="-moz-box-shadow:4px 6px 5px #333333; -webkit-box-shadow:4px 6px 5px #333333; box-shadow:4px 6px 5px #333333;">下一条</button>
										</div>
									</div>
									
									<div class="panel-heading" style="height:50px;">
										<div class="user-footer" width="100%">
											<div class="user-footer-left" style="width:50%;float:left">
												<div class="col-md-3 col-sm-3 col-xs-3 text-center" style="font-size:12px;">
													<span class="glyphicon glyphicon-thumbs-up"></span>
													<?php echo ($list["0"]["like"]); ?>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 text-center" style="font-size:12px;">
													<span class="glyphicon glyphicon-thumbs-down"></span>
													<?php echo ($list["0"]["dislike"]); ?>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 text-center" style="font-size:12px;">
													<span class="glyphicon glyphicon-edit"></span>
													<?php echo ($list["0"]["discussNum"]); ?>
												</div>
												
											</div>
											<div class="user-footer-right" style="width:50%;float:right;">
											
											
											</div>
											
										</div>
										
									</div>
									
								</div>
								
								<br>
								<br>
								<br>
								<br>
							<div class="table-responsive panel">
								
								<table class="table">
								
									<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
											<td style="width:10%;"><img src="/Public/user/head/<?php echo ($data["headShow"]); ?>" class="img-circle" width="30"></td>
											<td style="width:80%"><?php echo ($data["content"]); ?></td>
											<td style="width:10%">
												<div style="font-size:12px;">
													<span class="glyphicon glyphicon-thumbs-up"></span>
													<?php echo ($data["like"]); ?>
												</div>
											</td>
										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									
									
									
									
									
								</table>
									
							</div>
							
							<div class="row">	
								
											<form action="/index.php/Home/Replay/content" method="post">
												<div class="col-md-10">
													<textarea class="form-control " rows="1" style=" border:3px solid red;" placeholder="非本派弟子"  name="content"></textarea>
												</div>
												<input type="hidden" value="<?php echo I('get.id');?>" name="pid">
												<input type="hidden" value="<?php echo I('session.uid');?>" name="uid">
												<div class="col-md-2">
													<button type="submit" class="btn btn-danger btn-lg">点评一下</button>
												</div>
												
												
											</form>
									
							</div>
									
								
							
					
					
					</div>
					<div class="col-md-4 hidden-xs hidden-sm ">
						<p style="font-size:30px;">绝不打广告</p>
						<p style="font-size:30px;">直到大家把网站玩坏了为止</p>
						<p style="font-size:30px;">等待新功能！！！</p>
						
						
					</div>
					
					
			
					
					
					
				</div>
	
		</div>
		
		
		
		
		

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/reception/js/bootstrap.min.js"></script>
  </body>
</html>