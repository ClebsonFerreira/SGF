<?php
defined('BASEPATH')OR exit('No direct script access allowed'); 

class ClienteModel extends CI_Model {

    public function getLike($UserName)
    {
        $this->db->select('*');
        $this->db->from('clientes');
        $this->db->like('nome',$UserName );
        $query =  $this->db->get();
        return $query->result();
    }

    public function getAll(){
        $query =  $this->db->get('clientes');
        return $query->result();
    }

    public function getUserId($id){
        $query = $this->db->get_where('clientes', array('id' =>$id));
        return $query->result();
    }

    public function cadastroCliente($dados)
	{
		if ($this->db->insert('clientes', $dados)) {
			return true;
		}else{
			return false;
		}
	}

}