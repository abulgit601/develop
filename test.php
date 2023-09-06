<?php
class test extends MY_Controller{
	
	function testdropship(){
		parent::MY_Controller();
		$this->load->model ( "ajio/testdropshipmodel" );
	}
	
	function download($ordernumber){
echo "test";die;
echo "hi";die;
}

?>
