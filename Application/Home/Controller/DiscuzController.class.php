<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class DiscuzController extends Controller {
    public function index(){
		
		$id = I('get.id',0,'intval');
		
		$Post = M("Post");
		
		$list = $Post -> query("select post.uid,post.text,post.img,post.video,post.like,post.dislike,post.discussNum, user.name,user.headShow from dang_post as post ,dang_user as user where post.uid=user.id and post.pid={$id} limit 15");
		
		
		//评论
		$Replay = M('replay');
		
		$data = $Replay -> query("select * from dang_replay,dang_user where dang_replay.userId=dang_user.id and dang_replay.postId={$id}");
		
		var_dump($data);
		$this -> assign('data',$data);
		$this -> assign('list',$list);
		
		$this -> display();
    }
	
	
	//处理评论内容
	public function content(){
		var_dump($_POST);
		
		
		
		
		
		
		
		
	}
	
	

























































	
}