<?php
@include("conecta.php");
	
function conecta(){
	try{
		return new PDO( "mysql:host=".@getenv(BDHOST).";dbname=".@getenv(BDNAME),@getenv(BDUSER),@getenv(BDPASS));
        }catch(PDOException $e ){
                echo 'Erro ao conectar com o MySQL: '.$e->getMessage();
	}
}

function getGrau_escolar($var){
	switch($var){
		case 'fund':	return "Ensino Fundamental";	break;
		case 'medio':	return "Ensino Médio";		break;
		case 'sup':	return "Ensino Superior";	break;
		case 'esp':	return "Pós Graduação";		break;
		case 'mes':	return "Mestrado";		break;
		case 'doc':	return "Doutorado";		break;
		case 'posdoc':	return "Pós Doutorado";		break;
	}
}

function getSexo($var){
	switch($var){
		case 'F':	return "Feminino";	break;
		case 'M':	return "Masculino";	break;
	}
}

function getSimNao($var){
	switch($var){
		case 'sim':	return "Sim";	break;
		case 'nao':	return "Não";	break;
		case 'S':	return "Sim";	break;
		case 'N':	return "Não";	break;
		case '1':	return "Sim";	break;
		case '0':	return "Não";	break;
	}
}

function getOutrosIdiomas($var){
	if($var==0){
		return false;
	}else{
		return $var;
	}
}

function getTimeRes($var){
	switch($var){
		case '1':	echo "Até 5 anos";			break;
		case '2':	echo "Mais de 5 anos e até 10 anos";	break;
		case '3':	echo "Mais de 10 anos";			break;
	}
}

function getInfo($var){
	switch($var){
		case '0':	echo "[&nbsp;&nbsp;]";	break;
		case '1':	echo "[X]";		break;
	}
}

function getTemEmCasa($var,$opt){
	$arrayPodeTerEmCasa = array(
		"TV" => 0,
		"Video Cassete e/ou DVD"=> 0,
		"Rádio"=> 0,
		"Microcomputador"=> 0,
		"Automóvel" => 0,
		"Motocicleta" => 0,
		"Máquina de Lavar Roupa" => 0,
		"Geladeira" => 0,
		"Telefone Fixo" => 0,
		"Telefone Celular" => 0,
		"Acesso a internet" => 0,
		"TV por assinatura" => 0,
		"Empregada mensalista" => 0		
	);

	$array=explode("#",$var);
	$i=0;

	while($i<sizeof($array)-1){
		$arrayPodeTerEmCasa[$array[$i]]='1';
		$i++;
	}

	$index=array_keys($arrayPodeTerEmCasa);

	if($opt==0){
		$i=0;
		while($i<sizeof($arrayPodeTerEmCasa)){
			if($arrayPodeTerEmCasa[$index[$i]]==1) $check="checked";
			else $check=" ";
			echo "<div><label><input type=\"checkbox\" name=\"TemEmCasa".($i+1)."\" value=\"".$index[$i]."#\" ".$check."  />&nbsp;".$index[$i]."</label></div>"."\n";
			$i++;
		}
	}elseif($opt=1){
		$i=0;
		while($i<sizeof($arrayPodeTerEmCasa)){
			if($arrayPodeTerEmCasa[$index[$i]]==1) $check="X";
			else $check="&nbsp;&nbsp;";
			echo "<div><label>[".$check."]".$index[$i]."</label></div>"."\n";
			$i++;
		}
	}
}

function getRenda($var){
	switch($var){
		case '1':	echo "Até 02 salários mínimos";		break;
		case '2':	echo "de 02 a  04 salários mínimos";	break;
		case '3':	echo "Superior a 05 salários mínimos";	break;
	}	
}

function getMes($var){
	switch($var){
		case '1':	return "Janeiro";	break;
		case '2':	return "Fevereiro";	break;
		case '3':	return "Março";		break;
		case '4':	return "Abril";		break;
		case '5':	return "Maio";		break;
		case '6':	return "Junho";		break;
		case '7':	return "Julho";		break;
		case '8':	return "Agosto";	break;
		case '9':	return "Setembro";	break;
		case '10':	return "Outubro";	break;
		case '11':	return "Novembro";	break;
		case '12':	return "Dezembro";	break;
	}
}

function padronizaData($var){
	$tmp=explode("/",$var);
	return $tmp['0']."-".$tmp['1']."-".$tmp['2'];
}

function getCPF($var){
	$tmp=str_split($var);
	return $tmp['0'].$tmp['1'].$tmp['2'].".".$tmp['3'].$tmp['4'].$tmp['5'].".".$tmp['6'].$tmp['7'].$tmp['8']."-".$tmp['9'].$tmp['10'];
}

function listarFuncionarios(){
	$PDO=conecta();
	$SQL="SELECT CPF,Nome,Mae,Pai FROM funcionarios ORDER BY Nome";
	$result = $PDO->query($SQL);
	$rows   = $result->fetchAll();
		for ($i=0;$i<sizeof($rows);$i++){
		echo "<tr>";
		echo "<td>".$rows[$i]['CPF']."</td>";
		echo "<td>".utf8_encode($rows[$i]['Nome'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Mae'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Pai'])."</td>";
		echo "</tr>";
	}
}

