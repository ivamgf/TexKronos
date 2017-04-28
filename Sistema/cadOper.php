<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de Operações</title>
        
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


     //Bloco de código de inserção de movimentos
	 //Variáveis
     $operacao_top = $_POST['operacao_top'];
     //Variáveis
     //Código de inserção	 
     $sql = mysql_query("INSERT INTO tabOperacoes_top(operacao_top) 
	 VALUES ('$operacao_top')");
	
    //Código de inserção
//Bloco de código de inserção de movimentos	


        ?>
        <?php
        header("Location: cadNecMaq.html");
?>
    </body>
</html>