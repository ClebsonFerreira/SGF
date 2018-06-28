<?php
defined('BASEPATH')OR exit('No direct script access allowed'); 

class CadastroModel extends CI_Model {

    public function __contruct(){
        $this->load->database("cadastro");
    }
    
	
}