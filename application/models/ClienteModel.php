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

    public function getAll()
    {
     $this->db->select('*');
     $this->db->from('clientes');
     $query =  $this->db->get();

     return $query->result();
 }

 public function getUserId($id){
   $this->db->select('clientes.* ,veiculos.placa');
   $this->db->from('clientes');
   $this->db ->join('veiculos', 'clientes.id = veiculos.id_cliente','left');
   $this->db->where('clientes.id', $id);
   $query = $this->db->get();
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