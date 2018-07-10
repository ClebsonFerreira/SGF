<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
    public function __construct(){
		parent::__construct();
		$this->load->model('VeiculosModel');
		
	}


	public function index()
	{
		$this->load->view('template/heder');
		$this->load->view('home1');
		$this->load->view('template/footer');
	}

	public function teste()
	{
		$array=array(dados=>'nome');
		print_r($array);
		echo"Minha linguagen favorita";
	}


    
		public function pesquisarV()
		{
			if($this->input->post()){
				if($this->input->post("pesquisa") == 1){
					$UserName = $this->input->post("pesquisa_veiculos");
					if(isset($UserName) && !empty($UserName)){
						$array['Listaveiculos'] = $this->VeiculosModel->getLike($UserName);
						
					}else{
						$array['Listaveiculos'] = array();
					}
					$this->load->view('template/heder');
					$this->load->view('home1',$array);
					$this->load->view('template/footer');
				   
				}else if($this->input->post("listarTodos") == 2){
					$array['Listaveiculos'] = $this->VeiculosModel->getAll();
					$this->load->view('template/heder');
					$this->load->view('home1',$array);
					$this->load->view('template/footer');
				}else if($this->input->post("Limpar") == 3){
					// redirect('/Home', 'location');
					$array['Listaveiculos'] = array();
					$this->load->view('template/heder');
					$this->load->view('home1',$array);
					$this->load->view('template/footer');
	
	
			}
		}
    }
}
