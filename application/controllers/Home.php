<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	    $this->load->view('template/heder');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
