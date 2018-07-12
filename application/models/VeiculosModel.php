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

 public function getAllNotCliente()
 { 
  $this->db->select('*');
  $this->db->from('veiculos');
  $this->db->where('veiculos.id_cliente', null);
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

public function getCarClienteID($id ,$limit = 0)
{
  $this->db->select('*');
  $this->db->from('veiculos');
  $this->db->where('veiculos.id_cliente', $id);
  if ($limit != 0) {
    $this->db->limit($limit);  
  }
  $query =  $this->db->get();
  return $query->result();
}

public function updateClientCar($dados)
{
  $data = array(
    'id_cliente' => $dados["idCliente"]
  );
  foreach ($dados['idCar'] as $value) {
    $this->db->where('id', $value);
    $this->db->update('veiculos',$data); 
  }

}

public function removeClientCar($dados)
{
 $data = array(
  'id_cliente' => null
);
 foreach ($dados['idCar'] as $value) {
  $this->db->where('id', $value);
  $this->db->update('veiculos',$data); 
}
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