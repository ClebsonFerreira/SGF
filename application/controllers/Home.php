<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('ClienteModel');
		$this->load->model('VeiculosModel');
		
	}


	public function index()
	{
		$this->load->view('template/heder');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function pesquisar()
	{
		if($this->input->post()){
			if($this->input->post("pesquisa") == 1){
				
				$UserName = $this->input->post("pesquisa_cliente");

				if(isset($UserName) && !empty($UserName)){
					$array['ListaUsuario'] = $this->ClienteModel->getLike($UserName);
					foreach ($array['ListaUsuario'] as $key => $value ) {
					$array['placa'][$key] = $this->VeiculosModel->getCarClienteID($value->id);

				}
					
				}else{
					$array['ListaUsuario'] = array();
					$array['placa'] =array();
				}
				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');

			}else if($this->input->post("listarTodos") == 2){
				$array['ListaUsuario'] = $this->ClienteModel->getAll();

				foreach ($array['ListaUsuario'] as $key => $value ) {
					$array['placa'][$key] = $this->VeiculosModel->getCarClienteID($value->id , 3);

				}

				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');
			}else if($this->input->post("Limpar") == 3){
				// redirect('/Home', 'location');
				$array['ListaUsuario'] = array();
				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');
			}

			if($this->input->post("pesquisa_veiculo") == 1){
				$Placa = $this->input->post("pesquisa_veiculos");
				if(isset($Placa) && !empty($Placa)){
					$array['ListaVeiculos'] = $this->VeiculosModel->getLike($Placa);
					
				}else{
					$array['ListaVeiculos'] = array();
				}
				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');

			}else if($this->input->post("listarTodos_veiculo") == 2){
				$array['ListaVeiculos'] = $this->VeiculosModel->getAll();
				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');

			}else if($this->input->post("Limpar_veiculo") == 3){
				$array['ListaVeiculos'] = array();
				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');

			}

		}
	}
}
