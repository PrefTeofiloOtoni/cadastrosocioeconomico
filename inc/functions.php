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
			case 'fund':
				return "Ensino Fundamental";
			break;

			case 'medio':
				return "Ensino Médio";
			break;

			case 'sup':
				return "Ensino Superior";
			break;

			case 'esp':
				return "Pós Graduação";
			break;

			case 'mes':
				return "Mestrado";
			break;

			case 'doc':
				return "Doutorado";
			break;

			case 'posdoc':
				return "Pós Doutorado";
			break;
		}
	}

	function getSexo($var){
		switch($var){
			case 'F':
				return "Feminino";
			break;

			case 'M':
				return "Masculino";
			break;
		}
	}

	function getSimNao($var){
		switch($var){
			case 'sim':
				return "Sim";
			break;
			case 'nao':
				return "Não";
			break;
			case 'S':
				return "Sim";
			break;

			case 'N':
				return "Não";
			break;
			case '1':
				return "Sim";
			break;

			case '0':
				return "Não";
			break;
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
			case '1':
				echo "Até 5 anos";
			break;

			case '2':
				echo "Mais de 5 anos e até 10 anos";
			break;

			case '3':
				echo "Mais de 10 anos";
			break;
		}
	}

	function getInfo($var){
		switch($var){
			case '0':
				echo "[&nbsp;&nbsp;]";
			break;

			case '1':
				echo "[X]";
			break;
		}
	}

	function getTemEmCasa($var){
		$array=explode("#",$var);
                $i=0;
                while($i<sizeof($array)){
			if($array[$i]!=''){
	                        echo "<div>[X] <label>".$array[$i]."</label></div>";
			}
			$i++;
                }
	}

	function getRenda($var){
		switch($var){
			case '1':
				echo "Até 02 salários mínimos";
			break;
			case '2':
				echo "de 02 a  04 salários mínimos";
			break;
			case '3':
				echo "Superior a 05 salários mínimos";
			break;
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

	function getData($var){
		$tmp=explode("-",$var);
		return $tmp['0']."/".$tmp['1']."/".$tmp['2'];
	}

	function padronizaData($var){
		$tmp=explode("/",$var);
		return $tmp['0']."-".$tmp['1']."-".$tmp['2'];
	}
	
	function getCPF($var){
		$tmp=str_split($var);
		return $tmp['0'].$tmp['1'].$tmp['2'].".".$tmp['3'].$tmp['4'].$tmp['5'].".".$tmp['6'].$tmp['7'].$tmp['8']."-".$tmp['9'].$tmp['10'];
	}
	
	function getComposicaoFamiliar($var){
		$PDO=conecta();
		$SQL="SELECT * FROM familiares WHERE CPF='".$var."'";
		$result = $PDO->query($SQL);
		$rows   = $result->fetchAll();
		for ($i=0;$i<sizeof($rows);$i++){
			echo "<tr>
                               <td>".$rows[$i]['Nome']."</td>
                               <td>".$rows[$i]['DataNasc']."</td>
                               <td>".$rows[$i]['Parentesco']."</td>
                               <td>".$rows[$i]['Ocupacao']."</td>
                               <td>".$rows[$i]['Remuneracao']."</td>
                              </tr>";
		}
	}
?>
