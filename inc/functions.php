<?php
	
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

	function getCadUnico($var){
		switch($var){
			case 'S':
				return "Sim";
			break;

			case 'N':
				return "Não";
			break;
		}
	}

	function getSimNao($var){
		switch($var){
			case '1':
				return "Sim";
			break;

			case '0':
				return "Não";
			break;
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
				echo "[ ]";
			break;

			case '1':
				echo "[X]";
			break;
		}
	}
?>
