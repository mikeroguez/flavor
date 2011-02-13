<?php 
 
class Index_controller extends AppController{

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		
		$this->redirect("index/test",true,null);
		
		$this->render();
	}
	
	public function beforeDispatch(){
		//echo "beforeDispatch\n";
	}
	
	public function beforeRender($output){
		//We can modify the output before $this->render() send the content to screen
		$output = strip_tags($output);
		$output = trim($output);
	}
	
	public function afterRender(){
		//echo "afterRender\n";
	}
}
