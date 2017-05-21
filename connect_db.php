<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class conexao_db{
    
function connect_db() {
        # Informações sobre o banco de dados:
$servername = "localhost";
$username = "root";
$password = "";


try {
   $conn = new PDO("mysql:host=$servername;dbname=clinica", $username, $password);
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
     
    }
catch(PDOException $e){
  echo  "<script>alert(Falha ao tentar Conectar ao Data Base!);</script>" . $e->getMessage();
} 
}
}      
