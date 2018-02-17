<?php
namespace Home\Controller;
use Think\Controller;
//精选
class IndexController extends Controller {
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
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
}