<?php
defined('BASEPATH')OR exit('No direct script access allowed'); 

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index() {
		if($this->input->post()){
			if($this->LoginModel->Login($this->input->post('email'))){
				header('Location: home');
			}
		}
	   $this->load->view('login'); 
	}
}