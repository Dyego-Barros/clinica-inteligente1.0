<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  


class cadastroCliente{   
 

public function insertDbCliente(){
    
    include '../connect_db/connect_db.php';
    $conn = new conexao_db();
    $conn->connect_db();
    
      $nomeCliente = filter_input(INPUT_GET,"nome-cliente");
    $atendimentoCliente = filter_input(INPUT_GET, "atendimento-cliente");
    $convenioCliente = filter_input(INPUT_GET, "convenio-cliente");   
    
        
        $stm = ("INSERT INTO clientes (nome, convenio, atendimento) 
    VALUES ($nomeCliente, $atendimentoCliente, $convenioCliente)");
    
    
    
     if($conn->execute($stm) === TRUE){
         
          echo  "<script>alert(Cliente Inserido com sucesso!);</script>";
         
     }else{
         
          echo  "<script>alert(Falaha ao inserir Cliente!);</script>";
         
     }  
     
     $conn->close();
        
   
   
   
}



}
 
    

   


  