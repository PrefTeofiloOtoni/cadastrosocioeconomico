<?php
	include ("functions.php");
	session_start();

	if($_POST['CPF']){
		$PDO=conecta();
		$sql = "SELECT * FROM funcionarios WHERE CPF='".$_POST['CPF']."'";
		$result = $PDO->query($sql);
		$rows = $result->fetchAll();
		if(!$rows){
			header('location: '.getURL().'/?MSG='.urlencode("CPF Não Encontrado."));
		}else{
			if($rows[0]['Preenchido']==0){
				header('location: '.getURL().'/?MSG='.urlencode("Usuário ainda não preencheu o formulário"));
			}else{
				$_SESSION['RECADASTRO']=$rows[0];
				header('location: '.getURL().'/views/imprime.php');
			}
		}
	}

	if($_POST['PCPF']){
		$PDO=conecta();
		$sql2="SELECT
			f.Nome AS FNome,
			f.CPF AS FCPF,
			f.Matricula AS FMatricula,
			p.Sexo AS PSexo,
			p.Transferencia AS PTransferencia,
			p.Transferencia_Qual AS PTransferencia_Qual,
			p.Nascto AS PNascto,
			p.CPF AS PCPF,
			p.Nome AS PNome,
			p.Pai AS PPai,
			p.Mae AS PMae,
			p.Naturalidade AS PNaturalidade,
			p.UF AS PUF,
			p.RG_NUM AS PRG_NUM, 
			p.RG_ORG AS PRG_ORG,
			p.RG_UF AS PRG_UF,
			p.Grau_escolar AS PGrau_escolar,
			p.Status_escolar AS PStatus_escolar, 
			p.Formacao AS PFormacao, 
			p.End_Rua AS PEnd_Rua, 
			p.End_Num AS PEnd_Num, 
			p.End_Comp AS PEnd_Comp, 
			p.End_Bairro AS PEnd_Bairro, 
			p.End_CEP AS PEnd_CEP, 
			p.End_Cidade AS PEnd_Cidade, 
			p.End_UF AS PEnd_UF,
			p.Fone_Fixo AS PFone_Fixo, 
			p.Fone_Tipo AS PFone_Tipo, 
			p.Fone_Cel AS PFone_Cel,
			p.Email AS PEmail,
			p.Cor AS PCor,
			p.EstCivil AS PEstCivil,
			p.CadUnico AS PCadUnico,
			p.NIS AS PNIS,
			p.TimeRes AS PTimeRes,
			p.Hab_Tipo AS PHab_Tipo,
			p.Hab_Modo AS PHab_Modo,
			p.Hab_Quit AS PHab_Quit,
			p.Hab_Valor AS PHab_Valor,
			p.Trans_Forma AS PTrans_Forma,
			p.Trans_Tipo AS PTrans_Tipo,
			p.Ling_Ingles AS PLing_Ingles,
			p.Ling_Espanhol AS PLing_Espanhol,
			p.Ling_Outros AS PLing_Outros,
			p.Ling_extra AS PLing_extra,
			p.Info_word AS PInfo_word,
			p.Info_excel AS PInfo_excel,
			p.Info_internet AS PInfo_internet,
			p.Info_Outros AS PInfo_Outros,
			p.Renda_Maior AS PRenda_Maior,
			p.Pensao_Paga AS PPensao_Paga,
			p.Pensao_Paga_Val AS PPensao_Paga_Val,
			p.Pensao_Recebe_Val AS PPensao_Recebe_Val,
			p.Pensao_Recebe AS PPensao_Recebe,
			p.Renda_Mensal_Individual AS PRenda_Mensal_Individual,
			p.Renda_Mensal_Capita AS PRenda_Mensal_Capita,
			p.Deficiente AS PDeficiente,
			p.Deficiente_Grau AS PDeficiente_Grau,
			p.Deficiente_Qual AS PDeficiente_Qual,
			p.Idoso AS PIdoso,
			p.TemEmCasa AS PTemEmCasa,
			p.PlanoDeSaude AS PPlanoDeSaude,
			p.PlanoDeSaude_Qual AS PPlanoDeSaude_Qual,
			p.Preenchido AS PPreenchido,
			p.Observacoes AS PObservacoes
		FROM
			funcionarios AS f,
			pensionista AS p  
		WHERE
			f.CPF = p.CPF_Funcionario AND
		       	p.CPF = '".$_POST['PCPF']."'";



		$result2 = $PDO->query($sql2);
		$rows2 = $result2->fetchAll();
		if(!$rows2){ 
			header('location: '.getURL().'/?MSG='.urlencode("CPF Não Encontrado."));
		}else{
			if($rows2[0]['PPreenchido']==0){
				header('location: '.getURL().'/?MSG='.urlencode("Usuário ainda não preencheu o formulário"));
			}else{
				$_SESSION['PENSIONISTA']=$rows2[0];
				header('location: '.getURL().'/views/imprimePensionista.php');
			}
		}
	}	
?>
