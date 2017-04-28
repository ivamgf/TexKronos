<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Consulta de Pessoas Jurídica</title>
        
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
      <li><a href="cadPesJur.html">NOVO</a></li>
      <li><a href="atualPesJur.html">EDITAR</a></li>
      <li class="active"><a href="consPesJur.php">CONSULTAS</a></li>
      <li><a href="delPesJur.html">EXCLUIR</a></li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="jumbotron">
			<div class="text-center"><p><h3>CONSULTA DE PESSOAS JURÍDICAS</h3></p></div>
			 <!-- Tabela -->
			
			<table class="table">
			   <div class="container col-xs-3 col-sm-3 col-md-12 col-lg-12 text-center">
                <form class="formulario" 
                method="post" action="consPesFis.php">
				
				 <!-- Linha 1 -->
				
				<tr>
				     <th>ID</th><th>Razão Social</th><th>Nome Fantasia</th><th>CNPJ</th>
					
				</tr>
				
				<!-- Linha 1 -->
				
				<!-- Linha 2 -->
				
                <tr>
				
                <td>
                  <div class="input-group"><span class="input-group-addon">
				  <i class="glyphicon glyphicon-filter"></i></span>				
                  <input class="form-control" type="number" name="id_tpj" disabled>
				  
				  </div>
				     </td>
					 
                      <td>
                          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                          <input class="form-control" type="text" name="razaoSoc_tpj">				     	     
				     </div>
					 </td>
					 <td>
					     <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                         <input class="form-control" type="text" name="nomeFan_tpj">				     	     
				         </div>
					 </td>
					 <td>
					     <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>					 
                         <input class="form-control" type="number" name="cnpj_tpj">				     	     
				         </div>
					 </td>
					 
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
					  <td>
					   
					 </td>
					 
				</tr>
                
                <!-- Linha 3 -->
				
				<!-- Linha 4 -->
				     <table class="table table-striped">
					     <!-- Linha 4.1 -->
					     <tr>
						 <th>ID</th><th>Razão Social</th><th>Nome Fantasia</th><th>CNPJ</th> 
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


				
				$sql_consultar = mysql_query("SELECT id_tpj, razaoSoc_tpj, nomeFan_tpj, cnpj_tpj FROM tabPessoaJur_tpj ORDER BY id_tpj");
				while($row = mysql_fetch_array($sql_consultar)){
				$id_tpj = $row['id_tpj'];
				$razaoSoc_tpj = $row['razaoSoc_tpj'];
				$nomeFan_tpj = $row['nomeFan_tpj'];
				$cnpj_tpj = $row['cnpj_tpj'];											
				?>
						 
						 <!-- Linha 4.1 -->
						 <!-- Linha 4.2 -->
						 <tr>
						     <td>
						     <?php
				                          echo $id_tpj
				                     ?>
						     </td>
						     <td>
						     <?php
				                          echo $razaoSoc_tpj
				                     ?>
						     </td> 
						     
							 <td>
						     <?php
				                          echo $nomeFan_tpj
				                     ?>
						     </td>
							 <td>
						     <?php
				                          echo $cnpj_tpj
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