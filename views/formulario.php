     <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
     <form class="form-signin" action="inc/inserir.php" method="POST">
      <table class='table table-striped table-bordered table-hover'>
       <tr>
        <td colspan="4">
         <label>Nome:</label> <?php echo $_SESSION['RECADASTRO']['Nome']?>
         <input type="hidden" name="Nome" id="Nome" value="<?php echo $_SESSION['RECADASTRO']['Nome']?>" />
        </td>
       </tr>
       <tr>
        <td>
         <label>Data de Nascimento:</label> <?php echo $_SESSION['RECADASTRO']['Nascto']?>
         <input type="hidden" name="Nascto" id="Nascto" value="<?php echo $_SESSION['RECADASTRO']['Nascto']?>" />
        </td>
        <td>
         <label>Vínculo:</label> <?php echo $_SESSION['RECADASTRO']['Vinculo']; ?>
         <input type="hidden" name="Vinculo" id="Vinculo" value="<?php echo $_SESSION['RECADASTRO']['Vinculo']?>" />
        </td>
        <td>
         <label>Situação:</label> <?php echo $_SESSION['RECADASTRO']['Situacao']; ?>
         <input type="hidden" name="Situacao" id="Situacao" value="<?php echo $_SESSION['RECADASTRO']['Situacao']?>" />
        </td>
        <td>
         <label>Matrícula:</label> <?php echo $_SESSION['RECADASTRO']['Matricula']?>
         <input type="hidden" name="Matricula" id="Matricula" value="<?php echo $_SESSION['RECADASTRO']['Matricula']?>" />
        </td>
       </tr>
       <tr>
       <td colspan="3"><label>Filiação:</label>
	<br /><?php ifExisteText($_SESSION['RECADASTRO']['Mae'],'Mae','Mãe'); ?>
	<br /><?php ifExisteText($_SESSION['RECADASTRO']['Pai'],'Pai','Pai'); ?>
       </td>
       <td>
        <label>Naturalidade:</label>
	<?php ifExisteText($_SESSION['RECADASTRO']['Naturalidade'],'Naturalidade','Cidade'); ?>
        <?php if(!empty($_SESSION['RECADASTRO']['UF'])){
                  echo "<br /><strong>UF: </strong>". utf8_encode($_SESSION['RECADASTRO']['UF']);
                  echo "<input type=\"hidden\" name=\"UF\" id=\"UF\" value=\"".$_SESSION['RECADASTRO']['UF']."\" />";
          }else{ ?>
          <select class="form-control" name="UF">
           <option value="">Escolha...</option>
           <option value="AC">Acre</option>
           <option value="AL">Alagoas</option>
           <option value="AP">Amapá</option>
           <option value="AM">Amazonas</option>
           <option value="BA">Bahia</option>
           <option value="CE">Ceará</option>
           <option value="DF">Distrito Federal</option>
           <option value="ES">Espirito Santo</option>
           <option value="GO">Goiás</option>
           <option value="MA">Maranhão</option>
           <option value="MS">Mato Grosso do Sul</option>
           <option value="MT">Mato Grosso</option>
           <option value="MG">Minas Gerais</option>
           <option value="PA">Pará</option>
           <option value="PB">Paraíba</option>
           <option value="PR">Paraná</option>
           <option value="PE">Pernambuco</option>
           <option value="PI">Piauí</option>
           <option value="RJ">Rio de Janeiro</option>
           <option value="RN">Rio Grande do Norte</option>
           <option value="RS">Rio Grande do Sul</option>
           <option value="RO">Rondônia</option>
           <option value="RR">Roraima</option>
           <option value="SC">Santa Catarina</option>
           <option value="SP">São Paulo</option>
           <option value="SE">Sergipe</option>
           <option value="TO">Tocantins</option>
          </select>
        <?php } ?>
        </td>
       </tr>
       <tr>
        <td><?php ifExisteText($_SESSION['RECADASTRO']['RG_NUM'],'RG_NUM','RG'); ?></td>
        <td><?php ifExisteText($_SESSION['RECADASTRO']['RG_ORG'],'RG_ORG','Orgão Expeditor'); ?></td>
         <td>
          <strong>UF:</strong><?php if(!empty($_SESSION['RECADASTRO']['RG_UF'])){
                  echo utf8_encode($_SESSION['RECADASTRO']['RG_UF']);
                  echo "<input type=\"hidden\" name=\"RG_UF\" id=\"RG_UF\" value=\"".$_SESSION['RECADASTRO']['RG_UF']."\" />";
          }else{
 ?>
          <select class="form-control" name="RG_UF">
           <option value="">Escolha...</option>
           <option value="AC">Acre</option>
           <option value="AL">Alagoas</option>
           <option value="AP">Amapá</option>
           <option value="AM">Amazonas</option>
           <option value="BA">Bahia</option>
           <option value="CE">Ceará</option>
           <option value="DF">Distrito Federal</option>
           <option value="ES">Espirito Santo</option>
           <option value="GO">Goiás</option>
           <option value="MA">Maranhão</option>
           <option value="MS">Mato Grosso do Sul</option>
           <option value="MT">Mato Grosso</option>
           <option value="MG">Minas Gerais</option>
           <option value="PA">Pará</option>
           <option value="PB">Paraíba</option>
           <option value="PR">Paraná</option>
           <option value="PE">Pernambuco</option>
           <option value="PI">Piauí</option>
           <option value="RJ">Rio de Janeiro</option>
           <option value="RN">Rio Grande do Norte</option>
           <option value="RS">Rio Grande do Sul</option>
           <option value="RO">Rondônia</option>
           <option value="RR">Roraima</option>
           <option value="SC">Santa Catarina</option>
           <option value="SP">São Paulo</option>
           <option value="SE">Sergipe</option>
           <option value="TO">Tocantins</option>
          </select>
        <?php } ?>
         </td>
        <td><strong>CPF:</strong> <?php echo getCPF($_SESSION['RECADASTRO']['CPF'])?><input type="hidden" name="CPF" id="CPF" value="<?php echo $_SESSION['RECADASTRO']['CPF']?>" /></td>
       </tr>
       <tr>
        <td colspan="3">
         <label>Grau de Escolaridade:</label>
         <select class="form-control" name="Grau_escolar">
          <option value="">Escolha...</option>
          <option value="fund" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="fund")echo "selected"; ?>>Ensino Fundamental</option>
          <option value="medio" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="medio")echo "selected"; ?>>Ensino Médio</option>
          <option value="sup" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="sup")echo "selected"; ?>>Superior</option>
          <option value="esp" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="esp")echo "selected"; ?>>Pos-Graduação</option>
          <option value="mes" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="mes")echo "selected"; ?>>Mestrado</option>
          <option value="doc" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="doc")echo "selected"; ?>>Doutorado</option>
          <option value="posdoc" <?php if($_SESSION['RECADASTRO']['Grau_escolar']=="posdoc")echo "selected"; ?>>Pós-Doutorado</option>
         </select>
	 <input type="radio" name="Status_escolar" value="completo" <?php if($_SESSION['RECADASTRO']['Status_escolar']=="completo")echo "checked";  ?> />&nbsp;Completo
	 <input type="radio" name="Status_escolar" value="incompleto" <?php if($_SESSION['RECADASTRO']['Status_escolar']=="incompleto")echo "checked";?> />&nbsp;Incompleto
        </td>
	<td><label>Formação Profissional:</label><input type="text" name="Formacao" id="Formacao" value="<?php echo $_SESSION['RECADASTRO']['Formacao'];?>" class="form-control" placeholder="Formação Profissional" /></td>
       </tr>
       <tr>
       <td colspan="3"><label>Cargo Atual:</label><input type="text" name="Cargo" id="Cargo" value="<?php echo $_SESSION['RECADASTRO']['Cargo'];?>" class="form-control" placeholder="Cargo Atual" required /></td>
       <td><label>Secretaria de Lotaçao:</label><input type="text" name="Lotacao" id="Lotacao" value="<?php echo $_SESSION['RECADASTRO']['Lotacao'];?>" class="form-control" placeholder="Secretaria de Lotação" required /></td>
       </tr>
       <tr>
       <td colspan="2"><label>Endereço:</label><input type="text" name="End_Rua" id="End_Rua" value="<?php echo $_SESSION['RECADASTRO']['End_Rua'];?>" class="form-control" placeholder="Rua" required /></td>
       <td><label>Número:</label><input type="text" name="End_Num" id="End_Num" value="<?php echo $_SESSION['RECADASTRO']['End_Num'];?>" class="form-control" placeholder="Número" required /></td>
       <td><label>Complemento:</label><input type="text" name="End_Comp" id="End_Comp" value="<?php echo $_SESSION['RECADASTRO']['End_Comp'];?>" class="form-control" placeholder="Complemento" /></td>
       </tr>
       <tr>
       <td><label>Bairro:</label><input type="text" name="End_Bairro" id="End_Bairro" value="<?php echo $_SESSION['RECADASTRO']['End_Bairro'];?>" class="form-control" placeholder="Centro" required /></td>
	<td>
         <label>CEP:</label>
	 <input type="text" name="End_CEP" id="End_CEP" value="<?php echo $_SESSION['RECADASTRO']['End_CEP'];?>" class="form-control" placeholder="39800000" maxlength="10" onkeyup="mascara(this,mcep)"  required />
        </td>
	<td><label>Cidade:</label><input type="text" name="End_Cidade" id="End_Cidade" value="<?php echo $_SESSION['RECADASTRO']['End_Cidade'];?>" class="form-control" placeholder="" required /></td>
        <td>
         <label>UF:</label>
         <select class="form-control" name="End_UF">
          <option value="">Escolha...</option>
          <option value="AC" <?php if($_SESSION['RECADASTRO']['End_UF']=="AC")echo "selected"; ?>>Acre</option>
          <option value="AL" <?php if($_SESSION['RECADASTRO']['End_UF']=="AL")echo "selected"; ?>>Alagoas</option>
          <option value="AP" <?php if($_SESSION['RECADASTRO']['End_UF']=="AP")echo "selected"; ?>>Amapá</option>
          <option value="AM" <?php if($_SESSION['RECADASTRO']['End_UF']=="AM")echo "selected"; ?>>Amazonas</option>
          <option value="BA" <?php if($_SESSION['RECADASTRO']['End_UF']=="BA")echo "selected"; ?>>Bahia</option>
          <option value="CE" <?php if($_SESSION['RECADASTRO']['End_UF']=="CE")echo "selected"; ?>>Ceará</option>
          <option value="DF" <?php if($_SESSION['RECADASTRO']['End_UF']=="DF")echo "selected"; ?>>Distrito Federal</option>
          <option value="ES" <?php if($_SESSION['RECADASTRO']['End_UF']=="ES")echo "selected"; ?>>Espirito Santo</option>
          <option value="GO" <?php if($_SESSION['RECADASTRO']['End_UF']=="GO")echo "selected"; ?>>Goiás</option>
          <option value="MA" <?php if($_SESSION['RECADASTRO']['End_UF']=="MA")echo "selected"; ?>>Maranhão</option>
          <option value="MS" <?php if($_SESSION['RECADASTRO']['End_UF']=="MS")echo "selected"; ?>>Mato Grosso do Sul</option>
          <option value="MT" <?php if($_SESSION['RECADASTRO']['End_UF']=="MT")echo "selected"; ?>>Mato Grosso</option>
          <option value="MG" <?php if($_SESSION['RECADASTRO']['End_UF']=="MG")echo "selected"; ?>>Minas Gerais</option>
          <option value="PA" <?php if($_SESSION['RECADASTRO']['End_UF']=="PA")echo "selected"; ?>>Pará</option>
          <option value="PB" <?php if($_SESSION['RECADASTRO']['End_UF']=="PB")echo "selected"; ?>>Paraíba</option>
          <option value="PR" <?php if($_SESSION['RECADASTRO']['End_UF']=="PR")echo "selected"; ?>>Paraná</option>
          <option value="PE" <?php if($_SESSION['RECADASTRO']['End_UF']=="PE")echo "selected"; ?>>Pernambuco</option>
          <option value="PI" <?php if($_SESSION['RECADASTRO']['End_UF']=="PI")echo "selected"; ?>>Piauí</option>
          <option value="RJ" <?php if($_SESSION['RECADASTRO']['End_UF']=="RJ")echo "selected"; ?>>Rio de Janeiro</option>
          <option value="RN" <?php if($_SESSION['RECADASTRO']['End_UF']=="RN")echo "selected"; ?>>Rio Grande do Norte</option>
          <option value="RS" <?php if($_SESSION['RECADASTRO']['End_UF']=="RS")echo "selected"; ?>>Rio Grande do Sul</option>
          <option value="RO" <?php if($_SESSION['RECADASTRO']['End_UF']=="RO")echo "selected"; ?>>Rondônia</option>
          <option value="RR" <?php if($_SESSION['RECADASTRO']['End_UF']=="RR")echo "selected"; ?>>Roraima</option>
          <option value="SC" <?php if($_SESSION['RECADASTRO']['End_UF']=="SC")echo "selected"; ?>>Santa Catarina</option>
          <option value="SP" <?php if($_SESSION['RECADASTRO']['End_UF']=="SP")echo "selected"; ?>>São Paulo</option>
          <option value="SE" <?php if($_SESSION['RECADASTRO']['End_UF']=="SE")echo "selected"; ?>>Sergipe</option>
          <option value="TO" <?php if($_SESSION['RECADASTRO']['End_UF']=="TO")echo "selected"; ?>>Tocantins</option>
         </select>
        </td>
       </tr>
       <tr>
       <td><label>Telefone Fixo:</label><input type="text" name="Fone_Fixo" id="Fone_Fixo" value="<?php echo $_SESSION['RECADASTRO']['Fone_Fixo'];?>" class="form-control" maxlength="14" onkeyup="mascara(this,mfixo)"/></td>
        <td>
         <label>Tipo:</label><select class="form-control" name="Fone_Tipo">
          <option value="">Escolha...</option>
	  <option value="proprio" <?php if($_SESSION['RECADASTRO']['Fone_Tipo']=="proprio") echo "selected"; ?>>Próprio</option>
	  <option value="recado"  <?php if($_SESSION['RECADASTRO']['Fone_Tipo']=="recado")  echo "selected"; ?>>Recado</option>
         </select>
        </td>
	<td colspan="2"><label>Telefone Celular:</label><input type="text" name="Fone_Cel" id="Fone_Cel" value="<?php echo $_SESSION['RECADASTRO']['Fone_Cel'];?>" class="form-control" maxlength="15" onkeyup="mascara(this,mcel)"/></td>
       </tr>
       <tr>
       <td colspan="3"><label>E-Mail:</label><input type="email" name="Email" id="Email" value="<?php echo $_SESSION['RECADASTRO']['Email'];?>" class="form-control" placeholder="E-Mail" /></td>
        <td><label>Sexo:</label>
         <select class="form-control" name="Sexo">
          <option value="">Escolha...</option>
          <option value="F" <?php if($_SESSION['RECADASTRO']['Sexo']=="F")echo "selected"; ?>>Feminino</option>
          <option value="M" <?php if($_SESSION['RECADASTRO']['Sexo']=="M")echo "selected"; ?>>Masculino</option>
         </select>
        </td>
       </tr>
       <tr>
        <td><label>Cor/Etnia:</label>
         <select class="form-control" name="Cor">
          <option value="">Escolha...</option>
	  <option value="amarelo" <?php if($_SESSION['RECADASTRO']['Cor']=="amarelo")echo "selected"; ?>>Amarelo(a)</option>
	  <option value="branco" <?php if($_SESSION['RECADASTRO']['Cor']=="branco")echo "selected"; ?>>Branco(a)</option>
	  <option value="indigena" <?php if($_SESSION['RECADASTRO']['Cor']=="indigena")echo "selected"; ?>>Indigena</option>
	  <option value="negro" <?php if($_SESSION['RECADASTRO']['Cor']=="negro")echo "selected"; ?>>Negro(a)</option>
	  <option value="pardo" <?php if($_SESSION['RECADASTRO']['Cor']=="pardo")echo "selected"; ?>>Pardo(a)</option>
         </select>
        </td>
        <td><label>Estado Civil:</label>
         <select class="form-control" name="EstCivil">
          <option value="">Escolha...</option>
	  <option value="casado" <?php if($_SESSION['RECADASTRO']['EstCivil']=="casado")echo "selected"; ?>>Casado(a)</option>
	  <option value="divorciado" <?php if($_SESSION['RECADASTRO']['EstCivil']=="divorciado")echo "selected"; ?>>Divorciado(a)</option>
	  <option value="separado" <?php if($_SESSION['RECADASTRO']['EstCivil']=="separado")echo "selected"; ?>>Separado(a)</option>
	  <option value="solteiro" <?php if($_SESSION['RECADASTRO']['EstCivil']=="solteiro")echo "selected"; ?>>Solteiro(a)</option>
	  <option value="uniao_estavel" <?php if($_SESSION['RECADASTRO']['EstCivil']=="uniao_estavel")echo "selected"; ?>>Uniao Estavel</option>
	  <option value="viuvo" <?php if($_SESSION['RECADASTRO']['EstCivil']=="viuvo")echo "selected"; ?>>Viuvo(a)</option>
         </select>
        </td> 
        <td colspan="2"><label>Possui CadUnico:</label>
	<input type="radio" name="CadUnico" value="S" <?php if($_SESSION['RECADASTRO']['CadUnico']=="S")echo "checked"; ?> onclick="document.getElementById('NIS').disabled = false;" />&nbsp;Sim
	<input type="radio" name="CadUnico" value="N" <?php if($_SESSION['RECADASTRO']['CadUnico']=="N")echo "checked"; ?>  onclick="document.getElementById('NIS').disabled = true;
         document.getElementById('NIS').value=null;"/>&nbsp;Não<br />
		 <strong>NIS:</strong><input type="text" name="NIS" id="NIS" value="<?php echo $_SESSION['RECADASTRO']['NIS'];?>" class="form-control" placeholder="NIS" <?php if($_SESSION['RECADASTRO']['CadUnico']!="S") echo "disabled" ?> />
        </td>
       </tr>
       <tr>
        <td colspan="4"><label>Tempo de residência em Teófilo Otoni:</label><br />
	<input type="radio" name="TimeRes" value="1" <?php if($_SESSION['RECADASTRO']['TimeRes']=="1")echo "checked"; ?> />&nbsp;ate 5 anos
	<input type="radio" name="TimeRes" value="2" <?php if($_SESSION['RECADASTRO']['TimeRes']=="2")echo "checked"; ?> />&nbsp;mais de 5 anos ate 10 anos
	<input type="radio" name="TimeRes" value="3" <?php if($_SESSION['RECADASTRO']['TimeRes']=="3")echo "checked"; ?> />&nbsp;mais de 10 anos
        </td>
       </tr>
       <tr>
        <td><label>Condições de Moradia:</label>
         <select class="form-control" name="Hab_Tipo">
          <option value="">Escolha...</option>
	  <option value="casa" <?php if($_SESSION['RECADASTRO']['Hab_Tipo']=="casa")echo "selected"; ?>>Casa</option>
	  <option value="apartamento" <?php if($_SESSION['RECADASTRO']['Hab_Tipo']=="apartamento")echo "selected"; ?>>Apartamento</option>
         </select>
        </td>
	<td><label>&nbsp;</label> <br />
         <select class="form-control" name="Hab_Modo" id="Hab_Modo" onchange=mostraimovel()>
          <option value="">Escolha...</option>
	  <option value="propria" <?php if($_SESSION['RECADASTRO']['Hab_Modo']=="propria") echo "selected"; ?>>Própria</option>
	  <option value="alugada" <?php if($_SESSION['RECADASTRO']['Hab_Modo']=="alugada") echo "selected"; ?>>Alugada</option>
	  <option value="cedida" <?php if($_SESSION['RECADASTRO']['Hab_Modo']=="cedido") echo "selected"; ?>>Cedida</option>
	  <option value="invadida" <?php if($_SESSION['RECADASTRO']['Hab_Modo']=="invadida") echo "selected"; ?>>Invadida</option>
         </select>        
        </td>
        <td>
	<div id="Hab_propria" style="display:<?php if($_SESSION['RECADASTRO']['Hab_Modo']!="propria") echo "none"; else echo "block"; ?>">
	  <label>Quitada:</label>
          <select class="form-control" name="Hab_Quit" id="Hab_Quit" onchange=mostraimovel()>
           <option value="">Escolha...</option>
	   <option value="sim" <?php if($_SESSION['RECADASTRO']['Hab_Quit']=="sim") echo "selected"; ?>>Sim</option>
	   <option value="nao" <?php if($_SESSION['RECADASTRO']['Hab_Quit']=="nao") echo "selected"; ?>>Não</option>
          </select>
         </div>
        </td>
        <td>
         <div id="Hab_valor" style="display:<?php if(($_SESSION['RECADASTRO']['Hab_Modo']=="alugada")||($_SESSION['RECADASTRO']['Hab_Quit']=="nao")) echo "block"; else echo "none"; ?>">
         <label>Valor:</label>
	 <input type="text" name="Hab_Valor" value="<?php echo $_SESSION['RECADASTRO']['Hab_Valor'];?>" class="form-control" onkeyup=moeda(this) placeholder="000000" />
         </div>
        </td>
       </tr>
       <tr>
        <td colspan="2">
	 <label>Tipo de transporte que você utiliza pra trabalhar:</label>
         <select class="form-control" name="Trans_Forma" id="Trans_Forma" onchange=mostraTipo()>
          <option value="">Escolha...</option>
	  <option value="bicicleta" <?php if($_SESSION['RECADASTRO']['Trans_Forma']=="bicicleta") echo "selected"; ?> >Bicicleta</option>
	  <option value="carro" <?php if($_SESSION['RECADASTRO']['Trans_Forma']=="carro") echo "selected"; ?>>Carro</option>
	  <option value="moto" <?php if($_SESSION['RECADASTRO']['Trans_Forma']=="moto") echo "selected"; ?>>Moto</option>
	  <option value="coletivo" <?php if($_SESSION['RECADASTRO']['Trans_Forma']=="coletivo") echo "selected"; ?> >Transporte Coletivo</option>
	  <option value="outros" <?php if($_SESSION['RECADASTRO']['Trans_Forma']=="outros") echo "selected"; ?>>Outros</option>
         </select>
        </td>
	<td colspan="2">
         <div id="Trans_Tipo" style="display:<?php if(($_SESSION['RECADASTRO']['Trans_Forma']=="carro")||($_SESSION['RECADASTRO']['Trans_Forma']=="moto")) echo "block"; else echo "none"; ?>">
          <label>Próprio:</label><br />
	  <input type="radio" name="Trans_Tipo" <?php if($_SESSION['RECADASTRO']['Trans_Tipo']=="sim") echo "checked"; ?> value="sim" />&nbsp;Sim
	  <input type="radio" name="Trans_Tipo" <?php if($_SESSION['RECADASTRO']['Trans_Tipo']=="nao") echo "checked"; ?> value="nao" />&nbsp;Não
         </div>
        </td>
       </tr>
       <tr>
        <td colspan="4"><label>Lingua estrangeira:</label><br />
	<strong>Inglês:</strong><input type="radio" name="Ling_Ingles" <?php if($_SESSION['RECADASTRO']['Ling_Ingles']=="nenhum") echo "checked"; ?> value="nenhum" />&nbsp;Nenhum
	 <input type="radio" name="Ling_Ingles" <?php if($_SESSION['RECADASTRO']['Ling_Ingles']=="basico") echo "checked"; ?> value="basico" />&nbsp;Básico
	 <input type="radio" name="Ling_Ingles" <?php if($_SESSION['RECADASTRO']['Ling_Ingles']=="tecnico") echo "checked"; ?> value="tecnico" />&nbsp;Técnico
	 <input type="radio" name="Ling_Ingles" <?php if($_SESSION['RECADASTRO']['Ling_Ingles']=="fluente") echo "checked"; ?> value="fluente" />&nbsp;Fluente <br />
	 <strong>Espanhol:</strong><input type="radio" name="Ling_Espanhol" <?php if($_SESSION['RECADASTRO']['Ling_Espanhol']=="nenhum") echo "checked";?>  value="nenhum" />&nbsp;Nenhum
	 <input type="radio" name="Ling_Espanhol" <?php if($_SESSION['RECADASTRO']['Ling_Espanhol']=="basico") echo "checked";?> value="basico" />&nbsp;Básico
	 <input type="radio" name="Ling_Espanhol" <?php if($_SESSION['RECADASTRO']['Ling_Espanhol']=="tecnico") echo "checked"; ?> value="tecnico" />&nbsp;Técnico
	 <input type="radio" name="Ling_Espanhol" <?php if($_SESSION['RECADASTRO']['Ling_Espanhol']=="fluente") echo "checked"; ?> value="fluente" />&nbsp;Fluente<br />
         <strong>Outros:</strong>
	 <input type="text" name="Ling_extra" id="Ling_extra" value="<?php echo $_SESSION['RECADASTRO']['Ling_extra'];?>" class="form-control" placeholder="Outros Idiomas" />
        </td>
       </tr>
       <tr>
        <td colspan="4"><label>Informática:</label>
	<label><input type="checkbox" name="Info_word" value="1" <?php if($_SESSION['RECADASTRO']['Info_word']=="1") echo "checked"; ?> />&nbsp;Word</label>&nbsp;
 <label><input type="checkbox" name="Info_excel" value="1" <?php if($_SESSION['RECADASTRO']['Info_excel']=="1") echo "checked"; ?>  />&nbsp;Excel</label>&nbsp;
 <label><input type="checkbox" name="Info_internet" value="1" <?php if($_SESSION['RECADASTRO']['Info_internet']=="1") echo "checked"; ?>  />&nbsp;Internet</label><br />
	 <label>Outros:</label><input type="text" name="Info_Outros" id="Info_Outros" value="<?php echo $_SESSION['RECADASTRO']['Info_Outros'];?>" class="form-control" placeholder="Outros cursos" />
        </td>
       </tr>
       <tr>
	<td colspan ="4">
	<input type="hidden" name="familiaqnt" id="familiaqnt" value="<?php if(empty($_SESSION['RECADASTRO']['familiaqnt'])) echo 0; else echo $_SESSION['RECADASTRO'][familiaqnt] ?>" />
         <table class='table table-striped table-bordered table-hover' id="TabParentesco">
          <tr><td colspan="6" align="center"><strong>Composição Familiar</strong></td></tr>
	  <tr><td><strong>Nome<strong></td><td><strong>Data de Nascimento</strong></td><td><strong>Parentesco</strong></td><td><strong>Escolaridade</strong></td><td><strong>Ocupação</strong></td><td><strong>Remuneração</strong></td></tr>
          <?php getComposicaoFamiliar($_SESSION['RECADASTRO']['CPF'],0) ;?>
         </table>
         <div><button class="btn btn-large btn-success" onclick="adicionarLinha()" type="button">Adicionar Membros</button></div>
        </td>
       </tr>
       <tr>
        <td colspan="4"><label>Você paga pensão alimentícia p/ filhos e/ou ex-conjuge?</label><br />
	<input type="radio" name="Pensao_Paga" value="1" <?php if($_SESSION['RECADASTRO']['Pensao_Paga']=="1") echo "checked"; ?> onclick="document.getElementById('Pensao_Paga_Val').disabled = false;"/>&nbsp;Sim&nbsp;
 <input type="radio" name="Pensao_Paga" value="0" <?php if($_SESSION['RECADASTRO']['Pensao_Paga']=="0") echo "checked"; ?> onclick="document.getElementById('Pensao_Paga_Val').disabled = true;document.getElementById('Pensao_Paga_Val').value=null"/>&nbsp;Não<br />
	 <label>Valor:</label><input type="text" name="Pensao_Paga_Val" id="Pensao_Paga_Val" value="<?php echo $_SESSION['RECADASTRO']['Pensao_Paga_Val']?>" class="form-control" placeholder="00000" onkeyup=moeda(this)  <?php if($_SESSION['RECADASTRO']['Pensao_Paga']!="1") echo "disabled" ?>/>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você recebe pensão alimentícia para seus filhos?</label><br />
	 <input type="radio" name="Pensao_Recebe" value="1" <?php if($_SESSION['RECADASTRO']['Pensao_Recebe']=="1") echo "checked"; ?>  onclick="document.getElementById('Pensao_Recebe_Val').disabled = false;"/>&nbsp;Sim&nbsp;
 <input type="radio" name="Pensao_Recebe" value="0" <?php if($_SESSION['RECADASTRO']['Pensao_Recebe']=="0") echo "checked"; ?>   onclick="document.getElementById('Pensao_Recebe_Val').disabled = true;document.getElementById('Pensao_Recebe_Val').value=null"/>&nbsp;Não<br />
	 <label>Valor:</label><input type="text" name="Pensao_Recebe_Val" id="Pensao_Recebe_Val" value="<?php echo $_SESSION['RECADASTRO']['Pensao_Recebe_Val']?>" class="form-control" placeholder="00000" onkeyup=moeda(this) <?php if($_SESSION['RECADASTRO']['Pensao_Recebe']!="1") echo "disabled" ?> />
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Quem é a pessoa que mais contribui na renda familiar?</label><br />
          <input type="radio" name="Renda_Maior" <?php if($_SESSION['RECADASTRO']['Renda_Maior']=="você") echo "checked"; ?> value="você" />&nbsp;Você&nbsp;
          <input type="radio" name="Renda_Maior" <?php if($_SESSION['RECADASTRO']['Renda_Maior']=="conjuge") echo "checked"; ?>  value="conjuge" />&nbsp;Cônjuge/Companheiro(a)&nbsp;
          <input type="radio" name="Renda_Maior" <?php if($_SESSION['RECADASTRO']['Renda_Maior']=="pai") echo "checked"; ?>  value="pai" />&nbsp;Pai&nbsp;
          <input type="radio" name="Renda_Maior" <?php if($_SESSION['RECADASTRO']['Renda_Maior']=="mae") echo "checked"; ?>  value="mae" />&nbsp;Mãe&nbsp;
          <input type="radio" name="Renda_Maior" <?php if($_SESSION['RECADASTRO']['Renda_Maior']=="outros") echo "checked"; ?>  value="outros" />&nbsp;Outros
         </td>
        </tr> 
        <tr>
         <td colspan="4"><label>Renda mensal individual</label><br />
	 <input type="radio" name="Renda_Mensal_Individual" <?php if($_SESSION['RECADASTRO']['Renda_Mensal_Individual']==1) echo "checked" ?>  value="1" />&nbsp;Até 2 salários mínimos&nbsp;
	  <input type="radio" name="Renda_Mensal_Individual" <?php if($_SESSION['RECADASTRO']['Renda_Mensal_Individual']==2) echo "checked" ?> value="2" />&nbsp;De 02 a 04 salários mínimos&nbsp;
	  <input type="radio" name="Renda_Mensal_Individual" <?php if($_SESSION['RECADASTRO']['Renda_Mensal_Individual']==3) echo "checked" ?> value="3" />&nbsp;Superior a 5 salários mínimos
         </td>
        </tr> 
        <tr>
         <td colspan="4"><label>Renda mensal familiar (incluindo você)</label><br />
	 <input type="radio" name="Renda_Mensal_Capita" <?php if($_SESSION['RECADASTRO']['Renda_Mensal_Capita']==1) echo "checked" ?> value="1" />&nbsp;Ate 2 salários mínimos&nbsp;
	  <input type="radio" name="Renda_Mensal_Capita" <?php if($_SESSION['RECADASTRO']['Renda_Mensal_Capita']==2) echo "checked" ?> value="2" />&nbsp;De 02 a 04 salários mínimos&nbsp;
	  <input type="radio" name="Renda_Mensal_Capita" <?php if($_SESSION['RECADASTRO']['Renda_Mensal_Capita']==3) echo "checked" ?> value="3" />&nbsp;Superior a 5 salários mínimos
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em seu domicílio pessoa portadora de deficiência?</label><br />
	 <input type="radio" name="Deficiente" value="1" <?php if($_SESSION['RECADASTRO']['Deficiente']==1) echo "checked" ?>  onclick="document.getElementById('Deficiente_Grau').disabled = false; document.getElementById('Deficiente_Qual').disabled = false"/>&nbsp;Sim
	 <input type="radio" name="Deficiente" value="0" <?php if($_SESSION['RECADASTRO']['Deficiente']==0) echo "checked" ?> onclick="document.getElementById('Deficiente_Grau').disabled = true;document.getElementById('Deficiente_Grau').value=null"/>&nbsp;Não<br />
	 Parentesco:<input type="text" name="Deficiente_Grau" id="Deficiente_Grau" value="<?php echo $_SESSION['RECADASTRO']['Deficiente_Grau']?>" class="form-control" placeholder="Parentesco" <?php if($_SESSION['RECADASTRO']['Deficiente']!="1") echo "disabled" ?> />
	 Qual: <select name="Deficiente_Qual" id="Deficiente_Qual" class="form-control" onchange=deficienteOutra() <?php if($_SESSION['RECADASTRO']['Deficiente']!="1") echo "disabled" ?> >
	   <option value="">Escolha...</option>
	   <option value="Auditiva" <?php if($_SESSION['RECADASTRO']['Deficiente_Qual']=="Auditiva") echo "selected"?>>Auditiva</option>
	   <option value="Motora" <?php if($_SESSION['RECADASTRO']['Deficiente_Qual']=="Motora") echo "selected"?>>Motora</option>
	   <option value="Intelectual" <?php if($_SESSION['RECADASTRO']['Deficiente_Qual']=="Intelectual") echo "selected"?>>Intelectual</option>
	   <option value="Visão" <?php if($_SESSION['RECADASTRO']['Deficiente_Qual']=="Visão") echo "selected"?>>Visão</option>
	   <option value="Fala" <?php if($_SESSION['RECADASTRO']['Deficiente_Qual']=="Fala") echo "selected"?>>Fala</option>
	   <option value="Outra" <?php if($_SESSION['RECADASTRO']['Deficiente_Qual']=="Outra") echo "selected"?>>Outra</option>
	  </select>
          <span id="Def_tmp" style="display:none;">Outra: <input type="text" class="form-control" value="" name="Def_Outra" id="Def_Outra" /></span>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em sua família alguem que recebe benefícios de transferência de renda?</label><br />
          <input type="radio" name="Transferencia" value="1" <?php if($_SESSION['RECADASTRO']['Transferencia']==1){ echo "checked"; }?> onclick="document.getElementById('Transferencia_Qual').disabled=false;" />&nbsp;Sim&nbsp;
          <input type="radio" name="Transferencia" value="0" <?php if($_SESSION['RECADASTRO']['Transferencia']==0) echo "checked"; ?> onclick="document.getElementById('Transferencia_Qual').disabled = true; document.getElementById('Transferencia_Qual').value=null" />&nbsp;Não<br />
	  <label>Qual?</label><input type="text" name="Transferencia_Qual" id="Transferencia_Qual" value="<?php echo $_SESSION['RECADASTRO']['Transferencia_Qual']?>" class="form-control" <?php if($_SESSION['RECADASTRO']['Transferencia']!="1") echo "disabled" ?> />
        </td>
       </tr>
	<tr>
         <td colspan="4"><label>Existe em seu grupo familiar pessoa idosa?</label><br />
	 <input type="radio" name="Idoso" value="1" <?php if($_SESSION['RECADASTRO']['Idoso']==1) echo "checked" ?>  />&nbsp;Sim&nbsp;
	  <input type="radio" name="Idoso" value="0" <?php if($_SESSION['RECADASTRO']['Idoso']==0) echo "checked" ?> />&nbsp;Não
         </td>
        </tr>
        <tr>
	 <td colspan="4"><label>Qual dos itens há na sua casa?</label>
	  <?php if(!empty($_SESSION['RECADASTRO']['TemEmCasa']))
		 getTemEmCasa($_SESSION['RECADASTRO']['TemEmCasa'],0);
		else
		 getTemEmCasa("",0);
	 ?>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você possui algum plano de assistência mêdica?:</label><br />
	 <input type="radio" name="PlanoDeSaude" value="1" <?php if($_SESSION['RECADASTRO']['PlanoDeSaude']==1) echo "checked" ?>  onclick="document.getElementById('PlanoDeSaude_Qual').disabled = false;"/>&nbsp;Sim&nbsp;
         <input type="radio" name="PlanoDeSaude" value="0" <?php if($_SESSION['RECADASTRO']['PlanoDeSaude']==0) echo "checked" ?>   onclick="document.getElementById('PlanoDeSaude_Qual').disabled = true;document.getElementById('PlanoDeSaude_Qual').value=null"/>&nbsp;Não<br />
	 <label>Qual?</label><input type="text" name="PlanoDeSaude_Qual" id="PlanoDeSaude_Qual" value="<?php echo $_SESSION['RECADASTRO']['PlanoDeSaude_Qual']?>" class="form-control" placeholder="Assistencia medica" <?php if($_SESSION['RECADASTRO']['PlanoDeSaude']!="1") echo "disabled" ?> /></td>
       </tr>
       <tr>
        <td colspan="4">
         <p>Use este espaço para alguma observação que julgue necessária:</p>
	 <textarea name="Observacoes" id="Observacoes" class="form-control" rows="7"><?php echo $_SESSION['RECADASTRO']['Observacoes'];?></textarea>
        </td>
       </tr>
      </table>
      <button class="btn btn-lg btn-primary" type="submit">Confirmar</button> 
      <a href="/inc/sair.php" class="btn btn-lg btn-danger">Sair</i></a>
     </form>
