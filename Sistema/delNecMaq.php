<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Exclusão de Necessidades de Máquinas</title>
        
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


     //Bloco de código de exclusão de máquinas
	 //Variáveis
	 $id_nmq = $_POST['id_nmq'];
     //Variáveis
     //Código de exclusão
     
	 $excluir = mysql_query("DELETE from necMaq_nmq WHERE id_nmq = '$id_nmq' ") 
	            or die("Não foi possível realizar a exclusão!");
	 
     
     	
    //Código de exclusão
//Bloco de código de exclusão de máquinas	


        ?>
        <?php
        header("Location: delNecMaq.html");
?>
    </body>
</html>