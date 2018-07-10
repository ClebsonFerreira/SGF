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
        // echo $id;exit;
    $array['Usuario'] = $this->ClienteModel->getUserId($id);
        // print_r($array);exit;
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
       if (!empty($this->input->post("idCar"))) {

           $this->VeiculosModel->updateClientCar($this->input->post());
           
           $array['Usuario'] = $this->ClienteModel->getUserId($this->input->post("idCliente"));
           $array['lista_veiculos'] = $this->VeiculosModel->getAllNotCliente();
           $array['lista_veiculos_cadastrados'] = $this->VeiculosModel->getCarClienteID($this->input->post("idCliente"));

           $this->load->view('template/heder');
           $this->load->view('cliente_veiculo',$array);
           $this->load->view('template/footer');
       }
   }


}
}