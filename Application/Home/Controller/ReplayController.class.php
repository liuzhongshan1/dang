<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class ReplayController extends Controller {
   
	//处理评论内容
	public function content(){
		var_dump($_POST);
		
		$Replay = M("replay");
		
		$data['postId'] = I('post.pid',0,'intval');
		$data['userId'] = I('post.uid',0,'intval');
		$data['content'] = I('post.content',0,'strip_tags');
		
		$Replay->add($data);
		
		
		
		
	}
	
	

























































	
}