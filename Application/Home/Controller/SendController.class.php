<?php
namespace Home\Controller;
use Think\Controller;
//文字页面所有的处理
class SendController extends Controller {
	//展示页
    public function index(){
      
	 if(!$_SESSION['uid']){
		 $this -> success("亲！你还不是捂挡门下的人呢，快拜入捂挡门下吧！！！");
	 }else{
		 
		 $this -> display();
	 }
	  
    }
	
	
	//文字处理页
	public function word(){
		 $data['uid'] = I('post.uid',0,'intval'); 
		 $data['text'] = I('post.word','','strip_tags'); 
		 $data['type'] = 1;
		 $data['time'] = time();
		 
		 //date("H:i:s  Y-m-d");
		 
		$Post = M('post');
		
		 $Post ->data($data) -> add();
		
		
	}
	
	

	//图片处理页
	public function img(){
		
		 $upload = new \Think\Upload();// 实例化上传类    
		 $upload->maxSize   =     3145728 ;// 设置附件上传大小   
		 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		 $upload->autoSub   =  false;    
		
		 $upload->rootPath = "./";
         $upload->savePath  =      'Public/postImg/'; // 设置附件上传目录 
		 $upload->saveName = strrev(time()).rand(100);
		 // 上传文件   
		 $info   =   $upload->upload(); 
		
		 var_dump($info);
		 if(!$info) {// 上传错误提示错误信息       
			$this->error($upload->getError());
		 }else{
			 //大码以后再做
			 
			 /*
			$imgpath = $upload->rootPath.$upload->savePath.$upload->saveName.'.'.$info['img']['ext'];
			echo $imgpath;
			$image = new \Think\Image(); 
			//$image->open($imgpath)->water($upload->rootPath.$upload->savePath.'logoma.png',\Think\Image::IMAGE_WATER_NORTHWEST)->save($imgpath);  
			$image->open($imgpath)->text('捂挡派 5dangpai.com',$upload->rootPath.$upload->savePath.'1.ttf',5,'#004400',\Think\Image::IMAGE_WATER_SOUTHEAST)->save($imgpath);
			*/
			
			
		$data['uid'] = I('post.uid',0,'intval'); 
		 $data['text'] = I('post.text','','strip_tags'); 
		 $data['type'] = 2;
		 $data['time'] = time();
		 $data['img'] = $upload->saveName.'.'.$info['img']['ext'];
		 
		 $Post = M('post');
		 
		 $Post->data($data)->add();
		 
			
			
			
			
          	// 上传成功	 
			$this->success('上传成功！');  
				
		}
		 
		 
		 
		 
		 
		
		 
		 //date("H:i:s  Y-m-d");
		 
		//$Post = M('post');
		
		 //$Post ->data($data) -> add();
		
		
	}
	
	

























































	
}