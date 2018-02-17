<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class TextController extends Controller {
    public function index(){
      
	  $Post = M("post");
	  
	  
	  

	  $count = $Post -> count();
	  $Page = new \Think\Page($count,5);
	  
	  $show = $Page ->show();
	  
	  
	 // $list = $Post -> order('time') ->limit($Page->firstRow.','.$Page->listRows) -> select();
	  //var_dump($list);
	
	  $list = $Post->query(" select *  from dang_post,dang_user where dang_post.uid = dang_user.id and dang_post.type=1 limit {$Page->firstRow},{$Page->listRows}") ;

	  
	  $this -> assign('list',$list);
	  $this -> assign('page',$show);
	  
	  //测试
	  //  $Data = M("post");
   // #$List = $Data->find($id);
   // $List = $Data->query("select * from dang_post ,dang_user where dang_post.uid=dang_user.id");        
    
   // var_dump($List);
	  
	  
	  
	  
	  
	  
	  
	  $this->display();
	  
    }
	
	
	//远程下载图片
	public function ceshi(){
		
		 $Post = M("shenghuifu");
		$data = $Post->where('id=2')->find();
		
		echo $data['post_head'];
		
		
		function download($url, $path = './Public/'){
			  $ch = curl_init();
			  curl_setopt($ch, CURLOPT_URL, $url);
			  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
			  $file = curl_exec($ch);
			  curl_close($ch);
			  $filename = pathinfo($url, PATHINFO_BASENAME);
			  $resource = fopen($path . $filename, 'a');
			  fwrite($resource, $file);
			  fclose($resource);
			}
					
					
		
		//download($data['post_head']);
		
		
		
		/*
		
		
select b.*,dang_user.name as replay_name form
(select a.*,dang_replay.uid as replay_uid from
 (select danat_post.*,dang_user.* from dang_post left join dang_user on dang_post.uid=dang_user.uid ) as a 
left join dang_replay on dang_replay.post_id = a.post_id) as b
left join dang_user on dang_user.uid = b.reply_uid



		
		
		*/
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
	
	

























































	
}