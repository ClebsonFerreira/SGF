<?php
defined('BASEPATH')OR exit('No direct script access allowed'); 

class LoginModel extends CI_Model {

    public function login($email)
    {
        $query = $this->db->get_where('clientes', array('email' =>$email));
        return $query->result();
    }

   public function getAll()
   {
        $query = $this->db->get('clientes');
        return $query->result();
       
   }
	
}