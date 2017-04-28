<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Consulta de operadores</title>
        
        <!-- Bloco de Meta -->
	     <meta charset="utf-8"></meta>
		 <meta name="viewport" content="width=device-width, user-scalable=no, 
		 intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		 <!-- Bloco de Meta -->
		 
		 <!-- Bloco de Link -->
		 
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="/css/styleCadUsers.css">
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
      
      <li class="active"><a href="consOper.php">CONSULTAS</a></li>
      
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="jumbotron">
			<div class="text-center"><p><h3>CONSULTA DE OPERADORES</h3></p></div>
			 <!-- Tabela -->
			
			<table class="table">
			   <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                <form class="formulario" 
                method="post" action="consOper.php">
				
				 <!-- Linha 1 -->
				
				<tr>
				     <th>ID</th><th>Operador</th>
					
				</tr>
				
				<!-- Linha 1 -->
				
				<!-- Linha 2 -->
				
                <tr>
				
                <td>
                  <div class="input-group"><span class="input-group-addon">
				  <i class="glyphicon glyphicon-filter"></i></span>				
                  <input class="form-control" type="number" name="id_tpf" disabled>
				  
				  </div>
				     </td>
					 
                      <td>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                  <input class="form-control" type="text" name="nome_tpf">
				     	     
				     </td></div>
					 
					 
					 
				</tr>
				
				<!-- Linha 2 -->
				
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
					 
				</tr>
                
                <!-- Linha 3 -->
				
				<!-- Linha 4 -->
				     <table class="table table-striped">
					     <!-- Linha 4.1 -->
					     <tr>
						 <th>ID</th><th>Operador</th> 
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


				
				$sql_consultar = mysql_query("SELECT id_tpf, nome_tpf FROM tabPessoaFisica_tpf WHERE funcao_tpf = 5 
				                            ORDER BY nome_tpf");
				while($row = mysql_fetch_array($sql_consultar)){
				$id = $row['id_tpf'];
				$operador = $row['nome_tpf'];
								
				?>
						 
						 <!-- Linha 4.1 -->
						 <!-- Linha 4.2 -->
						 <tr>
						     <td>
						     <?php
				                          echo $id
				                     ?>
						     </td>
						     <td>
						     <?php
				                          echo $operador
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