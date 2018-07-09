<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('ClienteModel');
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
}