<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('ClienteModel');
    $this->load->model('VeiculosModel');
  }

  public function index()
  {
   $array['Clientes'] = $this->ClienteModel->getAll();
   $array['Veiculos'] = $this->VeiculosModel->getAll();

   $totalPagamento = 0;
   foreach ($array['Veiculos'] as $veiculo) {
    foreach ($array['Clientes']  as $key=> $cliente) {
      if($veiculo->id_cliente == $cliente->id){
       $totalPagamento = $totalPagamento +$veiculo->valor;
       $array['valor_total'][$key] = $this->ClienteModel->getValor($cliente->id);
     }
     
   }
   
 }
 $array['totalPagamento'] = $totalPagamento;
    // print_r($array);exit;
 $this->load->view('template/heder');
 $this->load->view('financeiro',$array);
 $this->load->view('template/footer');
}

public function pesquisar(){


  if($this->input->post("pesquisa") == 1){


    $UserName = $this->input->post("pesquisa_cliente");

    if(isset($UserName) && !empty($UserName)){
      $array['Clientes'] = $this->ClienteModel->getLike($UserName);
      $array['Veiculos'] = $this->VeiculosModel->getAll();

      $totalPagamento = 0;
      foreach ($array['Veiculos'] as $veiculo) {
        foreach ($array['Clientes']  as $key=> $cliente) {
          if($veiculo->id_cliente == $cliente->id){
           $totalPagamento = $totalPagamento +$veiculo->valor;
           $array['valor_total'][$key] = $this->ClienteModel->getValor($cliente->id);
         }

       }

     }
     $array['totalPagamento'] = $totalPagamento;
    // print_r($array);exit;
     $this->load->view('template/heder');
     $this->load->view('financeiro',$array);
     $this->load->view('template/footer');
   }

 }else if($this->input->post("listarTodos") == 2){
   $array['Clientes'] = $this->ClienteModel->getAll();
   $array['Veiculos'] = $this->VeiculosModel->getAll();

   $totalPagamento = 0;
   foreach ($array['Veiculos'] as $veiculo) {
    foreach ($array['Clientes']  as $key=> $cliente) {
      if($veiculo->id_cliente == $cliente->id){
       $totalPagamento = $totalPagamento +$veiculo->valor;
       $array['valor_total'][$key] = $this->ClienteModel->getValor($cliente->id);
     }
     
   }
   
 }
 $array['totalPagamento'] = $totalPagamento;
    // print_r($array);exit;
 $this->load->view('template/heder');
 $this->load->view('financeiro',$array);
 $this->load->view('template/footer');

}else{
 $array['Clientes'] = $this->ClienteModel->getAll();
 $array['Veiculos'] = $this->VeiculosModel->getAll();

 $totalPagamento = 0;
 foreach ($array['Veiculos'] as $veiculo) {
  foreach ($array['Clientes']  as $key=> $cliente) {
    if($veiculo->id_cliente == $cliente->id){
     $totalPagamento = $totalPagamento +$veiculo->valor;
     $array['valor_total'][$key] = $this->ClienteModel->getValor($cliente->id);
   }
   
 }
 
}
$array['totalPagamento'] = $totalPagamento;
    // print_r($array);exit;
$this->load->view('template/heder');
$this->load->view('financeiro',$array);
$this->load->view('template/footer');
}






}

public function pesquisarID($id)
{

  $array['Usuario'] = $this->ClienteModel->getUserId($id);
        // print_r($array);exit;
  $this->load->view('template/heder');
  $this->load->view('financeiro',$array);
  $this->load->view('template/footer');
}
}