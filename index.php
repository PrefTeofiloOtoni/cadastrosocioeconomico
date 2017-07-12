<?php include("inc/functions.php"); include("inc/header.php"); ?>
  <body>
<?php include("inc/menu.php"); ?>
   <div class="container" style="padding-top:50px">
    <h2 class="page-header" align="center">RECADASTRAMENTO DOS SERVIDORES PÚBLICOS MUNICIPAIS</h2>
    <h3 align="center">QUESTIONÁRIO DE PERFIL SOCIOECONÔMICO</h3>
    <h3>ATENÇÃO:</h3>
    <h4>A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis.</h4>
    <h4>Todas as questões visam à coleta de informações para recadastramento dos servidores ativos, inativos, pensionistas. Portanto, por favor, não deixe nenhuma questão sem resposta!</h4>
<?php
	if(isset($_GET['MSG'])){
		echo "<div class=\"bg-danger\">".urldecode($_GET['MSG'])."</div>";
	}
?>
    <div class="col-md-12">
<?php
	if (isset($_SESSION['RECADASTRO'])){
		include("views/formulario.php");
	}elseif(!empty($_GET['IMPRIME'])){
		include("views/reimpress.php");
	}elseif(!empty($_SESSION['PENSIONISTA'])){
		include("views/formularioPensionista.php");
	}else{
		include("views/login.php");
	}
?>
    </div>
   </div>
<?php include("inc/footer.php"); ?>   
 </body>
</html>
