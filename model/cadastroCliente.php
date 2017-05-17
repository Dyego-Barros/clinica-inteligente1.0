<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class cadastroCliente{
    
    public $nomeCliente;
    public $atendimentoCliente;
    public $convenioCliente;
    public $query;
    
    
    public function conect_DB(){
        
 $servername = "localhost:8080";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=clinica_m", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
     echo  "<script>alert(Conexão bem realizado com Data Base!);</script>"; 
    }
catch(PDOException $e){
  echo  "<script>alert(Falha ao tentar Conectar ao Data Base!);</script>" . $e->getMessage();
}  
}
public function setCliente($nomeCliente, $atendimentoCiente, $convenioCliente){
    
    $this->nomeCliente = $nomeCliente;
    $this->atendimentoCliente = $atendimentoCiente;
    $this->convenicoCliente =$convenioCliente;
    
    $this->nomeCliente = filter_input(INPUT_GET,'nome-cliente');
    $this->atendimentoCliente = filter_input(INPUT_GET, 'atendimento-cliente');
    $this->convenioCliente = filter_input(INPUT_GET, 'convenio-cliente');
    
}

public function insertDbCliente($quey){
   
    
    $query = "INSERT INTO clientes(nome, convenio, atenfimento) VALUES ($nomeCliente, $convenioCliente, $atendimentoCliente)";
    
    
}

public function deleteDbCliente(){
    
    $delete =$sql = "DELETE FROM clientes WHERE (nome, convenio, atendimento)";
    
}

public function updateDbCliente(){
    
    $update = "UPDATE clientes SET nome, convenio, atendimento";
    
    
}

public function selectCliente(){
    
    $select = "SELECT id, nome, convenio, atendimento FROM xlientes";
    
    
}



        
        
    
    
    
    
    
    
}


  


  