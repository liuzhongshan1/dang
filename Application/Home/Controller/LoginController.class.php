<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class LoginController extends Controller {
	//登录验证
    public function login(){
      
	 $postData['phone'] = I("post.user");
	 $postData['pwd'] = I("post.pwd");
	 
	 
	 $user = M("user");
	 
	 $data =$user -> where($postData) -> find();
	
	 if($data){
		 //成功
			
			session(array('name'=>'session_userid','expire'=>3600));
			session('username',$data['name']);
			session('uid',$data['id']);
			
			cookie('email',$data['email'],3600); 
			cookie('phone',$data['phone'],3600); 
			cookie('headShow',$data['headShow'],3600); 
			cookie('sex',$data['sex'],3600); 
			cookie('age',$data['age'],3600); 
			
			
		
			$this -> success('天下英雄出捂挡，一入江湖遍地伤！！！');
				
		 
	 }else{
		 
		$this -> error('再想一下，不对啊');
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  
    }
	
	
	//注册
	public function register(){
		
		
		
		
		
		
		
	}
	
	//退出
	
	public function  over(){
		session(null); 
		
	}

























































	
}