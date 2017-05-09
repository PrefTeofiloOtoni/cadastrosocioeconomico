<?php session_start(); include('../inc/functions.php'); ?><!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Recadastramento PMTO">
  <meta name="author" content="CPD - ti@teofilootoni.mg.gov.br">
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Recadastro" />
  <meta property="og:description" content="Prefeitura Municipal de Teófilo Otoni" />
  <meta property="og:url" content="http://recadastro.teofilootoni.mg.gov.br" />
  <meta property="og:site_name" content="Recadastramento" />
  <!--link rel="icon" href="resources/img/debian.svg" /-->
  <title>PMTO | Recadastramento</title>
  <!-- Bootstrap core CSS -->
  <link href="../resources/css/bootstrap.css" rel="stylesheet">
  <link href="../resources/css/print.css" rel="stylesheet" media="print">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>
   <div class="container">
    <h3 class="page-header" align="center">RECADASTRAMENTO DOS SERVIDORES PÚBLICOS MUNICIPAIS</h3>
    <h4 align="center">QUESTIONÁRIO DE PERFIL SOCIOECONÔMICO</h4>
    <h4>ATENÇÃO:</h4>
    <h4>A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis.</h4>
    <h4>Todas as questões visam à coleta de informações para recadastramento dos servidores ativos. Portanto, por favor, não deixe nenhuma questão sem resposta!</h4>
    <div class="col-lg-12">
     <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
     <form class="form-signin" action="formulariophp" name="form1" method="POST">
      <table class='table table-striped table-bordered'>
       <tr>
        <td colspan="3"><label>Nome:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Nome'])?></td>
        <td><label>Data de Nascimento:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Nascto'])?></td>
       </tr>
       <tr>
        <td colspan="3"><label>Vinculo:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Vinculo'])?> </td>
        <td><label>Matricula:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Matricula'])?></td>
       </tr>
       <tr>
        <td colspan="3"><label>Filiação:</label>
         <p><i>Mãe:</i> <?php echo strtoupper($_SESSION['RECADASTRO']['Mae'])?></p>
         <p><i>Pai:</i> <?php echo strtoupper($_SESSION['RECADASTRO']['Pai'])?></p>
        </td>
        <td><label>Naturilidade:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Naturalidade'])?> </td>
       </tr>
       <tr>
        <td><label>RG:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['RG_NUM'])?></td>
        <td><label>Orgão Expeditor:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['RG_ORG'])?> </td>
        <td><label>UF:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['RG_UF'])?></td>
        <td><label>CPF:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['CPF'])?></td>
       </tr>
       <tr>
        <td colspan="3"><label>Grau de Excolaridade:</label> <?php echo strtoupper(getGrau_escolar($_SESSION['RECADASTRO']['Grau_escolar']));?> <?php echo strtoupper($_SESSION['RECADASTRO']['Status_escolar'])?></div>
        </td>
        <td><label>Formacao Profissional:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Formacao'])?></td>
        </tr>
        <tr>
         <td colspan="3"><label>Cargo Atual:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Cargo'])?></td>
         <td><label>Secretaria de Lotação:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Lotacao'])?></td>
        </tr>
        <tr>
         <td colspan="3"><label>Endereço:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Rua'])?></td>
         <td colspan="1"><label>Número:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Num'])?></td>
        </tr>
        <tr>
         <td colspan="1"><label>Complemento:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Comp'])?></td>
         <td colspan="2"><label>Bairro:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Bairro'])?></td>
         <td colspan="1"><label>CEP:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_CEP'])?></td>
        </tr>
        <tr>
         <td colspan="1"><label>Telefone Fixo:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Fone_Fixo'])?></td>
         <td colspan="1"><label>Tipo:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Fone_Tipo'])?></td>
         <td colspan="2"><label>Celular:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Fone_Cel'])?></td>
        </tr>
        <tr>
         <td colspan="3"><label>E-Mail:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Email'])?></td>
         <td><label>Sexo:</label> <?php echo strtoupper(getSexo($_SESSION['RECADASTRO']['Sexo']))?></td>
        </tr>
        <tr>
         <td><label>Cor/Etnia:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Cor'])?></td>
         <td><label>Estado Civíl:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['EstCivil'])?> </td> 
         <td colspan="2"><label>Possui CadUnico:</label> <?php echo strtoupper(getSimNao($_SESSION['RECADASTRO']['CadUnico']))?>
	<?php if($_SESSION['RECADASTRO']['CadUnico']=="S") echo "<label>NIS:</label> ". strtoupper($_SESSION['RECADASTRO']['NIS'])?></td> 
        </tr>
        <tr><td colspan="4"><label>Tempo de residência em Teofilo Otoni:</label> <?php echo strtoupper(getTimeRes($_SESSION['RECADASTRO']['TimeRes']))?></td></tr>
        <tr>
         <td><label>Condições de Moradia:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Hab_Tipo'])?></td>
         <td><?php echo strtoupper($_SESSION['RECADASTRO']['Hab_Modo'])?></td>
         <td><label>Quitada:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Hab_Quit'])?></td>
         <td><?php if($_SESSION['RECADASTRO']['Hab_Quit']=="sim"){?> <label>Valor:</label> R$<?php echo strtoupper($_SESSION['RECADASTRO']['Hab_Valor']); }?></td>
        </tr>
        <tr><td colspan="4"><label>Tipo de transporte que voce utiliza pra trabalhar:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Trans_Forma'])?></td></tr>
        <tr>
         <td colspan="4"><label>Lingua estrangeira:</label><br />
          <label>Ingles:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Ling_Ingles'])?><br />
          <label>Espanhol:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Ling_Espanhol'])?><br />
          <?php echo "<label>".getOutrosIdiomas($_SESSION['RECADASTRO']['Ling_Outros'])."</label> ";?>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Informática:</label><br>
          <?php echo getInfo($_SESSION['RECADASTRO']['Info_word'])?> <label>Word</label><br />
          <?php echo getInfo($_SESSION['RECADASTRO']['Info_excel'])?> <label>Excel</label><br />
          <?php echo getInfo($_SESSION['RECADASTRO']['Info_internet'])?> <label>Internet</label><br />
          <?php if(!isset($_SESSION['RECADASTRO']['Info_Outros'])){ ?> <label>Outros:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Info_Outros']); }?>
         </td>
        </tr>
        <tr>
         <td colspan ="4">
          <table class='table table-striped table-bordered table-hover'>
           <tr><td colspan="5" align="center"><strong>Composicao Familiar</strong></td></tr>
           <tr><td><strong>Nome</strong></td><td><strong>Idade</strong></td><td><strong>Parentesco</strong></td><td><strong>Ocupação</strong></td><td><strong>Remuneração</strong></td></tr>
          </table>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você paga pensao alimentícia p/ filhos e/ou ex-conjuge?:</label> <?php echo strtoupper(getSimNao($_SESSION['RECADASTRO']['Pensao_Paga']))?>
          <?php if($_SESSION['RECADASTRO']['Pensao_Paga']==1){ ?> , <label>Valor:</label> R$<?php echo strtoupper($_SESSION['RECADASTRO']['Pensao_Paga_Val']); } ?>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você recebe pensao alimenticia para seus filhos?</label> <?php echo strtoupper(getSimNao($_SESSION['RECADASTRO']['Pensao_Recebe']))?>
         <?php if($_SESSION['RECADASTRO']['Pensao_Recebe']==1){ ?>, <label>Valor:</label> R$<?php echo strtoupper($_SESSION['RECADASTRO']['Pensao_Recebe_Val']); }?>
         </td>
        </tr>
        <tr><td colspan="4"><label>Quem é a pessoa que mais contribui na renda familiar?</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Renda_Maior'])?></td></tr> 
        <tr><td colspan="4"><label>Renda mensal individual:</label> <?php echo getRenda($_SESSION['RECADASTRO']['Renda_Mensal_Individual'])?></td></tr>
        <tr><td colspan="4"><label>Renda mensal familiar (incluindo você):</label> <?php echo getRenda($_SESSION['RECADASTRO']['Renda_Mensal_Capita'])?></td></tr>
        <tr>
         <td colspan="4">
          <label>Existe em seu domicilio pessoa portadora de deficiencia?</label> 
          <?php echo getSimNao($_SESSION['RECADASTRO']['Deficiente'])?><?php if($_SESSION['RECADASTRO']['Deficiente']==1){ ?>
          <label>Parentesco:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Deficiente_Grau']); }?>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em seu grupo familiar pessoa idosa?</label> <?php echo getSimNao($_SESSION['RECADASTRO']['Idoso'])?></td>
        </tr>
        <tr>
         <td colspan="4"><label>Qual dos itens ha na sua casa?</label>
          <?php getTemEmCasa($_SESSION['RECADASTRO']['TemEmCasa'])?>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você possui algum plano de assistencia medica?:</label> <?php echo getSimNao($_SESSION['RECADASTRO']['PlanoDeSaude'])?>
         <?php if($_SESSION['RECADASTRO']['PlanoDeSaude']==1){ ?> <label>Qual?</label> <?php echo strtoupper($_SESSION['RECADASTRO']['PlanoDeSaude_Qual']); }?></td>
       </tr>
       <tr>
        <td colspan="4">
         <p><label>Use este espaço para alguma observação que julgue necessária:</label></p>
         <p><?php echo strtoupper($_SESSION['RECADASTRO']['Observacoes'])?></p> 
        </td>
       </tr>
      </table>
      <table>
       <tr>
        <td colspan="4"><p><center>Declaro que as informações acima são verdadeiras e estou ciente de estar sujeito às penas da legislação pertinente caso tenha afirmado falsamente os dados</center></p></td>
       </tr>
       <tr>
        <td colspan="4">
         <p><center>Teófilo Otoni, <?php echo date('d')." de ".getMes(date('n'))."  de ".date('Y');?> </center></p>
         <p><center>_____________________________________</center></p>
         <p><center><?php echo strtoupper($_SESSION['RECADASTRO']['Nome'])?></center></p>
        </td>
      </tr>
     </table>
    </div>
    </div>
   </div>
  <footer class="container hidden-print">
   <hr />
   <p>&copy; CPD PMTO
    <span class="pull-right">Powered By: <i class="fa fa-linux"></i><i class="fa fa-html5"></i><i class="fa fa-css3"></i></span>
   </p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../resources/js/bootstrap.js"></script>
 </body>
</html>