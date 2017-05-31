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
     <tr><td colspan="4">1. <label>Nome:</label> <?php echo strtoupper(utf8_decode($_SESSION['RECADASTRO']['Nome']))?></td></tr>
     <tr>
      <td>2. <label>Data de Nascimento:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Nascto'])?></td>
      <td>3. <label>Vínculo:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Vinculo'])?> </td>
      <td>4. <label>Situação:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Situacao'])?> </td>
      <td>5. <label>Matrícula:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Matricula'])?></td>
     </tr>
     <tr>
      <td colspan="3"><label>Filiação:</label>
       <p>6. <i>Mãe:</i> <?php echo strtoupper($_SESSION['RECADASTRO']['Mae'])?></p>
       <p>7. <i>Pai:</i> <?php echo strtoupper($_SESSION['RECADASTRO']['Pai'])?></p>
      </td>
      <td>
       <label>8. Naturalidade:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Naturalidade']);?><br />
       <label>UF:</label> <?php echo $_SESSION['RECADASTRO']['UF']?>
      </td>
     </tr>
     <tr>
      <td>9. <label>RG:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['RG_NUM'])?></td>
      <td>10. <label>Orgão Expedidor:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['RG_ORG'])?> </td>
      <td>11. <label>UF:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['RG_UF'])?></td>
      <td>12. <label>CPF:</label> <?php echo getCPF($_SESSION['RECADASTRO']['CPF'])?></td>
     </tr>
     <tr>
      <td colspan="3">
       13. <label>Grau de Escolaridade:</label> <?php echo strtoupper(getGrau_escolar($_SESSION['RECADASTRO']['Grau_escolar']));?> <?php echo "14. ".strtoupper($_SESSION['RECADASTRO']['Status_escolar'])?>
      </td>
      <td>15. <label>Formação Profissional:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Formacao'])?></td>
     </tr>
     <tr>
      <td colspan="2">16. <label>Cargo:</label> <?php if(!empty($_SESSION['RECADASTRO']['Cargo'])) echo strtoupper($_SESSION['RECADASTRO']['Cargo'])?></td>
      <td>17. <label>Função</label> <?php if(!empty($_SESSION['RECADASTRO']['Funcao'])) echo strtoupper($_SESSION['RECADASTRO']['Funcao']); ?></td>
      <td>18. <label>Secretaria de Lotação:</label> <?php if(!empty($_SESSION['RECADASTRO']['Lotacao'])) echo strtoupper($_SESSION['RECADASTRO']['Lotacao'])?></td>
     </tr>
     <tr>
     <td colspan="3">19. <label>Onde está lotado atualmente?</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Lotado'])?></td>
     <td>20. <label>Quem é o superior imediato?</label><?php echo strtoupper($_SESSION['RECADASTRO']['Sup_Imediato'])?></td>
     </tr>
      <tr>
      <td colspan="2">21. <label>Endereço:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Rua'])?></td>
      <td>22. <label>Número:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Num'])?></td>
      <td>23. <label>Complemento:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Comp'])?></td>
     </tr>
     <tr>
      <td>24. <label>Bairro:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Bairro'])?></td>
      <td>25. <label>CEP:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_CEP'])?></td>
      <td colspan="2">
       <p>26. <label>Cidade:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_Cidade'])?> </p>
       <p>27. <label>UF:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['End_UF'])?></p>
      </td>
     </tr>
     <tr>
      <td>28. <label>Telefone Fixo:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Fone_Fixo'])?></td>
      <td>29. <label>Tipo:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Fone_Tipo'])?></td>
      <td colspan="2">30. <label>Celular:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Fone_Cel'])?></td>
     </tr>
     <tr>
      <td colspan="3">31. <label>E-Mail:</label> <?php echo $_SESSION['RECADASTRO']['Email']?></td>
      <td>32. <label>Sexo:</label> <?php echo strtoupper(getSexo($_SESSION['RECADASTRO']['Sexo']))?></td>
     </tr>
     <tr>
      <td>33. <label>Cor/Etnia:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Cor'])?></td>
      <td colspan="2">34. <label>Estado Civíl:</label> <?php echo strtoupper(getEstCivil($_SESSION['RECADASTRO']['EstCivil']))?> </td>
      <td>
       35. <label>Possui CadUnico:</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['CadUnico']))?>
       <?php if($_SESSION['RECADASTRO']['CadUnico']=="S") echo "<br />34. <label>NIS:</label> ". strtoupper($_SESSION['RECADASTRO']['NIS'])?>
      </td> 
     </tr>
     <tr>
      <td colspan="4">
       36. <label>Tempo de residência em Teófilo Otoni:</label> <?php echo strtoupper(getTimeRes($_SESSION['RECADASTRO']['TimeRes']))?>
      </td>
     </tr>
     <tr>
      <td colspan="2">
       37. <label>Condições de Moradia:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Hab_Tipo'])?>
       <?php echo ", ".strtoupper($_SESSION['RECADASTRO']['Hab_Modo'])?>
      </td>
      <td><?php if($_SESSION['RECADASTRO']['Hab_Modo']=="proprio"){?><label>Quitada:</label><?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['Hab_Quit']));}?></td>
      <td>
       <?php if(($_SESSION['RECADASTRO']['Hab_Quit']=="nao")||($_SESSION['RECADASTRO']['Hab_Modo']=="alugada")){?> <label>Valor:</label> R$<?php echo strtoupper($_SESSION['RECADASTRO']['Hab_Valor']); }?></td>
    </tr>
    <tr>
     <td colspan="4">38. <label>Tipo de transporte que você utiliza pra trabalhar:</label>
      <?php echo strtoupper($_SESSION['RECADASTRO']['Trans_Forma'])?>
      <?php
      if(($_SESSION['RECADASTRO']['Trans_Forma']=="carro")||($_SESSION['RECADASTRO']['Trans_Forma']=="moto")){
        echo "<br /><label>Próprio:  </label>".ucfirst(getSimNao($_SESSION['RECADASTRO']['Trans_Tipo']));
      } ?>
     </td>
    </tr>
    <tr>
     <td colspan="4">39. <label>Lingua estrangeira:</label><br />
      <label>Inglês:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Ling_Ingles'])?><br />
      <label>Espanhol:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Ling_Espanhol'])?><br />
      <?php echo "<label>Outras:</label> ".$_SESSION['RECADASTRO']['Ling_extra'];?>
     </td>
    </tr>
    <tr>
     <td colspan="4">40. <label>Informática:</label><br>
      <?php echo getInfo($_SESSION['RECADASTRO']['Info_word'])?> <label>Word</label><br />
      <?php echo getInfo($_SESSION['RECADASTRO']['Info_excel'])?> <label>Excel</label><br />
      <?php echo getInfo($_SESSION['RECADASTRO']['Info_internet'])?> <label>Internet</label><br />
      <?php if(!empty($_SESSION['RECADASTRO']['Info_Outros'])){ ?> <label>Outros:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Info_Outros']); }?>
     </td>
    </tr>
    <tr>
     <td colspan ="4">
      <table class='table table-striped table-bordered table-hover'>
       <tr><td colspan="6" align="center"><strong>41. Composicao Familiar</strong></td></tr>
       <tr><td><strong>Nome</strong></td><td><strong>Idade</strong></td><td><strong>Parentesco</strong></td><td><strong>Escolaridade</strong></td><td><strong>Ocupação</strong></td><td><strong>Remuneração</strong></td></tr>
       <?php getComposicaoFamiliar($_SESSION['RECADASTRO']['CPF'],1) ?>
      </table>
     </td>
    </tr>
    <tr>
     <td colspan="4">
      42. <label>Você paga pensão alimentícia p/ filhos e/ou ex-conjuge?:</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['Pensao_Paga']))?>
      <?php if($_SESSION['RECADASTRO']['Pensao_Paga']==1){ ?> , <label>Valor:</label> R$<?php echo strtoupper($_SESSION['RECADASTRO']['Pensao_Paga_Val']); } ?>
     </td>
    </tr>
    <tr>
     <td colspan="4">43. <label>Você recebe pensão alimentícia para seus filhos?</label> <?php echo ucfirst(getSimNao($_SESSION['RECADASTRO']['Pensao_Recebe']))?>
     <?php if($_SESSION['RECADASTRO']['Pensao_Recebe']==1){ ?>, <label>Valor:</label> R$<?php echo strtoupper($_SESSION['RECADASTRO']['Pensao_Recebe_Val']); }?>
     </td>
    </tr>
    <tr>
     <td colspan="4">
      44. <label>Quem é a pessoa que mais contribui na renda familiar?</label> 
      <?php echo strtoupper($_SESSION['RECADASTRO']['Renda_Maior'])?>
     </td>
     </tr>
     <tr>
      <td colspan="4">
       45. <label>Renda mensal individual:</label> 
       <?php echo getRenda($_SESSION['RECADASTRO']['Renda_Mensal_Individual'])?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       46. <label>Renda mensal familiar (incluindo você):</label> 
       <?php echo getRenda($_SESSION['RECADASTRO']['Renda_Mensal_Capita'])?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       47. <label>Existe em seu domicílio pessoa portadora de deficiência?</label> 
       <?php echo getSimNao($_SESSION['RECADASTRO']['Deficiente'])?><?php if($_SESSION['RECADASTRO']['Deficiente']==1){ ?>
       <label>Parentesco:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Deficiente_Grau']); ?>
       <label>Deficiência:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Deficiente_Qual']); }?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       48. <label>Existe em sua família alguem que recebe benefícios de transferências de Renda?</label> <?php echo getSimNao($_SESSION['RECADASTRO']['Transferencia'])?><?php if($_SESSION['RECADASTRO']['Transferencia']==1){ ?>
       <br /><label>Qual Programa:</label> <?php echo strtoupper($_SESSION['RECADASTRO']['Transferencia_Qual']); } ?>
      </td>
     </tr>
     <tr><td colspan="4">49. <label>Existe em seu grupo familiar pessoa idosa?</label> <?php echo getSimNao($_SESSION['RECADASTRO']['Idoso'])?></td></tr>
     <tr><td colspan="4">50. <label>Qual dos itens há na sua casa?</label><?php getTemEmCasa($_SESSION['RECADASTRO']['TemEmCasa'],1)?></td></tr>
     <tr>
      <td colspan="4">
       51. <label>Você possui algum plano de assistência médica?:</label> <?php echo getSimNao($_SESSION['RECADASTRO']['PlanoDeSaude'])?>
    <?php if($_SESSION['RECADASTRO']['PlanoDeSaude']==1){ ?> <label>Qual?</label> <?php echo strtoupper($_SESSION['RECADASTRO']['PlanoDeSaude_Qual']); }?>
      </td>
     </tr>
     <tr>
      <td colspan="4">
       <p>52. <label>Use este espaço para alguma observação que julgue necessária:</label></p>
       <p><?php echo strtoupper($_SESSION['RECADASTRO']['Observacoes'])?></p> 
      </td>
     </tr>
    </table>
    <table>
     <tr>
      <td>
       <p>Após a impressão deste formulário, leve-o assinado junto aos os documentos originais listados abaixo na Divisão de Pessoal na Sede da Prefeitura de Teófilo Otoni:</p>
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
    <table>
     <tr>
      <td colspan="4"><p><center>Declaro que as informações acima são verdadeiras e estou ciente de estar sujeito às penas da legislação pertinente caso tenha afirmado falsamente os dados</center></p></td>
     </tr>
     <tr>
      <td colspan="4">
       <center>Teófilo Otoni, <?php echo date('d')." de ".getMes(date('n'))."  de ".date('Y');?> </center>
       <center>_____________________________________</center>
       <center><?php echo strtoupper($_SESSION['RECADASTRO']['Nome'])?></center>
       <center><?php echo strtoupper(getCPF($_SESSION['RECADASTRO']['CPF']))?></center>
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
    <span class="pull-right"><a href="/inc/sair.php" class="btn btn-danger">Sair</a></span>
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
