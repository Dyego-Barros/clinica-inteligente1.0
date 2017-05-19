<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
     
         <title>Curso bootstrap</title>
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="css/main.css" rel="stylesheet">
    </head>  
        <body>
            
            <div class="container">
                <div class="row">
                   <div class="col-xs-12">
                       <form action="controller/controllerCliente.php" method="GET">
                           
                       <div class="input-group">
                           <span class="input-group-addon">Em@il</span>
                           <input type="text" name="nome-cliente" class="form-control" placeholder="Insira seu email"/>
                         </div>
                         <div class="input-group">
                             <input type="text" name="convenio-cliente" class="form-control" placeholder="Insira seu nome"/>
                             <span class="input-group-addon">Insira seu Nome</span>
                         
                         </div>
                         <div class="input-group">
                             <input type="text" name="atendimento-cliente" class="form-control" placeholder="Insira seu nome"/>
                             <span class="input-group-addon">Insira seu Nome</span>
                             <button type="submit" class="btn-default">Enviar</button>
                         </div>
                          
                       </form>
                    </div>
                </div>
            </div>
            
           
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>            
        </body>   
   
</html>