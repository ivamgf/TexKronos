<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de Parâmetros do Sistemas</title>
        
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


     //Bloco de código de atualização de parâmetros do sistema
	 //Variáveis
	 $id_tps = $_POST['id_tps'];
     $necPes_tps = $_POST['necPes_tps'];
     $esfFis_tps = $_POST['esfFis_tps'];
     $estVis_tps = $_POST['estVis_tps'];
	 $posicao_tps = $_POST['posicao_tps'];	 
	 $retMin_tps = $_POST['retMin_tps'];	 
	 $ambiencia_tps = $_POST['ambiencia_tps'];
	 $qtdTur_tps = $_POST['qtdTur_tps'];	 
	 $minTur_tps = $_POST['minTur_tps'];	 
	 $minIntProd_tps = $_POST['minIntProd_tps'];	 
	 $qtdGrupCel_tps = $_POST['qtdGrupCel_tps'];	 
	 $custMin_tps = $_POST['custMin_tps'];
	 //Variáveis
     //Código de atualização

     $atualizar = mysql_query("UPDATE tabParSis_tps SET necPes_tps = '$necPes_tps'  , esfFis_tps = '$esfFis_tps', 
	                    estVis_tps = '$estVis_tps', posicao_tps = '$posicao_tps',
						retMin_tps = '$retMin_tps', ambiencia_tps = '$ambiencia_tps', qtdTur_tps = '$qtdTur_tps', 
						minTur_tps = '$minTur_tps', minIntProd_tps = '$minIntProd_tps', 
                        qtdGrupCel_tps = '$qtdGrupCel_tps', custMin_tps = '$custMin_tps' 
						WHERE id_tps = '$id_tps' ") or die("Não foi possível realizar a atualização!");	 
     
    //Código de atualização
//Bloco de código de atualização de parâmetros do sistema	


        ?>
        <?php
        header("Location: atualParSist.html");
?>
    </body>
</html>