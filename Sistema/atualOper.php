<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Atualização de Operações</title>
        
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


     //Bloco de código de atualização de Operações
	 //Variáveis
	 $id_top = $_POST['id_top'];
     $operacao_top = $_POST['operacao_top'];
     //Variáveis
     //Código de atualização

     $atualizar = mysql_query("UPDATE tabOperacoes_top SET operacao_top = '$operacao_top' 
	                          WHERE id_top = '$id_top' ") or die("Não foi possível realizar a atualização!");
     	 
     //Código de atualização
//Bloco de código de atualização de Operações	


        ?>
        <?php
        header("Location: atualOper.html");
?>
    </body>
</html>