function getComposicaoFamiliar($var,$opt){
	$PDO=conecta();
	$SQL="SELECT * FROM familiares WHERE CPF='".$var."'";
	$result = $PDO->query($SQL);
	$rows   = $result->fetchAll();
		if($opt==0){
		for ($i=0;$i<sizeof($rows);$i++){
			echo "<tr>";
			echo "<td><input type=\"hidden\" name=\"FamiliarID".$i."\" value=\"".$rows[$i]['ID']."\" /> <input type=\"text\" name=\"FamiliarNome".$i."\"  value=\"".$rows[$i]['Nome']."\" class=\"form-control\" placeholder=\"Nome\"></td>";
			echo "<td><input type=\"text\" name=\"FamiliarDataNasc".$i."\"  value=\"".$rows[$i]['DataNasc']."\" class=\"form-control\" maxlength=\"10\" placeholder=\"Data de Nascimento\" onkeyup=dataConta(this)></td>";
			$tmp1 = "<td><select class=\"form-control\" name=\"FamiliarParentesco".$i."\" id=\"FamiliarParentesco".$i."\">";
			$tmp1 = $tmp1."<option value=\"\">Escolha</option>";
			$tmp1 = $tmp1."<option value=\"Pai\">Pai</option>";
			$tmp1 = $tmp1."<option value=\"Mãe\">Mãe</option>";
			$tmp1 = $tmp1."<option value=\"Tio(a)\">Tio(a)</option>";
			$tmp1 = $tmp1."<option value=\"Irmã(o)\">Irmã(o)</option>";
			$tmp1 = $tmp1."<option value=\"Primo(a)\">Primo(a)</option>";
			$tmp1 = $tmp1."<option value=\"Sobrinho\">Sobrinho(a)</option>";
			$tmp1 = $tmp1."<option value=\"Avô(ó)\">Avô(ó)</option></select></td>";
			echo $tmp1;

			$tmp2 = "<td><select class=\"form-control\" name=\"FamiliarEscolaridade".$i."\" id=\"FamiliarEscolaridade".$i."\">";
			$tmp2 = $tmp2."<option value=\"\">Escolha</option>";
			$tmp2 = $tmp2."<option value=\"Ensino Fundamental\">Ensino Fundamental</option>";
			$tmp2 = $tmp2."<option value=\"Ensino Médio\">Ensino Médio</option>";
			$tmp2 = $tmp2."<option value=\"Superior\">Superior</option>";
			$tmp2 = $tmp2."<option value=\"Pós-Graduação\">Pos-Graduação</option>";
			$tmp2 = $tmp2."<option value=\"Mestrado\">Mestrado</option>";
			$tmp2 = $tmp2."<option value=\"Doutorado\">Doutorado</option>";
			$tmp2 = $tmp2."<option value=\"Pós-Doutorado\">Pós-Doutorado</option></select></td>";
			echo $tmp2;
		
			echo "<td><input type=\"text\" name=\"FamiliarOcupacao".$i."\"  value=\"".$rows[$i]['Ocupacao']."\" class=\"form-control\" placeholder=\"Ocupação\"></td>";
			echo "<td><input type=\"text\" name=\"FamiliarRemuneracao".$i."\" onkeyup=moeda(this) value=\"".$rows[$i]['Remuneracao']."\" class=\"form-control\" placeholder=\"Remuneração\"></td>";
			echo "<td><button class=\"btn btn-large btn-danger fa fa-trash\" onclick=\"deleteRow(this.parentNode.parentNode.rowIndex)\"></button></td>";
			if(isset($rows[$i]['Parentesco'])) echo "<script>document.getElementById(\"FamiliarParentesco".$i."\").value=\"".$rows[$i]['Parentesco']."\"</script>";
			if(isset($rows[$i]['Escolaridade'])) echo "<script>document.getElementById(\"FamiliarEscolaridade".$i."\").value=\"".$rows[$i]['Escolaridade']."\"</script>";
		}
	}elseif($opt=1){
		for ($i=0;$i<sizeof($rows);$i++){
			echo "<tr><td>".$rows[$i]['Nome']."</td><td>".$rows[$i]['DataNasc']."</td><td>".$rows[$i]['Parentesco']."</td><td>".$rows[$i]['Escolaridade']."</td><td>".$rows[$i]['Ocupacao']."</td><td>".$rows[$i]['Remuneracao']."</td></tr>";
		}
	}
}

function ifExisteText($data,$field,$label){
	if(!empty($data)){
		echo "<strong>".$label.": </strong>". utf8_encode($data);
		echo "<input type=\"hidden\" name=\"".$field."\" id=\"".$field."\" value=\"".utf8_encode($data)."\" />";
	}else{  
		echo "<label>".$label.": </label>". utf8_encode($data);
		echo "<input type=\"text\" name=\"".$field."\" id=\"".$field."\" class=\"form-control\" placeholder=\"".$label."\" />";
	}
}

function getEstCivil($var){
	switch($var){
		case 'solteiro':	return "Solteiro";	break;
		case 'casado':		return "Casado";	break;
		case 'separado':	return "Separado";	break;
		case 'viuvo':		return "Viúvo";		break;
		case 'uniao_estavel':	return "União Estável";	break;
	}
}
?>
