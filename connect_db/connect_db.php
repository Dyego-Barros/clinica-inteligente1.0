<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class conexao{
    
function connect_db() {
        # Informações sobre o banco de dados:
$servername = "localhost:8080";
$username = "root";
$password = "";
$db_name = "clinica_m";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
     
    }
catch(PDOException $e){
  echo  "<script>alert(Falha ao tentar Conectar ao Data Base!);</script>" . $e->getMessage();
} 
}
}
$tdd = new conexao();
$tdd->connect_db();        
