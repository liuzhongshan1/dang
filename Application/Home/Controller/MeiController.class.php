<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class MeiController extends Controller {
    public function index(){
		$Mei = M('mei');
		 
	  
	  
	  

	  $count = $Mei -> count();
	  $Page = new \Think\Page($count,5);
	  
	  $show = $Page ->show();
	  
	  
	 
	  $list = charu
		
	  $this -> assign('list',$list);
	  $this -> assign('page',$show);
	  
		$this -> display();
    }
	
	
	






















	
}