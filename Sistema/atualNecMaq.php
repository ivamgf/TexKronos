<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Atualização de Necessidades de Máquinas</title>
        
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


     //Bloco de código de atualização de máquinas
	 //Variáveis
	 $id_nmq = $_POST['id_nmq'];
     $descricao_nmq = $_POST['descricao_nmq'];
     $maquina_nmq = $_POST['maquina_nmq'];
	 $necMaq_nmq = $_POST['necMaq_nmq'];
     $quantOper = $_POST['quantOper_nmq'];
	 //Variáveis
     //Código de atualização

     $atualizar = mysql_query("UPDATE necMaq_nmq SET descricao_nmq = '$descricao_nmq'  , maquina_nmq = '$maquina_nmq',
                              necMaq_nmq = '$necMaq_nmq'  , quantOper_nmq = '$quantOper_nmq'	 
						WHERE id_nmq = '$id_nmq' ") or die("Não foi possível realizar a atualização!");
	 
     	
    //Código de atualização
//Bloco de código de atualização de máquinas	


        ?>
        <?php
        header("Location: atualNecMaq.html");
?>
    </body>
</html>