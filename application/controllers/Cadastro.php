<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function clientes()
	{
		$this->load->view('template/heder');
		$this->load->view('cadastro');
		$this->load->view('template/footer');
    }
    public function veiculos()
	{
        echo "Cadastro veiculos";
		// $this->load->view('template/heder');
		// $this->load->view('welcome_message');
		// $this->load->view('template/footer');
    }
    public function financeiro()
	{
        echo "Cadastro financeiro";
		// $this->load->view('template/heder');
		// $this->load->view('welcome_message');
		// $this->load->view('template/footer');
	}
}
