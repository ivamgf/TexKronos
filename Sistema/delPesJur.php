<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Exclusão de Pessoas Jurídicas</title>
        
    </head>
    <body>
        <?php
        

//Bloco de código de conexão
         $host="localhost";
         $user="texkrono_tks";
     	 $pass="tks987456";
     	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão2!");
//Bloco de código de conexão


     //Bloco de código de exclusão de pessoa Jurídica
	 //Variáveis
	 $id_tpj = $_POST['id_tpj'];
     $razaoSoc_tpj = $_POST['razaoSoc_tpj'];
     $nomeFan_tpj = $_POST['nomeFan_tpj'];
     //Variáveis
     //Código de Exclusão
     
	 $excluir = mysql_query("DELETE from tabPessoajur_tpj WHERE id_tpj = '$id_tpj' ") or die("Não foi possível realizar a exclusão!");
	            	
    //Código de Exclusão
//Bloco de código de Exclusão de pessoa Jurídica	


        ?>
        <?php
        header("Location: delPesJur.html");
?>
    </body>
</html>