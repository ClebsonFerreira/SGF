<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ClienteModel');
		
	}


	public function clientes()
	{
		$array = array();
		if($this->input->post()){
			if(!empty($this->input->post('nome'))){
				if( $this->ClienteModel->cadastroCliente($this->input->post())) {
					$array['msg'] = "Cadastrado com sucesso!";
					$this->load->view('template/heder');
					$this->load->view('cadastro',$array);
					$this->load->view('template/footer');
				}else{
					$array['msg'] = "Error ao cadastrar";
					$this->load->view('template/heder');
					$this->load->view('cadastro',$array);
					$this->load->view('template/footer');
				}
			}
		}else{
			$this->load->view('template/heder');
			$this->load->view('cadastro',$array);
			$this->load->view('template/footer');
		}

		
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
