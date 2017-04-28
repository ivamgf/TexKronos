<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Cadastro de Pessoas Jurídicas</title>
        
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


     //Bloco de código de inserção de pessoa Jurídica
	 //Variáveis
     $razaoSoc_tpj = $_POST['razaoSoc_tpj'];
     $nomeFan_tpj = $_POST['nomeFan_tpj'];
     $ramo_tpj = $_POST['ramo_tpj'];
	 $end_tpj = $_POST['end_tpj'];
	 $telCom_tpj = $_POST['telCom_tpj'];
	 $site_tpj = $_POST['site_tpj'];
	 $email_tpj = $_POST['email_tpj'];
	 $redeSocial1_tpj = $_POST['redeSocial1_tpj'];
	 $redeSocial2_tpj = $_POST['redeSocial2_tpj'];
	 $obs_tpj = $_POST['obs_tpj'];
	 $cnpj_tpj = $_POST['cnpj_tpj'];
	 $cep_tpj = $_POST['cep_tpj'];
	 $codCidade_tpj = $_POST['codCidade_tpj'];
     //Variáveis
     //Código de inserção	 
     $sql = mysql_query("INSERT INTO tabPessoaJur_tpj(razaoSoc_tpj, nomeFan_tpj, ramo_tpj,
	                    end_tpj, telCom_tpj, site_tpj, email_tpj, redeSocial1_tpj, redeSocial2_tpj, obs_tpj,
                        cnpj_tpj, cep_tpj, codCidade_tpj) 
	 VALUES ('$razaoSoc_tpj', '$nomeFan_tpj', '$ramo_tpj',
	                    '$end_tpj', '$telCom_tpj', '$site_tpj', '$email_tpj', '$redeSocial1_tpj', 
						'$redeSocial2_tpj', '$obs_tpj',
                        '$cnpj_tpj', '$cep_tpj', '$codCidade_tpj')");
	
    //Código de inserção
//Bloco de código de inserção de pessoa Jurídica	


        ?>
        <?php
        header("Location: cadPesJur.html");
?>
    </body>
</html>