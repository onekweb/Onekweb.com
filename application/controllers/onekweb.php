<?php

class Onekweb extends CI_Controller{
	
	public function __construct()
	{
		parent:: __construct();	
		$this->load->helper('html');
	}
	
	public function index()
	{
		$data['title'] = "Welcome to Mario Onekanda' s website";
		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
}

?>
