<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Atualização de Pessoas Físicas</title>
        
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


     //Bloco de código de atualização de pessoa Física
	 $id_tpf = $_POST['id_tpf'];
     $nome_tpf = $_POST['nome_tpf'];
     $nomeSocial_tpf = $_POST['nomeSocial_tpf'];
     $dtNascimento_tpf = $_POST['dtNascimento_tpf'];
	 $dtAdmissao_tpf = $_POST['dtAdmissao_tpf'];
	 $end_tpf = $_POST['end_tpf'];
     $cpf_tpf = $_POST['cpf_tpf'];
     $rg_tpf = $_POST['rg_tpf'];
	 $telRes_tpf = $_POST['telRes_tpf'];	 
	 $telCel_tpf = $_POST['telCel_tpf'];
     $telCom_tpf = $_POST['telCom_tpf'];
     $ramal_tpf = $_POST['ramal_tpf'];
	 $endCom_tpf = $_POST['endCom_tpf'];	 
     $codCid_tpf = $_POST['codCid_tpf'];
     $codSex_tpf = $_POST['codSex_tpf'];
	 $cargo_tpf = $_POST['cargo_tpf'];	 
	 $funcao_tpf = $_POST['funcao_tpf'];	 
	 $obs_tpf = $_POST['obs_tpf'];
     $email_tpf = $_POST['email_tpf'];
     $redeSocial_tpf = $_POST['redeSocial_tpf'];
	 $site_tpf = $_POST['site_tpf'];
	 $cep_tpf = $_POST['cep_tpf'];
     
     $atualizar = mysql_query("UPDATE tabPessoaFisica_tpf SET nome_tpf = '$nome_tpf'  , nomeSocial_tpf = '$nomeSocial_tpf', 
	                    dtNascimento_tpf = '$dtNascimento_tpf', dtAdmissao_tpf = '$dtAdmissao_tpf', 
						end_tpf = '$end_tpf', cpf_tpf = '$cpf_tpf', rg_tpf = '$rg_tpf', telRes_tpf = '$telRes_tpf', 
						telCel_tpf = '$telCel_tpf', telCom_tpf = '$telCom_tpf', 
                        ramal_tpf = '$ramal_tpf', endCom_tpf = '$endCom_tpf', 
						codCid_tpf = '$codCid_tpf', codSex_tpf = '$codSex_tpf', cargo_tpf = '$cargo_tpf', 
						funcao_tpf = '$funcao_tpf', obs_tpf = '$obs_tpf', email_tpf = '$email_tpf', 
						redeSocial_tpf = '$redeSocial_tpf', site_tpf = '$site_tpf', cep_tpf = '$cep_tpf' 
                        WHERE id_tpf = '$id_tpf' ") or die("Não foi possível realizar a atualização!");						
	      
//Bloco de código de atualização de pessoa Física	


        ?>
        <?php
        header("Location: atualPesFis.html");
?>
    </body>
</html>
