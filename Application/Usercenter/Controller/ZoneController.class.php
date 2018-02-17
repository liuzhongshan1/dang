<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class UsercenterController extends Controller {
	//个人中心 帖子页
    public function post(){
      
	  
	  
	  if($_GET['uid']!==$_SESSION['uid']){
		 echo "22222222222222222";
		  
	  };
	  
	
	  
	  $this -> display();
		
	  
    }
	
	
	
	//个人资料页
	 public function aboutme(){
      
	  
	  
	  if($_GET['uid']!==$_SESSION['uid']){
		 echo "22222222222222222";
		  
	  };
	  
	
	  
	  $this -> display();
		
	  
    }
	
	

	//密码服务
	 public function password(){
      
	  
	  
	  if($_GET['uid']!==$_SESSION['uid']){
		 echo "22222222222222222";
		  
	  };
	  
	
	  
	  $this -> display();
		
	  
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



	
}