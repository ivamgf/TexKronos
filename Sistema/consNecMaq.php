<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Consulta de Necessidades de Máquinas</title>
        
        <!-- Bloco de Meta -->
	     <meta charset="utf-8"></meta>
		 <meta name="viewport" content="width=device-width, user-scalable=no, 
		 intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		 <!-- Bloco de Meta -->
		 
		 <!-- Bloco de Link -->
		 
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="/css/styleCadPesFis.css">
		 <!-- Bloco de Link -->
		 
		 <!-- Bloco de Script -->
		 <script src="angular/angular.min.js"></script>
		 <script src="angular/angular-locale_pt-br.js"></script>         
                 <script src="bootstrap/js/jquery.min.js"></script>
                 <script src="bootstrap/js/bootstrap.min.js"></script>
                 
        
    </head>
    <body>
	     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="cadNecMaq.html">NOVO</a></li>
      <li><a href="atualNecMaq.html">EDITAR</a></li>
      <li class="active"><a href="consNecMaq.php">CONSULTAS</a></li>
      <li><a href="delNecMaq.html">EXCLUIR</a></li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="jumbotron">
			<div class="text-center"><p><h3>CONSULTA DE NECESSIDADES DE MÁQUINAS</h3></p></div>
			 <!-- Tabela -->
			
			<table class="table">
			   <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                <form class="formulario" 
                method="post" action="consNecMaq.php">
				
				 <!-- Linha 1.0 -->
				
				<tr>
				     <th>ID</th><th></th><th></th><th></th>
					
				</tr>
				
				<!-- Linha 1.0 -->
				
				<!-- Linha 1.01 -->
				
                <tr>
                
                     <td>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>					 
                  <input class="form-control" type="number" name="id_nmq" disabled>
				     </div>
					 </td>
					 <td>
					 
					 </td>
					 
					 <td>
					 
					 </td>
					 
				</tr>
				
				<!-- Linha 1.01 -->
				
				 <!-- Linha 1.1 -->
				
				<tr>
				     <th>Descrição</th><th>Máquina</th><th>Necessidades de Máquinas</th><th>Nº Operadores</th>
					
				</tr>
				
				<!-- Linha 1.1 -->
				
				<!-- Linha 1.2 -->
				
                <tr>
                
                     <td>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-scissors"></i></span>					 
                  <input class="form-control" type="text" name="descricao_nmq">
				     </div>
					 </td>
					 <td>
					 <div class="input-group"><span class="input-group-addon">
				  <i class="glyphicon glyphicon-glyphicon glyphicon-dashboard"></i></span>
				         <select class="form-control" name="maquina_nmq">
				             <option value="0">---</option>
                             <option value="1">Overlock Simples</option>
                             <option value="2">Ferro de passar</option> 
                             <option value="3">Reta</option>
                             <option value="4">Friso Cob.1agulha</option>
                             <option value="5">Cobertura 2agulhas</option>
                             <option value="6">Manual</option> 
                             <option value="7">Revisora</option>
                             <option value="8">Reta 2agulhas ( abrir peitilho )</option> 							 
                         </select>
						 </div>	
					 </td>
					 <td>
					 <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                         <input class="form-control" type="number" name="necMaq_nmq">
				     </div>
					 </td>
					 <td>
					 <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                         <input class="form-control" type="number" name="quantOper_nmq">
				     </div>
					 </td>
				</tr>
				
				<!-- Linha 1.2 -->
				
				
							
				<!-- Linha 3 -->
				
                <tr>
                     <td>				
                         <input type="submit" class="form-control btn btn-success btn-block" 
                        value="Consultar"> 
				  
				    </td>
				    <td>
				         <input type="reset" class="btn btn-primary btn-block btn-danger"
			             value="Limpar campos"> 
				     </td>
					
					</tr>
                    <tr>					
					 
					 <td>
					   
					 </td>
					 <td>
					   
					 </td>
					  <td>
					   
					 </td>
					 
				</tr>
                
                <!-- Linha 3 -->
				
				<!-- Linha 4 -->
				     <table class="table table-striped">
					     <!-- Linha 4.1 -->
					     <tr>
						 <th>ID</th><th>Descrição</th><th>Máquina</th><th>Necessidades de Máquinas</th><th>Nº Operadores</th>
						 </tr>
						 
						 <?php
				include "conexao.php";
				
				
        

//Bloco de código de conexão
         $host="localhost";
         $user="texkrono_tks";
     	 $pass="tks987456";
     	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão!");
//Bloco de código de conexão


				
				$sql_consultar = mysql_query("SELECT id_nmq, descricao_nmq, maquina_nmq, necMaq_nmq, quantOper 
				                              FROM necMaq_nmq ORDER BY id_nmq");
				while($row = mysql_fetch_array($sql_consultar)){
				$id_nmq = $row['id_nmq'];
				$descricao_nmq = $row['descricao_nmq'];
				$maquina_nmq = $row['maquina_nmq'];
				$necMaq_nmq = $row['necMaq_nmq'];
                $quantOper = $row['quantOper_nmq'];				
				?>
						 
						 <!-- Linha 4.1 -->
						 <!-- Linha 4.2 -->
						 <tr>
						     <td>
						     <?php
				                          echo $id_nmq
				                     ?>
						     </td>
						     <td>
						     <?php
				                          echo $descricao_nmq
				                     ?>
						     </td> 
						     
							 <td>
						     <?php
				                          echo $maquina_nmq
				                     ?>
						     </td>
							 <td>
						     <?php
				                          echo $necMaq_nmq
				                     ?>
						     </td>
							  <td>
						     <?php
				                          echo $quantOper_nmq
				                     ?>
						     </td>
						 </tr>
						 <?php
				                       }
				                 ?>
						 <!-- Linha 4.2 -->
				<!-- Linha 4 -->
				
            </form>
            
            
			     </div>
			   </table>
			   
			    <!-- Tabela -->
			   
            </div>               
        </div>
        
    
    </body>
</html>