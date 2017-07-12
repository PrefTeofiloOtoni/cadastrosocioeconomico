<?php session_start(); @include('../inc/functions.php'); ?><!DOCTYPE html>
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
  <meta property="og:url" content="<?php getURL() ?>" />
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
   <div class="bg-info hidden-print" style="padding:3px 5px 3px 5px">
   <h3>Após conferir todos os dados, você poderá clicar no botão "Corrigir" ao fim da página para editar os dados, ou caso estejam corretos, clique no botão "Confirmar e Imprimir" para imprimir este formulário.</h3>
   </div>
   <h3 class="page-header" align="center">RECADASTRAMENTO DOS SERVIDORES PÚBLICOS MUNICIPAIS</h3>
   <h4 align="center">QUESTIONÁRIO DE PERFIL SOCIOECONÔMICO</h4>
   <h4>ATENÇÃO:</h4>
   <h4>A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis.</h4>
   <h4>Todas as questões visam à coleta de informações para recadastramento dos servidores ativos. Portanto, por favor, não deixe nenhuma questão sem resposta!</h4>
   <div class="col-lg-12">
    <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
    <table class='table table-striped table-bordered'>
     <tr><td colspan="3">1. <label>Nome:</label> <?php echo strtoupper(utf8_decode($_SESSION['PENSIONISTA']['PNome']))?></td>
         <td>2. <label>Data de Nascimento:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PNascto'])?></td>
     </tr>
     <tr><td colspan="2"><label>Nome do Pensionista:</label> <?php echo strtoupper(utf8_decode($_SESSION['PENSIONISTA']['FNome']))?></td>
        <td><label>Matricula:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['FMatricula'])?></td>
        <td><label>CPF Pensionista:</label> <?php echo getCPF($_SESSION['PENSIONISTA']['FCPF'])?></td>
	</tr>

     <tr>
      <td colspan="3"><label>Filiação:</label>
       <p>3. <i>Mãe:</i> <?php echo strtoupper($_SESSION['PENSIONISTA']['PMae'])?></p>
       <p>4. <i>Pai:</i> <?php echo strtoupper($_SESSION['PENSIONISTA']['PPai'])?></p>
      </td>
      <td>
       <label>5. Naturalidade:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PNaturalidade']);?><br />
       <label>UF:</label> <?php echo $_SESSION['PENSIONISTA']['PUF']?>
      </td>
     </tr>
     <tr>
      <td>6. <label>RG:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PRG_NUM'])?></td>
      <td>7. <label>Orgão Expedidor:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PRG_ORG'])?> </td>
      <td>8. <label>UF:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PRG_UF'])?></td>
      <td>9. <label>CPF:</label> <?php echo getCPF($_SESSION['PENSIONISTA']['PCPF'])?></td>
     </tr>
     <tr>
      <td colspan="3">
       10. <label>Grau de Escolaridade:</label> <?php echo strtoupper(getGrau_escolar($_SESSION['PENSIONISTA']['PGrau_escolar']));?> <?php echo "<b>11</b>. ".strtoupper($_SESSION['PENSIONISTA']['PStatus_escolar'])?>
      </td>
      <td>12. <label>Formação Profissional:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PFormacao'])?></td>
     </tr>
     <tr>
      <tr>
      <td colspan="2">13. <label>Endereço:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_Rua'])?></td>
      <td>14. <label>Número:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_Num'])?></td>
      <td>15. <label>Complemento:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_Comp'])?></td>
     </tr>
     <tr>
      <td>16. <label>Bairro:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_Bairro'])?></td>
      <td>17. <label>CEP:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_CEP'])?></td>
      <td>18. <label>Cidade:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_Cidade'])?> </td>
      <td>19. <label>UF:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PEnd_UF'])?></td>
     </tr>
     <tr>
      <td>20. <label>Telefone Fixo:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PFone_Fixo'])?></td>
      <td>21. <label>Tipo:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PFone_Tipo'])?></td>
      <td colspan="2">22. <label>Celular:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PFone_Cel'])?></td>
     </tr>
     <tr>
      <td colspan="3">23. <label>E-Mail:</label> <?php echo $_SESSION['PENSIONISTA']['PEmail']?></td>
      <td>24. <label>Sexo:</label> <?php echo strtoupper(getSexo($_SESSION['PENSIONISTA']['PSexo']))?></td>
     </tr>
     <tr>
      <td>25. <label>Cor/Etnia:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PCor'])?></td>
      <td colspan="2">26. <label>Estado Civíl:</label> <?php echo strtoupper(getEstCivil($_SESSION['PENSIONISTA']['PEstCivil']))?> </td>
      <td>
       27. <label>Possui CadUnico:</label> <?php echo ucfirst(getSimNao($_SESSION['PENSIONISTA']['PCadUnico']))?>
       <?php if($_SESSION['PENSIONISTA']['PCadUnico']=="S") echo "<br />34. <label>NIS:</label> ". strtoupper($_SESSION['PENSIONISTA']['PNIS'])?>
      </td> 
     </tr>
     <tr>
      <td colspan="4">
       28. <label>Tempo de residência em Teófilo Otoni:</label> <?php echo strtoupper(getTimeRes($_SESSION['PENSIONISTA']['PTimeRes']))?>
      </td>
     </tr>
     <tr>
      <td colspan="2">
       29. <label>Condições de Moradia:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PHab_Tipo'])?>
       <?php echo ", ".strtoupper($_SESSION['PENSIONISTA']['PHab_Modo'])?>
      </td>
      <td><?php if($_SESSION['PENSIONISTA']['PHab_Modo']=="proprio"){?><label>Quitada:</label><?php echo ucfirst(getSimNao($_SESSION['PENSIONISTA']['PHab_Quit']));}?></td>
      <td>
       <?php if(($_SESSION['PENSIONISTA']['PHab_Quit']=="nao")||($_SESSION['PENSIONISTA']['PHab_Modo']=="alugada")){?> <label>Valor:</label> R$<?php echo strtoupper($_SESSION['PENSIONISTA']['PHab_Valor']); }?></td>
    </tr>
    <tr>
     <td colspan="4">30. <label>Tipo de transporte que você utiliza pra trabalhar:</label>
      <?php echo strtoupper($_SESSION['PENSIONISTA']['PTrans_Forma'])?>
      <?php
      if(($_SESSION['PENSIONISTA']['PTrans_Forma']=="carro")||($_SESSION['PENSIONISTA']['PTrans_Forma']=="moto")){
        echo "<br /><label>Próprio:  </label>".ucfirst(getSimNao($_SESSION['PENSIONISTA']['PTrans_Tipo']));
      } ?>
     </td>
    </tr>
    <tr>
     <td colspan="4">31. <label>Lingua estrangeira:</label><br />
      <label>Inglês:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PLing_Ingles'])?><br />
      <label>Espanhol:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PLing_Espanhol'])?><br />
      <?php echo "<label>Outras:</label> ".$_SESSION['PENSIONISTA']['PLing_extra'];?>
     </td>
    </tr>
    <tr>
     <td colspan="4">32. <label>Informática:</label><br>
      <?php echo getInfo($_SESSION['PENSIONISTA']['PInfo_word'])?> <label>Word</label><br />
      <?php echo getInfo($_SESSION['PENSIONISTA']['PInfo_excel'])?> <label>Excel</label><br />
      <?php echo getInfo($_SESSION['PENSIONISTA']['PInfo_internet'])?> <label>Internet</label><br />
      <?php if(!empty($_SESSION['PENSIONISTA']['PInfo_Outros'])){ ?> <label>Outros:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PInfo_Outros']); }?>
     </td>
    </tr>
    <tr>
     <td colspan ="4">
      <table class='table table-striped table-bordered table-hover'>
       <tr><td colspan="6" align="center"><strong>33. Composicao Familiar</strong></td></tr>
       <tr><td><strong>Nome</strong></td><td><strong>Idade</strong></td><td><strong>Parentesco</strong></td><td><strong>Escolaridade</strong></td><td><strong>Ocupação</strong></td><td><strong>Remuneração</strong></td></tr>
       <?php getComposicaoFamiliar($_SESSION['PENSIONISTA']['PCPF'],1) ?>
      </table>
     </td>
    </tr>
    <tr>
     <td colspan="4">
      34. <label>Você paga pensão alimentícia p/ filhos e/ou ex-conjuge?:</label> <?php echo ucfirst(getSimNao($_SESSION['PENSIONISTA']['PPensao_Paga']))?>
      <?php if($_SESSION['PENSIONISTA']['PPensao_Paga']==1){ ?> , <label>Valor:</label> R$<?php echo strtoupper($_SESSION['PENSIONISTA']['PPensao_Paga_Val']); } ?>
     </td>
    </tr>
    <tr>
     <td colspan="4">35. <label>Você recebe pensão alimentícia para seus filhos?</label> <?php echo ucfirst(getSimNao($_SESSION['PENSIONISTA']['PPensao_Recebe']))?>
     <?php if($_SESSION['PENSIONISTA']['PPensao_Recebe']==1){ ?>, <label>Valor:</label> R$<?php echo strtoupper($_SESSION['PENSIONISTA']['PPensao_Recebe_Val']); }?>
     </td>
    </tr>
    <tr>
     <td colspan="4">
      36. <label>Quem é a pessoa que mais contribui na renda familiar?</label> 
      <?php echo strtoupper($_SESSION['PENSIONISTA']['PRenda_Maior'])?>
     </td>
     </tr>
     <tr>
      <td colspan="4">
       37. <label>Renda mensal individual:</label> 
       <?php echo getRenda($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual'])?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       38. <label>Renda mensal familiar (incluindo você):</label> 
       <?php echo getRenda($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita'])?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       39. <label>Existe em seu domicílio pessoa portadora de deficiência?</label> 
       <?php echo getSimNao($_SESSION['PENSIONISTA']['PDeficiente'])?><?php if($_SESSION['PENSIONISTA']['PDeficiente']==1){ ?>
       <label>Parentesco:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PDeficiente_Grau']); ?>
       <label>Deficiência:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PDeficiente_Qual']); }?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       40. <label>Existe em sua família alguem que recebe benefícios de transferências de Renda?</label> <?php echo getSimNao($_SESSION['PENSIONISTA']['PTransferencia'])?><?php if($_SESSION['PENSIONISTA']['PTransferencia']==1){ ?>
       <br /><label>Qual Programa:</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PTransferencia_Qual']); } ?>
      </td>
     </tr>
     <tr><td colspan="4">41. <label>Existe em seu grupo familiar pessoa idosa?</label> <?php echo getSimNao($_SESSION['PENSIONISTA']['PIdoso'])?></td></tr>
     <tr><td colspan="4">42. <label>Qual dos itens há na sua casa?</label><?php getTemEmCasa($_SESSION['PENSIONISTA']['PTemEmCasa'],1)?></td></tr>
     <tr>
      <td colspan="4">
       43. <label>Você possui algum plano de assistência médica?:</label> <?php echo getSimNao($_SESSION['PENSIONISTA']['PPlanoDeSaude'])?>
    <?php if($_SESSION['PENSIONISTA']['PPlanoDeSaude']==1){ ?> <label>Qual?</label> <?php echo strtoupper($_SESSION['PENSIONISTA']['PPlanoDeSaude_Qual']); }?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       <p>44. <label>Use este espaço para alguma observação que julgue necessária:</label></p>
       <p><?php echo strtoupper($_SESSION['PENSIONISTA']['PObservacoes'])?></p> 
      </td>
     </tr>
    </table> 
    <table class='table table-striped table-bordered'>
    <tr>
    <td>Após a impressão deste formulário, leve-o assinado, junto com os documentos que estão listados na página recadastro.teofilootoni.mg.gov.br ou que estão relatados no decreto Nº <i>7.684, de 12 de junho de 2017.</i></td>
    </tr>
    </table>

    <table>
     <tr>
      <td colspan="4"><p><center>Declaro que as informações acima são verdadeiras e estou ciente de estar sujeito às penas da legislação pertinente caso tenha afirmado falsamente os dados</center></p></td>
     </tr>
     <tr>
      <td colspan="4">
       <center>Teófilo Otoni, <?php echo date('d')." de ".getMes(date('n'))."  de ".date('Y');?> </center>
       <center>_____________________________________</center>
       <center><?php echo strtoupper($_SESSION['PENSIONISTA']['PNome'])?></center>
       <center><?php echo strtoupper(getCPF($_SESSION['PENSIONISTA']['PCPF']))?></center>
      </td>
     </tr>
    </table>
   </div>
  </div>
  <div class="hidden-print container bg-info">
   <h3>Após conferir todos os dados, você poderá clicar no botão "Corrigir" ao fim da página para editar os dados, ou caso estejam corretos, clique no botão "Confirmar e Imprimir" para imprimir este formulário.</h3>
  </div>
  <div class="hidden-print container">
   <p>
   <a href="/" class="btn btn-info">Corrigir</a>
    <a href="#" onclick="window.print()" class="btn btn-warning">Confirmar e Imprimir</a>
    <span class="pull-right"><a href="<?php getURL();?>/inc/sair.php" class="btn btn-danger">Sair</a></span>
   </p>
  </div>
  <footer class="container hidden-print">
   <hr />
   <p>&copy; CPD PMTO
    <span class="pull-right">
     Powered By:
     <a href="https://github.com/PrefeituraTO/cadastrosocioeconomico" target="_BLANK"><i class="fa fa-github"></i></a>
     <a href="https://linux.org" target="_BLANK"><i class="fa fa-linux"></i></a>
     <a href="https://www.w3schools.com/html/html5_intro.asp" target="_BLANK"><i class="fa fa-html5"></i></a>
     <a href="https://www.w3schools.com/css/css3_intro.asp" target="_BLANK"><i class="fa fa-css3"></i></a>
    </span>
   </p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../resources/js/bootstrap.js"></script>
 </body>
</html>
