<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../model/cadastroCliente.php';

$newClient = new cadastroCliente();

$newClient->conect_DB();
 
 $newClient->insertDbCliente($nomeCliente,$atendimentoCliente, $convenioCliente);

