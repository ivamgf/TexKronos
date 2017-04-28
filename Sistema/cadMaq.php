<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de Máquinas</title>
        
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
     $descMaq_tmq = $_POST['descMaq_tmq'];
     $tempo_tmq = $_POST['tempo_tmq'];
	 $interf_tmq = $_POST['interf_tmq'];
     $tipoLinha_tmq = $_POST['tipoLinha_tmq'];
	 $consLinha_tmq = $_POST['consLinhaAlg_tmq'];
	 $consLinha_tmq = $_POST['consLinhaPol_tmq'];
     //Variáveis
     //Código de inserção	 
     $sql = mysql_query("INSERT INTO tabMaq_tmq(descMaq_tmq, tempo_tmq, interf_tmq, tipoLinha_tmq, consLinhaAlg_tmq, consLinhaPol_tmq ) 
	 VALUES ('$descMaq_tmq', '$tempo_tmq', '$interf_tmq', '$tipoLinha_tmq', '$consLinhaAlg_tmq', '$consLinhaPol_tmq')");
	
    //Código de inserção
//Bloco de código de inserção de movimentos	


        ?>
        <?php
        header("Location: cadMaq.html");
?>
    </body>
</html>