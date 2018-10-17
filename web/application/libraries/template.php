<?php 

class Template {
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
	}

	public function loadpage($page,$data)
	{   
		$data["titlebrowser"] = "ATAP KITA";

		$this->_ci->load->view('header',$data);
		$this->_ci->load->view($page,$data);
		$this->_ci->load->view('footer',$data);
	}
}

?>