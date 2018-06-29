<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
    public function __construct(){
		parent::__construct();
		$this->load->model('ClienteModel');
		
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
					
				}else{
					$array['ListaUsuario'] = array();
				}
				$this->load->view('template/heder');
				$this->load->view('home',$array);
				$this->load->view('template/footer');
               
            }else if($this->input->post("listarTodos") == 2){
                $array['ListaUsuario'] = $this->ClienteModel->getAll();
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
		}
    }
}
