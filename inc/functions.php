<?php

function getURL(){
	return "//".getEnv(URL);
}

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

function getPTemEmCasa($var,$opt){
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
			echo "<div><label><input type=\"checkbox\" name=\"PTemEmCasa".($i+1)."\" value=\"".$index[$i]."#\" ".$check."  />&nbsp;".$index[$i]."</label></div>"."\n";
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
	$SQL="SELECT Matricula,CPF,Nome,Mae,Pai,Sexo,Preenchido FROM funcionarios ORDER BY Preenchido DESC, Nome ASC";
	$result = $PDO->query($SQL);
	$rows   = $result->fetchAll();
	for ($i=0;$i<sizeof($rows);$i++){
		if($rows[$i]['Preenchido']==0) $P="Não"; else $P="Sim";
		echo "<tr>";
		echo "<td>".$rows[$i]['Matricula']."</td>";
		echo "<td>".$rows[$i]['CPF']."</td>";
		echo "<td>".utf8_encode($rows[$i]['Nome'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Mae'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Pai'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Sexo'])."</td>";
		echo "<td>".$P."</td>";
		echo "</tr>";
	}
}
function listarPensionistas(){
	$PDO=conecta();
	$SQL="SELECT CPF,Nome,Mae,Pai,Sexo,Preenchido FROM pensionista ORDER BY Preenchido DESC, Nome ASC";
	$result = $PDO->query($SQL);
	$rows   = $result->fetchAll();
	for ($i=0;$i<sizeof($rows);$i++){
		if($rows[$i]['Preenchido']==0) $P="Não"; else $P="Sim";
		echo "<tr>";
		echo "<td>".$rows[$i]['CPF']."</td>";
		echo "<td>".utf8_encode($rows[$i]['Nome'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Mae'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Pai'])."</td>";
		echo "<td>".utf8_encode($rows[$i]['Sexo'])."</td>";
		echo "<td>".$P."</td>";
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
			echo "<td><input type=\"hidden\" name=\"FamiliarID".$i."\" value=\"".$rows[$i]['ID']."\" /><input type=\"text\" name=\"FamiliarNome".$i."\"  value=\"".$rows[$i]['Nome']."\" class=\"form-control\" placeholder=\"Nome\"></td>";
			echo "<td><input type=\"text\" name=\"FamiliarDataNasc".$i."\"  value=\"".$rows[$i]['DataNasc']."\" class=\"form-control\" maxlength=\"10\" placeholder=\"Data de Nascimento\" onkeyup=dataConta(this)></td>";
			$tmp1 = "<td><select class=\"form-control\" name=\"FamiliarParentesco".$i."\" id=\"FamiliarParentesco".$i."\">";
			$tmp1 = $tmp1."<option value=\"\">Escolha</option>";
			$tmp1 = $tmp1."<option value=\"Pai\">Pai</option>";
			$tmp1 = $tmp1."<option value=\"Mãe\">Mãe</option>";
			$tmp1 = $tmp1."<option value=\"Filho(a)\">Filho(a)</option>";
			$tmp1 = $tmp1."<option value=\"Cônjuje/Companheiro(a)\">Cônjuje/Companheiro(a)</option>";
			$tmp1 = $tmp1."<option value=\"Tio(a)\">Tio(a)</option>";
			$tmp1 = $tmp1."<option value=\"Irmã(o)\">Irmã(o)</option>";
			$tmp1 = $tmp1."<option value=\"Primo(a)\">Primo(a)</option>";
			$tmp1 = $tmp1."<option value=\"Sobrinho\">Sobrinho(a)</option>";
			$tmp1 = $tmp1."<option value=\"Enteado(a)\">Enteado(a)</option>";
			$tmp1 = $tmp1."<option value=\"Avô(ó)\">Avô(ó)</option>";
			$tmp1 = $tmp1."<option value=\"Outro\">Outro</option></select></td>";
			echo $tmp1;

			$tmp2 = "<td><select class=\"form-control\" name=\"FamiliarEscolaridade".$i."\" id=\"FamiliarEscolaridade".$i."\">";
			$tmp2 = $tmp2."<option value=\"\">Escolha</option>";
			$tmp2 = $tmp2."<option value=\"Não Alfabetizado\">Não Alfabetizado</option>";
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
			echo "<tr><td>".$rows[$i]['Nome']."</td><td>".$rows[$i]['DataNasc']."</td><td>".$rows[$i]['Parentesco']."</td><td>".$rows[$i]['Escolaridade']."</td><td>".$rows[$i]['Ocupacao']."</td><td>R$ ".$rows[$i]['Remuneracao']."</td></tr>";
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
		case 'divorciado':	return "Divorciado";	break;
		case 'viuvo':		return "Viúvo";		break;
		case 'uniao_estavel':	return "União Estável";	break;
	}
}

function getStatsSexo(){
	$PDO=conecta();
	$SQL1="SELECT count(Sexo) AS CountSexM FROM funcionarios WHERE Sexo='M'";
	$SQL2="SELECT count(Sexo) AS CountSexF FROM funcionarios WHERE Sexo='F'";
	$result1 = $PDO->query($SQL1);
	$result2 = $PDO->query($SQL2);
	$rows1   = $result1->fetchAll();
	$rows2   = $result2->fetchAll();

	$total=$rows1[0]['CountSexM']+$rows2[0]['CountSexF'];
	$M=($rows1[0]['CountSexM']*100)/$total;
	$F=($rows2[0]['CountSexF']*100)/$total;

	$tmp="<p>Funcionários por Sexo</p>";
	$tmp.="<div class=\"progress\">";
	$tmp.="<div class=\"progress-bar progress-bar-primary\" style=\"width: ".$M."%\">";
      	$tmp.="<span>".$rows1[0]['CountSexM']." Funcionários do Sexo Masculino </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-danger\" style=\"width: ".$F."%\">";
      	$tmp.="<span>".$rows2[0]['CountSexF']." Funcionários do Sexo Feminino </span>";
	$tmp.="</div>";
	$tmp.="</div>";
	echo $tmp;
}

function getStatsPreenchido(){
	$PDO=conecta();
	$SQL1="SELECT count(CPF) AS Total FROM funcionarios WHERE Preenchido='0'";
	$SQL2="SELECT count(CPF) AS Total FROM funcionarios WHERE Preenchido='1'";
	$result1 = $PDO->query($SQL1);
	$result2 = $PDO->query($SQL2);
	$rows1   = $result1->fetchAll();
	$rows2   = $result2->fetchAll();

	$total=$rows1[0]['Total']+$rows2[0]['Total'];
	$S=($rows1[0]['Total']*100)/$total;
	$N=($rows2[0]['Total']*100)/$total;

	$tmp="<p>Preenchidos</p>";
	$tmp.="<div class=\"progress\">";
	$tmp.="<div class=\"progress-bar progress-bar-danger\" style=\"width: ".$S."%\">";
      	$tmp.="<span>".$rows1[0]['Total']." Não Preenchidos </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-success\" style=\"width: ".$N."%\">";
      	$tmp.="<span>".$rows2[0]['Total']." Preenchidos </span>";
	$tmp.="</div>";
	$tmp.="</div>";
	echo $tmp;
}

function getStatsEscolar(){
	$PDO=conecta();
	$SQL="SELECT
		count(CPF) AS total,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='fund') AS fund,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='medio') AS medio,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='sup') AS sup,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='esp') AS esp,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='mes') AS mes,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='doc') AS doc,
		(SELECT count(CPF) AS CPF From funcionarios WHERE Grau_escolar='posdoc') AS posdoc
	     FROM funcionarios;";
	$result = $PDO->query($SQL);
	$rows   = $result->fetchAll();
	
	$total=$rows['0']['fund']+$rows['0']['medio']+$rows['0']['sup']+$rows['0']['esp']+$rows['0']['mes']+$rows['0']['doc']+$rows['0']['posdoc'];

	$Fund=($rows['0']['fund']*100)/$total;
	$Medio=($rows['0']['medio']*100)/$total;
	$Sup=($rows['0']['sup']*100)/$total;
	$Esp=($rows['0']['esp']*100)/$total;
	$Mes=($rows['0']['mes']*100)/$total;
	$Doc=($rows['0']['doc']*100)/$total;
	$Posdoc=($rows['0']['posdoc']*100)/$total;

	$tmp="<p>Grau de Escolaridade</p>";
	$tmp.="<div class=\"progress\">";
	$tmp.="<div class=\"progress-bar progress-bar-primary\" style=\"width: ".$Fund."%\">";
      	$tmp.="<span>".$rows[0]['fund']." Ens Fundamental </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-success\" style=\"width: ".$Medio."%\">";
      	$tmp.="<span>".$rows[0]['medio']." Ens Médio </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-info\" style=\"width: ".$Sup."%\">";
      	$tmp.="<span>".$rows[0]['sup']." Ens Superior  </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-warning\" style=\"width: ".$Esp."%\">";
      	$tmp.="<span>".$rows[0]['esp']." Pós Graduação  </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-danger\" style=\"width: ".$Mes."%\">";
      	$tmp.="<span>".$rows[0]['mes']." Mestrado </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-primary progress-bar-striped\" style=\"width: ".$Doc."%\">";
      	$tmp.="<span>".$rows[0]['doc']." Doutorado </span>";
        $tmp.="</div>";
	$tmp.="<div class=\"progress-bar progress-bar-success progress-bar-striped\" style=\"width: ".$Posdoc."%\">";
      	$tmp.="<span>".$rows[0]['posdoc']." Pós Doutorado </span>";
        $tmp.="</div>";
	$tmp.="</div>";

	echo $tmp;
}

?>
