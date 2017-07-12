<?php
	include ("functions.php");
        session_start();

	$_SESSION['PENSIONISTA']=$_POST;
	extract ($_POST);
	
	if(!isset($PInfo_word)){
		$PInfo_word=0;
		$_SESSION['PENSIONISTA']['PInfo_word']=0;
	}
	if(!isset($Info_excel)){
		$PInfo_excel=0;
		$_SESSION['PENSIONISTA']['PInfo_excel']=0;
	}
	if(!isset($Info_internet)){
		$PInfo_internet=0;
		$_SESSION['PENSIONISTA']['PInfo_internet']=0;
	}
	if(!isset($Pensao_Paga)){
		$PPensao_Paga=0;
		$PPensao_Paga_Val=NULL;
		$_SESSION['PENSIONISTA']['PPensao_Paga']=0;
		$_SESSION['PENSIONISTA']['PPensao_Paga_Val']=NULL;
	}
	if(!isset($Pensao_Recebe)){
		$PPensao_Recebe=0;
		$PPensao_Recebe_Val=NULL;
		$_SESSION['PENSIONISTA']['PPensao_Recebe']=0;
		$_SESSION['PENSIONISTA']['PPensao_Recebe_Val']=NULL;
	}
	if(!isset($PDeficiente)){
		$PDeficiente=0;
		$_SESSION['PENSIONISTA']['PDeficiente']=0;
	}else{
		if($PDeficiente_Qual=="POutra"){
			$PDeficiente_Qual=$Def_Outra;
			$_SESSION['PENSIONISTA']['PDeficiente_Qual']=$Def_Outra;
		}	
	}
	if(!isset($PIdoso)){
		$PIdoso=0;
		$_SESSION['PENSIONISTA']['PIdoso']=0;
	}
	if(!isset($PPlanoDeSaude)){
		$PPlanoDeSaude=0;
		$_SESSION['PENSIONISTA']['PPlanoDeSaude']=0;
	}
	if(!isset($PTransferencia)){
		$PTransferencia=0;
		$_SESSION['PENSIONISTA']['PTransferencia']=0;
		$_SESSION['PENSIONISTA']['PTransferencia_Qual']=NULL;
	}
	if(!isset($PCadUnico)){
		$PCadUnico=0;
		$_SESSION['PENSIONISTA']['PCadUnico']=0;
		$_SESSION['PENSIONISTA']['PNIS']=NULL;
	}

	$PTemEmCasa=$PTemEmCasa1.$PTemEmCasa2.$PTemEmCasa3.$PTemEmCasa4.$PTemEmCasa5.$PTemEmCasa6.$PTemEmCasa7.$PTemEmCasa8.$PTemEmCasa9.$PTemEmCasa10.$PTemEmCasa11.$PTemEmCasa12.$PTemEmCasa13;
	$_SESSION['PENSIONISTA']['PTemEmCasa']=$PTemEmCasa;

	$SQL="UPDATE pensionista SET ";
	$SQL.="\n 	Mae='".@utf8_encode(strtoupper($PMae))."',";
	$SQL.="\n 	Pai='".@utf8_encode(strtoupper($PPai))."',";
	$SQL.="\n 	Naturalidade='".@utf8_encode(strtoupper($PNaturalidade))."',";
	$SQL.="\n 	UF='".@utf8_encode($PUF)."',";
	$SQL.="\n 	RG_NUM='".@utf8_encode(strtoupper($PRG_NUM))."',";
	$SQL.="\n 	RG_ORG='".@utf8_encode(strtoupper($PRG_ORG))."',";
	$SQL.="\n 	RG_UF='".@utf8_encode($PRG_UF)."',";
	$SQL.="\n 	Grau_escolar='".@utf8_encode($PGrau_escolar)."',";
	$SQL.="\n 	Status_escolar='".@utf8_encode($PStatus_escolar)."',";
	$SQL.="\n 	Formacao='".@utf8_encode(strtoupper($PFormacao))."',";
	$SQL.="\n 	End_Rua='".@utf8_encode(strtoupper($PEnd_Rua))."',";
	$SQL.="\n 	End_Num='".@utf8_encode(strtoupper($PEnd_Num))."',";
	$SQL.="\n 	End_Comp='".@utf8_encode(strtoupper($PEnd_Comp))."',";
	$SQL.="\n 	End_Bairro='".@utf8_encode(strtoupper($PEnd_Bairro))."',";
	$SQL.="\n 	End_CEP='".@utf8_encode(strtoupper($PEnd_CEP))."',";
	$SQL.="\n 	End_Cidade='".@utf8_encode(strtoupper($PEnd_Cidade))."',";
	$SQL.="\n 	End_UF='".@utf8_encode($PEnd_UF)."',";
	$SQL.="\n 	Fone_Fixo='".@utf8_encode($PFone_Fixo)."',";
	$SQL.="\n 	Fone_Tipo='".@utf8_encode($PFone_Tipo)."',";
	$SQL.="\n	Fone_Cel='".@utf8_encode($PFone_Cel)."',";
	$SQL.="\n	Email='".@utf8_encode(strtoupper($PEmail))."',";
	$SQL.="\n	Cor='".@utf8_encode($PCor)."',";
	$SQL.="\n	EstCivil='".@utf8_encode($PEstCivil)."',";
	$SQL.="\n	CadUnico='".@utf8_encode($PCadUnico)."',";
	$SQL.="\n	NIS='".@utf8_encode($PNIS)."',";
	$SQL.="\n	TimeRes='".@utf8_encode($PTimeRes)."',";
	$SQL.="\n	Hab_Tipo='".@utf8_encode($PHab_Tipo)."',";
	$SQL.="\n	Hab_Modo='".@utf8_encode($PHab_Modo)."',";
	$SQL.="\n	Hab_Quit='".@utf8_encode($PHab_Quit)."',";
	$SQL.="\n	Hab_Valor='".@utf8_encode($PHab_Valor)."',";
	$SQL.="\n	Trans_Forma='".@utf8_encode($PTrans_Forma)."',";
	$SQL.="\n	Trans_Tipo='".@utf8_encode($PTrans_Tipo)."',";
	$SQL.="\n	Ling_Ingles='".@utf8_encode($PLing_Ingles)."',";
	$SQL.="\n	Ling_Espanhol='".@utf8_encode($PLing_Espanhol)."',";
	$SQL.="\n	Ling_Outros='".@utf8_encode(strtoupper($PLing_Outros))."',";
	$SQL.="\n	Ling_extra='".@utf8_encode(strtoupper($PLing_extra))."',";
	$SQL.="\n	Info_word='".@utf8_encode($PInfo_word)."',";
	$SQL.="\n	Info_excel='".@utf8_encode($PInfo_excel)."',";
	$SQL.="\n	Info_internet='".@utf8_encode($PInfo_internet)."',";
	$SQL.="\n	Info_Outros='".@utf8_encode(strtoupper($PInfo_Outros))."',";
	$SQL.="\n	Pensao_Paga='".@utf8_encode($PPensao_Paga)."',";
	$SQL.="\n	Pensao_Paga_Val='".@utf8_encode($PPensao_Paga_Val)."',";
	$SQL.="\n	Pensao_Recebe_Val='".@utf8_encode($PPensao_Recebe_Valor)."',";
	$SQL.="\n	Pensao_Recebe='".@utf8_encode($PPensao_Recebe)."',";
	$SQL.="\n	Renda_Mensal_Individual='".@utf8_encode($PRenda_Mensal_Individual)."',";
	$SQL.="\n	Renda_Mensal_Capita='".@utf8_encode($PRenda_Mensal_Capita)."',";
	$SQL.="\n	Deficiente='".@utf8_encode($PDeficiente)."',";
	$SQL.="\n	Deficiente_Grau='".@utf8_encode($PDeficiente_Grau)."',";
	$SQL.="\n	Deficiente_Qual='".@utf8_encode($PDeficiente_Qual)."',";
	$SQL.="\n	Transferencia='".@utf8_encode($PTransferencia)."',";
	$SQL.="\n	Transferencia_Qual='".@utf8_encode($PTransferencia_Qual)."',";
	$SQL.="\n	Idoso='".@utf8_encode($PIdoso)."',";
	$SQL.="\n	TemEmCasa='".@utf8_encode($PTemEmCasa)."',";
	$SQL.="\n	PlanoDeSaude='".@utf8_encode($PPlanoDeSaude)."',";
	$SQL.="\n	PlanoDeSaude_Qual='".@utf8_encode($PPlanoDeSaude_Qual)."',";
	$SQL.="\n	Observacoes='".@utf8_encode($PObservacoes)."',";
	$SQL.="\n	Preenchido=1, ";
	$SQL.="\n	Quando=NOW() ";
	$SQL.="\nWHERE CPF='".@utf8_encode($PCPF)."';";

	$PDO=conecta();
	$SQLDelete="DELETE FROM familiares WHERE CPF = '".$PCPF."'"; 
	$RES1=$PDO->query($SQLDelete);
	if($result = $PDO->query($SQL)){
		if($familiatotal>0){
			for ($i=0;$i<$familiatotal;$i++){
				$tmpNome='FamiliarNome'.$i;
				$tmpNascto="FamiliarDataNasc".$i;
				$tmpParentesco="FamiliarParentesco".$i;
				$tmpEscolaridade="FamiliarEscolaridade".$i;
				$tmpOcupacao="FamiliarOcupacao".$i;
				$tmpRemuneracao="FamiliarRemuneracao".$i;

				if(!empty($$tmpNome)){
	
					$SQLInsert="INSERT INTO familiares (
							CPF,
							Nome,
							DataNasc,
							Parentesco,
							Escolaridade,
							Ocupacao,
							Remuneracao)
							VALUES(
								'".$PCPF."',
								'".$$tmpNome."',	
								'".$$tmpNascto."',	
								'".$$tmpParentesco."',	
								'".$$tmpEscolaridade."',	
								'".$$tmpOcupacao."',	
								'".$$tmpRemuneracao."');";

					$RES2=$PDO->query($SQLInsert);
				}
			}
		}

		header('location: '.getURL().'/views/imprimePensionista.php');
		exit;
	}else{
		header('location: '.getURL().'/?MSG=Erro ao Inserir, Entre em contato com o CPD');
		exit;
	}
?>
