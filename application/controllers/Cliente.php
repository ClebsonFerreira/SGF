<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClienteModel');
		$this->load->model('VeiculosModel');
	}

	public function pesquisarID($id)
	{
		$array['Usuario'] = $this->ClienteModel->getID($id);
		$array['Veiculos'] = $this->VeiculosModel->getCarClienteID($id);
		$this->load->view('template/heder');
		$this->load->view('visualizar_cliente',$array);
		$this->load->view('template/footer');
	}

	public function vincularCarros($id)
	{

		$array['Usuario'] = $this->ClienteModel->getUserId($id);
		$array['lista_veiculos'] = $this->VeiculosModel->getAllNotCliente();
		$array['lista_veiculos_cadastrados'] = $this->VeiculosModel->getCarClienteID($id);

		$this->load->view('template/heder');
		$this->load->view('cliente_veiculo',$array);
		$this->load->view('template/footer');
	}
	public function vincularCarrosSelecionados()
	{
			if (!empty($this->input->post("idCliente"))) {
				
				 $listIds = $this->input->post("idCar");
				
				 $array['lista_veiculos_cadastrados'] = $this->VeiculosModel->getCarClienteID($this->input->post("idCliente"));
				
				 $dadosRemov=array();
				
				 if (!empty($listIds)) {

					 foreach ( $array['lista_veiculos_cadastrados'] as  $value) {
						if(!in_array($value->id, $listIds)){
						 $dadosRemov['idCliente'] = $this->input->post("idCliente");
						 $dadosRemov['idCar'][] = $value->id;
					 }
				 }

			 }else{
				foreach ( $array['lista_veiculos_cadastrados'] as  $value) {
				 $dadosRemov['idCliente'] = $this->input->post("idCliente");
				 $dadosRemov['idCar'][] = $value->id;
			 }
		 }

		 if(!empty($dadosRemov)){
			$this->VeiculosModel->removeClientCar($dadosRemov);
		}

		if(!empty($this->input->post("idCar"))){
		 $this->VeiculosModel->updateClientCar($this->input->post());
		}


		$array['Usuario'] = $this->ClienteModel->getUserId($this->input->post("idCliente"));
		$array['lista_veiculos'] = $this->VeiculosModel->getAllNotCliente();
		$array['lista_veiculos_cadastrados'] = $this->VeiculosModel->getCarClienteID($this->input->post("idCliente"));

		$this->load->view('template/heder');
		$this->load->view('cliente_veiculo',$array);
		$this->load->view('template/footer');

		}


	}
}