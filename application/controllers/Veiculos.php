<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('VeiculosModel');
	}

    public function pesquisarID($id)
    {
        // echo $id;exit;
        $array['veiculo'] = $this->VeiculosModel->getUserId($id);
        // print_r($array);exit;
        $this->load->view('template/heder');
		$this->load->view('visualizar_veiculos',$array);
		$this->load->view('template/footer');
    }
}