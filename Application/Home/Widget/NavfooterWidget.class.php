<?php
	namespace Home\Widget;
	use Think\Controller;
	class NavfooterWidget extends Controller {

		public function head(){ 
			
			 $this->display('Navfooter:head');
		
		}
		
		public function footer(){ 
			 $this->display('Navfooter:footer');
			
		}
		
		
	}
		
		
		
		
		
		

?>