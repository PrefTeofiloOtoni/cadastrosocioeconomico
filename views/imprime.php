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
   <div class="bg-info hidden-print" style="padding:3px 5px 3px 5px">
   <h3>Após conferir todos os dados, clique no botão "Corrigir" no fim da página para editar os dados ou caso estejam corretos, clique no botão "Imprimir" para imprimir este formulário.</h3>
   </div>
   <h3 class="page-header" align="center">RECADASTRAMENTO DOS SERVIDORES PÚBLICOS MUNICIPAIS</h3>
   <h4 align="center">QUESTIONÁRIO DE PERFIL SOCIOECONÔMICO</h4>
   <h4>ATENÇÃO:</h4>
   <h4>A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis.</h4>
   <h4>Todas as questões visam à coleta de informações para recadastramento dos servidores ativos. Portanto, por favor, não deixe nenhuma questão sem resposta!</h4>
   <div class="col-lg-12">
    <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
    <table class='table table-striped table-bordered'>
     <tr><td colspan="4"><label>Nome:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Nome'])?></td></tr>
     <tr>
      <td><label>Data de Nascimento:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Nascto'])?></td>
      <td><label>Vínculo:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Vinculo'])?> </td>
      <td><label>Situação:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Situacao'])?> </td>
      <td><label>Matrícula:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Matricula'])?></td>
     </tr>
     <tr>
      <td colspan="3"><label>Filiação:</label>
       <p><i>Mãe:</i> <?php echo ucfirst($_SESSION['RECADASTRO']['Mae'])?></p>
       <p><i>Pai:</i> <?php echo ucfirst($_SESSION['RECADASTRO']['Pai'])?></p>
      </td>
      <td>
       <label>Naturalidade:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Naturalidade']);?><br />
       <label>UF:</label> <?php echo $_SESSION['RECADASTRO']['UF']?>
      </td>
     </tr>
     <tr>
      <td><label>RG:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['RG_NUM'])?></td>
      <td><label>Orgão Expeditor:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['RG_ORG'])?> </td>
      <td><label>UF:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['RG_UF'])?></td>
      <td><label>CPF:</label> <?php echo getCPF($_SESSION['RECADASTRO']['CPF'])?></td>
     </tr>
     <tr>
      <td colspan="3">
       <label>Grau de Excolaridade:</label> <?php echo ucfirst(getGrau_escolar($_SESSION['RECADASTRO']['Grau_escolar']));?> <?php echo ucfirst($_SESSION['RECADASTRO']['Status_escolar'])?>
      </td>
      <td><label>Formação Profissional:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Formacao'])?></td>
     </tr>
     <tr>
      <td colspan="3"><label>Cargo Atual:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Cargo'])?></td>
      <td><label>Secretaria de Lotação:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Lotacao'])?></td>
     </tr>
     <tr>
      <td colspan="2"><label>Endereço:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_Rua'])?></td>
      <td><label>Número:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_Num'])?></td>
      <td><label>Complemento:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_Comp'])?></td>
     </tr>
     <tr>
      <td><label>Bairro:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_Bairro'])?></td>
      <td><label>CEP:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_CEP'])?></td>
      <td><label>Cidade:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_Cidade'])?></td>
      <td><label>UF:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['End_UF'])?></td>
     </tr>
     <tr>
      <td><label>Telefone Fixo:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Fone_Fixo'])?></td>
      <td><label>Tipo:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Fone_Tipo'])?></td>
      <td colspan="2"><label>Celular:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Fone_Cel'])?></td>
     </tr>
     <tr>
      <td colspan="3"><label>E-Mail:</label> <?php echo $_SESSION['RECADASTRO']['Email']?></td>
      <td><label>Sexo:</label> <?php echo ucfirst(getSexo($_SESSION['RECADASTRO']['Sexo']))?></td>
     </tr>
     <tr>
      <td><label>Cor/Etnia:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Cor'])?></td>
      <td><label>Estado Civíl:</label> <?php echo ucfirst(getEstCivil($_SESSION['RECADASTRO']['EstCivil']))?> </td>
      <td colspan="2">
       <label>Possui CadUnico:</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['CadUnico']))?>
       <?php if($_SESSION['RECADASTRO']['CadUnico']=="S") echo "<br /><label>NIS:</label> ". ucfirst($_SESSION['RECADASTRO']['NIS'])?>
      </td> 
     </tr>
     <tr>
      <td colspan="4">
       <label>Tempo de residência em Teofilo Otoni:</label> <?php echo ucfirst(getTimeRes($_SESSION['RECADASTRO']['TimeRes']))?>
      </td>
     </tr>
     <tr>
      <td><label>Condições de Moradia:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Hab_Tipo'])?></td>
      <td><?php echo ucfirst($_SESSION['RECADASTRO']['Hab_Modo'])?></td>
      <td><?php if($_SESSION['RECADASTRO']['Hab_Modo']=="Propria"){?><label>Quitada:</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['Hab_Quit'])); }?></td>
      <td>
       <?php if(($_SESSION['RECADASTRO']['Hab_Quit']=="nao")||($_SESSION['RECADASTRO']['Hab_Modo']=="alugada")){?> <label>Valor:</label> R$<?php echo ucfirst($_SESSION['RECADASTRO']['Hab_Valor']); }?></td>
    </tr>
    <tr>
     <td colspan="4"><label>Tipo de transporte que voce utiliza pra trabalhar:</label>
      <?php echo ucfirst($_SESSION['RECADASTRO']['Trans_Forma'])?>
      <?php
      if(($_SESSION['RECADASTRO']['Trans_Forma']=="carro")||($_SESSION['RECADASTRO']['Trans_Forma']=="moto")){
        echo "<br /><label>Próprio:  </label>".ucfirst(getSimNao($_SESSION['RECADASTRO']['Trans_Tipo']));
      } ?>
     </td>
    </tr>
    <tr>
     <td colspan="4"><label>Lingua estrangeira:</label><br />
      <label>Inglês:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Ling_Ingles'])?><br />
      <label>Espanhol:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Ling_Espanhol'])?><br />
      <?php echo "<label>Outras:</label> ".$_SESSION['RECADASTRO']['Ling_extra'];?>
     </td>
    </tr>
    <tr>
     <td colspan="4"><label>Informática:</label><br>
      <?php echo getInfo($_SESSION['RECADASTRO']['Info_word'])?> <label>Word</label><br />
      <?php echo getInfo($_SESSION['RECADASTRO']['Info_excel'])?> <label>Excel</label><br />
      <?php echo getInfo($_SESSION['RECADASTRO']['Info_internet'])?> <label>Internet</label><br />
      <?php if(!empty($_SESSION['RECADASTRO']['Info_Outros'])){ ?> <label>Outros:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Info_Outros']); }?>
     </td>
    </tr>
    <tr>
     <td colspan ="4">
      <table class='table table-striped table-bordered table-hover'>
       <tr><td colspan="6" align="center"><strong>Composicao Familiar</strong></td></tr>
       <tr><td><strong>Nome</strong></td><td><strong>Idade</strong></td><td><strong>Parentesco</strong></td><td><strong>Escolaridade</strong></td><td><strong>Ocupação</strong></td><td><strong>Remuneração</strong></td></tr>
       <?php getComposicaoFamiliar($_SESSION['RECADASTRO']['CPF'],1) ?>
      </table>
     </td>
    </tr>
    <tr>
     <td colspan="4">
      <label>Você paga pensao alimentícia p/ filhos e/ou ex-conjuge?:</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['Pensao_Paga']))?>
      <?php if($_SESSION['RECADASTRO']['Pensao_Paga']==1){ ?> , <label>Valor:</label> R$<?php echo ucfirst($_SESSION['RECADASTRO']['Pensao_Paga_Val']); } ?>
     </td>
    </tr>
    <tr>
     <td colspan="4"><label>Você recebe pensao alimentícia para seus filhos?</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['Pensao_Recebe']))?>
     <?php if($_SESSION['RECADASTRO']['Pensao_Recebe']==1){ ?>, <label>Valor:</label> R$<?php echo ucfirst($_SESSION['RECADASTRO']['Pensao_Recebe_Val']); }?>
     </td>
    </tr>
    <tr>
     <td colspan="4">
      <label>Quem é a pessoa que mais contribui na renda familiar?</label> 
      <?php echo ucfirst($_SESSION['RECADASTRO']['Renda_Maior'])?>
     </td>
     </tr>
     <tr>
      <td colspan="4">
       <label>Renda mensal individual:</label> 
       <?php echo getRenda($_SESSION['RECADASTRO']['Renda_Mensal_Individual'])?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       <label>Renda mensal familiar (incluindo você):</label> 
       <?php echo getRenda($_SESSION['RECADASTRO']['Renda_Mensal_Capita'])?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       <label>Existe em seu domicílio pessoa portadora de deficiencia?</label> 
       <?php echo getSimNao($_SESSION['RECADASTRO']['Deficiente'])?><?php if($_SESSION['RECADASTRO']['Deficiente']==1){ ?>
       <label>Parentesco:</label> <?php echo ucfirst($_SESSION['RECADASTRO']['Deficiente_Grau']); }?>
      </td>
     </tr>
     <tr><td colspan="4"><label>Existe em seu grupo familiar pessoa idosa?</label> <?php echo getSimNao($_SESSION['RECADASTRO']['Idoso'])?></td></tr>
     <tr><td colspan="4"><label>Qual dos itens ha na sua casa?</label><?php getTemEmCasa($_SESSION['RECADASTRO']['TemEmCasa'],1)?></td></tr>
     <tr>
      <td colspan="4">
       <label>Você possui algum plano de assistência médica?:</label> <?php echo getSimNao($_SESSION['RECADASTRO']['PlanoDeSaude'])?>
    <?php if($_SESSION['RECADASTRO']['PlanoDeSaude']==1){ ?> <label>Qual?</label> <?php echo ucfirst($_SESSION['RECADASTRO']['PlanoDeSaude_Qual']); }?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       <p><label>Use este espaço para alguma observação que julgue necessária:</label></p>
       <p><?php echo ucfirst($_SESSION['RECADASTRO']['Observacoes'])?></p> 
      </td>
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
       <center><?php echo ucfirst($_SESSION['RECADASTRO']['Nome'])?></center>
       <center><?php echo ucfirst(getCPF($_SESSION['RECADASTRO']['CPF']))?></center>
      </td>
     </tr>
    </table>
    <table>
     <tr>
      <td>
       <p>Após a impressão deste formulário, traga assinado junto com os documentos originais listados a baixo na Sede da Prefeitura de Teófilo Otoni:</p>
       <p>[&nbsp;&nbsp;&nbsp;] Documento de Identificação com Foto (RG, CTPS, Passaporte).</p>
       <p>[&nbsp;&nbsp;&nbsp;] Compovante de Residência (Conta de Água, Luz, Telefone, etc)</p>
       <p>[&nbsp;&nbsp;&nbsp;] </p>
       <p>[&nbsp;&nbsp;&nbsp;] </p>
       <p>[&nbsp;&nbsp;&nbsp;] </p>
       <p>[&nbsp;&nbsp;&nbsp;] </p>
       <p>[&nbsp;&nbsp;&nbsp;] </p>
      </td>
     </tr>
    </table>
   </div>
  </div>
  <div class="hidden-print container bg-info">
   <h3>Após conferir todos os dados, clique no botão "Corrigir" no fim da página para editar os dados ou caso estejam corretos, clique no botão "Imprimir" para imprimir este formulário.</h3>
  </div>
  <div class="hidden-print container">
   <p>
    <a href="/" class="btn btn-info">Corrigir</a>
    <a href="#" onclick="window.print()" class="btn btn-warning">Confirmar e Imprimir</a>
    <span class="pull-right"><a href="/inc/sair.php" class="btn btn-danger">Sair</a></span>
   </p>
  </div>
  <footer class="container hidden-print">
   <hr />
   <p>&copy; CPD PMTO
    <span class="pull-right">Powered By: <i class="fa fa-github"></i><i class="fa fa-linux"></i><i class="fa fa-html5"></i><i class="fa fa-css3"></i></span>
   </p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../resources/js/bootstrap.js"></script>
 </body>
</html>
