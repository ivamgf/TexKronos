<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Exclusão de Parâmetros do Sistemas</title>
        
    </head>
    <body>
        <?php
        

//Bloco de código de conexão
         $host="localhost";
         $user="texkrono_tks";
     	 $pass="tks987456";
     	 $dbname="texkrono_texkronos_tks";
         $conexao = mysql_connect($host,$user,$pass) or die("Não foi possível realizar a conexão!");
         mysql_select_db($dbname)or die("Não foi possível realizar a conexão!");
//Bloco de código de conexão


     //Bloco de código de exclusão de parâmetros do sistema
	 //Variáveis
	 $id_tps = $_POST['id_tps'];
	 //Variáveis
     //Código de exclusão

	 $excluir = mysql_query("DELETE from tabParSis_tps WHERE id_tps = '$id_tps' ") or die("Não foi possível realizar a exclusão!");
	 
     //Código de exclusão
//Bloco de código de exclusão de parâmetros do sistema	


        ?>
        <?php
        header("Location: delParSist.html");
?>
    </body>
</html>