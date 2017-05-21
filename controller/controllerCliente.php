<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../connect_db/connect_db.php';
include '../model/cadastroCliente.php';

$conexao = new conexao();
$conexao->connect_db();

$novoCliente = new cadastroCliente();
$novoCliente->insertDbCliente();


