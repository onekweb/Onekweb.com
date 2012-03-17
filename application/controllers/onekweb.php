<?php

class Onekweb extends CI_Controller{
	
	public function __construct()
	{
		parent:: __construct();	
	}
	
	public function index()
	{
		$data['title'] = "Welcome to Mario Onekanda' s website";
		$this->load->view('header', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}
	
}

?>
