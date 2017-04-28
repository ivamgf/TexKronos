<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Consulta de Máquinas</title>
        
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
      <li><a href="cadMaq.html">NOVO</a></li>
      <li><a href="atualMaq.html">EDITAR</a></li>
      <li class="active"><a href="consMaq.php">CONSULTAS</a></li>
      <li><a href="delMaq.html">EXCLUIR</a></li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="jumbotron">
			<div class="text-center"><p><h3>CONSULTA DE MOVIMENTOS</h3></p></div>
			 <!-- Tabela -->
			
			<table class="table">
			   <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                <form class="formulario" 
                method="post" action="consMaq.php">
				
				 <!-- Linha 1.0 -->
				
				<tr>
				     <th>ID</th><th></th><th></th>
					
				</tr>
				
				<!-- Linha 1.0 -->
				
				<!-- Linha 1.01 -->
				
                <tr>
                
                     <td>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>					 
                  <input class="form-control" type="number" name="id_tmq" disabled>
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
				     <th>Descrição</th><th>Tempo</th><th>Interferência em %</th>
					
				</tr>
				
				<!-- Linha 1.1 -->
				
				<!-- Linha 1.2 -->
				
                <tr>
                
                     <td>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-scissors"></i></span>					 
                  <input class="form-control" type="text" name="descMaq_tmq">
				     </div>
					 </td>
					 <td>
					 <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                         <input class="form-control" type="number" name="tempo_tmq">
				     </div>
					 </td>
					 <td>
					 <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                         <input class="form-control" type="number" name="interf_tmq">
				     </div>
					 </td>
					 
				</tr>
				
				<!-- Linha 1.2 -->
				
				<!-- Linha 1.3 -->
				
				<tr>
				     <th>Tipo Linha</th><th>Consumo Linha</th><th></th>
					
				</tr>
				
				<!-- Linha 1.3 -->
				
				<!-- Linha 1.4 -->
				
                <tr>
                
                     <td>
                  
				  <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                         <input class="form-control" type="number" name="consLinhaAlg_tmq">
				     </div>				  
				  
					 </td>
					 <td>
					 <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                         <input class="form-control" type="number" name="consLinhaPol_tmq">
				     </div>
					 </td>
					 <td>
					 
					 </td>
					 
				</tr>
				
				<!-- Linha 1.4 -->
				
				
							
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
						 <th>ID</th><th>Descrição</th><th>Tempo</th><th>Interferência em %</th>
						 <th>Consumo Linha Algodão</th><th>Consumo Linha Poliéster</th>
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


				
				$sql_consultar = mysql_query("SELECT id_tmq, descMaq_tmq, tempo_tmq, interf_tmq, consLinhaAlg_tmq, consLinhaPol_tmq FROM tabMaq_tmq 
				ORDER BY id_tmq");
				while($row = mysql_fetch_array($sql_consultar)){
				$id_tmq = $row['id_tmq'];
				$descMaq_tmv = $row['descMaq_tmq'];
				$tempo_tmq = $row['tempo_tmq'];
				$interf_tmq = $row['interf_tmq'];
				$consLinhaAlg_tmq = $row['consLinhaAlg_tmq'];
				$consLinhaPol_tmq = $row['consLinhaPol_tmq'];                			
				?>
						 
						 <!-- Linha 4.1 -->
						 <!-- Linha 4.2 -->
						 <tr>
						     <td>
						     <?php
				                          echo $id_tmq
				                     ?>
						     </td>
						     <td>
						     <?php
				                          echo $descMaq_tmq
				                     ?>
						     </td> 
						     
							 <td>
						     <?php
				                          echo $tempo_tmq
				                     ?>
						     </td>
							 <td>
						     <?php
				                          echo $interf_tmq
				                     ?>
						     </td>
						     <td>
						     <?php
				                          echo $consLinhaAlg_tmq
				                     ?>
						     </td>
							 <td>
						     <?php
				                          echo $consLinhaPol_tmq
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