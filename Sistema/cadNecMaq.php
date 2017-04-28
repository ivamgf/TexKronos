<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de Necessidades de Máquinas</title>
        
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
     $descricao_nmq = $_POST['descricao_nmq'];
     $maquina_nmq = $_POST['maquina_nmq'];
	 $necMaq_nmq = $_POST['necMaq_nmq'];
     $quantOper = $_POST['quantOper_nmq'];
	 //Variáveis
     //Código de inserção	 
     $sql = mysql_query("INSERT INTO necMaq_nmq(descricao_nmq, maquina_nmq, necMaq_nmq, quantOper ) 
	 VALUES ('$descricao_nmq', '$maquina_nmq', '$necMaq_nmq', '$quantOper_nmq')");
	
    //Código de inserção
//Bloco de código de inserção de movimentos	


        ?>
        <?php
        header("Location: cadNecMaq.html");
?>
    </body>
</html>