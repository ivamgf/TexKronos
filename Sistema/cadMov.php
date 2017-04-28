<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de Movimentos</title>
        
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
     $descMov_tmv = $_POST['descMov_tmv'];
     $tempo_tmv = $_POST['tempo_tmv'];
     //Variáveis
     //Código de inserção	 
     $sql = mysql_query("INSERT INTO tabMov_tmv(descMov_tmv, tempo_tmv) 
	 VALUES ('$descMov_tmv', '$tempo_tmv')");
	
    //Código de inserção
//Bloco de código de inserção de movimentos	


        ?>
        <?php
        header("Location: cadMov.html");
?>
    </body>
</html>