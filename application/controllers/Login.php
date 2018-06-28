<?php
defined('BASEPATH')OR exit('No direct script access allowed'); 

class Login extends CI_Controller {

	public function index() {
		if($this->input->post()){
			if($this->input->post('email') == "teste@teste" && $this->input->post('senha') == "123"){
				header('Location: home');
			}
		}
	   $this->load->view('login'); 
	}
}