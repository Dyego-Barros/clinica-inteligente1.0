<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $nomeCliente = filter_input(INPUT_GET,'nome-cliente');
    $atendimentoCliente = filter_input(INPUT_GET, 'atendimento-cliente');
    $convenioCliente = filter_input(INPUT_GET, 'convenio-cliente');
   

class cadastroCliente{
    
    public $nomeCliente;
    public $atendimentoCliente;
    public $convenioCliente;
 

public function insertDbCliente(){
   
    $stm = $conn->prepara("INSERT INTO clientes (nome, convenio, atendimento) 
    VALUES ('nome-cliente', 'convenio-cliente', 'atendimento-cliente')");
    
     $stm->execute(array(
    ':nome' => $nomeCliente, ':convenio' => $convenioCliente, ':atednimento' => $atendimentoCliente
  ));
    
     if($stm->execute()){
         
          echo  "<script>alert(Cliente Inserido com sucesso!);</script>";
         
     }else{
         
          echo  "<script>alert(Falaha ao inserir Cliente!);</script>";
         
     }   
}

public function deleteDbCliente(){
    
   $stm = $conn->prepara("DELETE FROM clientes WHERE (nome, convenio, atendimento)");
    
     $stm->execute(array(
    ':nome' => $nomeCliente, ':convenio' => $convenioCliente, ':atednimento' => $atendimentoCliente
  ));
    
     if($stm->execute()){
         
          echo  "<script>alert(Cliente Deletado com sucesso!);</script>";
         
     }else{
         
          echo  "<script>alert(Falaha ao deletar Cliente!);</script>";
         
     }
    
}

public function updateDbCliente(){
    
     $stm = $conn->prepara("UPDATE clientes WHERE (nome, convenio, atendimento)");
    
     $stm->execute(array(
    ':nome' => $nomeCliente, ':convenio' => $convenioCliente, ':atednimento' => $atendimentoCliente
  ));
    
     if($stm->execute()){
         
          echo  "<script>alert(Cliente atualizado com sucesso!);</script>";
         
     }else{
         
          echo  "<script>alert(Falaha ao atualizar Cliente!);</script>";
         
     }
}

public function selectCliente(){
    
   $stm = $conn->prepara("SELECT clientes WHERE (nome, convenio, atendimento)");
    
     $stm->execute(array(
    ':nome' => $nomeCliente, ':convenio' => $convenioCliente, ':atednimento' => $atendimentoCliente
  ));
    
     if($stm->execute()){
         
          echo  "<script>alert(Cliente atualizado com sucesso!);</script>";
         
     }else{
         
          echo  "<script>alert(Falaha ao atualizar Cliente!);</script>";
         
     }
}
 
    
}
   


  