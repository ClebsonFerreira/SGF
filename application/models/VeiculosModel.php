<?php
defined('BASEPATH')OR exit('No direct script access allowed'); 

class VeiculosModel extends CI_Model {

  public function getLike($UserPlaca)
  {
   $this->db->select('veiculos.* ,clientes.nome');
   $this->db->from('veiculos');
   $this->db ->join('clientes', 'clientes.id = veiculos.id_cliente','left');
   $this->db->like('placa',$UserPlaca );
   $query =  $this->db->get();
   return $query->result();
 }

 public function getAll()
 {

   $this->db->select('veiculos.* ,clientes.nome');
   $this->db->from('veiculos');
   $this->db ->join('clientes', 'clientes.id = veiculos.id_cliente','left');
   $query =  $this->db->get();
   return $query->result();
 }

 public function getUserId($id)
 {

   $this->db->select('veiculos.* , clientes.id,clientes.nome');
   $this->db->from('veiculos');
   $this->db ->join('clientes', 'clientes.id = veiculos.id_cliente','left');
   $this->db->where('veiculos.id', $id);
   $query =  $this->db->get();
   return $query->result();
 }

 public function getCarClienteID($id){
  $this->db->select('placa , id_cliente');
   $this->db->from('veiculos');
   $this->db->where('veiculos.id_cliente', $id);
   $this->db->limit('3');
   $query =  $this->db->get();
   return $query->result();
 }


 public function cadastroVeiculos($dados)
 {

  if ($this->db->insert('veiculos', $dados)) {
    return true;
  }else{
    return false;
  }
}



}