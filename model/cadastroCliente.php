<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



  

function __construct() {
        # Informações sobre o banco de dados:
        $db_host = "localhost:8080";
        $db_nome = "clinica_m";
        $db_usuario = "root";
        $db_senha = "";
        $db_driver = "mysql";


try{
     
 self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha); 
} catch (PDOException $e){
    
    echo  "<script>alert($e);</script>";   
}


}  

  $statement = ("INSERT INTO clientes (nome, convenio, atendimento) VALUES (:nome, :convenio, :atendimento)");

    $nomeCliente =  filter_input(INPUT_GET, 'nome-cliente', FILTER_SANITIZE_STRING);
    $convenioCliente = filter_input(INPUT_GET, 'convenio-cliente',FILTER_VALIDATE_INT);
    $atendimentoCliente = filter_input(INPUT_GET, 'atendimento-cliente',FILTER_VALIDATE_INT);
    
   
    
    if($statement->execute(':nome',$nomeCliente, ':convenio', $convenioCliente,':convenio', $atendimentoCliente)){
  // Definimos a mensagem de sucesso
  echo '<script>alert("Parabens! Cliente Cadastrado com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
  
}else{
  // Definimos a mensagem de erro
  echo '<script>alert("0.0! Erro ao Cadastrar "); </script>'; 
  echo '<script> window.close(); </script>';
}

    
  