<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ClienteModel');
		$this->load->model('VeiculosModel');
		
		
	}


	public function clientes()
	{
		$array = array();
		if($this->input->post()){
			if(!empty($this->input->post('nome'))){
				if( $this->ClienteModel->cadastroCliente($this->input->post())) {
					$array['msg'] = "Cadastro efetuado!";
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
		$array = array();
		if($this->input->post()){
			if(!empty($this->input->post('marca'))){
				if( $this->VeiculosModel->cadastroVeiculos($this->input->post())) {
					$array['msg'] = "Cadastro efetuado!";
					$this->load->view('template/heder');
					$this->load->view('veiculos',$array);
					$this->load->view('template/footer');
				}else{
					$array['msg'] = "Error ao cadastrar";
					$this->load->view('template/heder');
					$this->load->view('veiculos',$array);
					$this->load->view('template/footer');
				}
			}
		}else{
			$this->load->view('template/heder');
			$this->load->view('veiculos',$array);
			$this->load->view('template/footer');
		}

		
	}
    public function financeiro()
	{
		$array = array();
		if($this->input->post()){
			if(!empty($this->input->post('nome'))){
				if( $this->ClienteModel->cadastroVeiculos($this->input->post())) {
					$array['msg'] = "Cadastro efetuado!";
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
	}