<?php
	include ("functions.php");
	session_start();
	
	$PDO=conecta();
	if($_POST['CPF']){
		$sql = "SELECT * FROM funcionarios WHERE CPF='".$_POST['CPF']."'";
		$result = $PDO->query($sql);
		$rows = $result->fetchAll();
		if(!$rows){ 
			header('location:http://recadastro.teofilootoni.mg.gov.br/?MSG='.urlencode("CPF Não Encontrado, se for servidor ativo, inativo ou pensionista entre em contato com a Divisão de Pessoal na Sede da Prefeitura."));
		}else{
			if($rows[0]['Preenchido']==0){
				$_SESSION['RECADASTRO']=$rows[0];
				header('location:http://recadastro.teofilootoni.mg.gov.br/');
			}else{
				header('location:http://recadastro.teofilootoni.mg.gov.br/?MSG='.urlencode("Usuário já Preencheu o Formulário."));
			}
		}
	}	
?>
