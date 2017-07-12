<h4>Os dados obtidos deste questionário serão confidenciais!</h4>
<form class="form-signin" action="inc/inserirPensionista.php" method="POST">
      <div class="row divi">
       <div class="col-md-9">
        1. <label>Nome:</label> <?php echo utf8_encode($_SESSION['PENSIONISTA']['PNome'])?>
        <input type="hidden" name="PNome" id="Nome" value="<?php echo $_SESSION['PENSIONISTA']['PNome']?>" />
      </div>
       <div class="col-md-3">
        2. <label>Data de Nascimento:</label> <?php echo $_SESSION['PENSIONISTA']['PNascto']?>
        <input type="hidden" name="PNascto" id="Nascto" value="<?php echo $_SESSION['PENSIONISTA']['PNascto']?>" />
       </div>
      </div>

      <div class="row divi">
	<div class="col-md-6">
        <label>Nome do Pensionista:</label><?php echo utf8_encode($_SESSION ['PENSIONISTA'] ['FNome'])?>	
	<input type="hidden" name="FNome" id="Nome" value="<?php echo $_SESSION ['PENSIONISTA'] ['FNome']?>">
        </div>  
	<div class="col-md-3">
	<label>Matricula do Pensionista:</label><?php echo utf8_encode($_SESSION ['PENSIONISTA']['FMatricula'])?>
	<input type="hidden" name="FMatricula" id="Matricula" value="<?php echo $_SESSION ['PENSIONISTA']['FMatricula']?>">
	</div>
	<div class="col-md-3">
	<label>CPF do Pensionista:</label><?php echo getCPF($_SESSION ['PENSIONISTA']['FCPF'])?>
	<input type="hidden" name="FCPF" id="Matricula" value="<?php echo getCPF($_SESSION ['PENSIONISTA']['FCPF'])?>">
	</div>


      </div>

      <div class="row divi"> 
       <div class="col-md-8">
        3. <?php ifExisteText($_SESSION['PENSIONISTA']['PMae'],'PMae','Mãe'); ?><br />
        4. <?php ifExisteText($_SESSION['PENSIONISTA']['PPai'],'PPai','Pai'); ?>
       </div>
       <div class="col-md-4">
        5. <label>Naturalidade:</label><br />
        <input type="hidden" name="PCPF" id="CPF" value="<?php echo $_SESSION['PENSIONISTA']['PCPF']?>" />
        <?php ifExisteText($_SESSION['PENSIONISTA']['PNaturalidade'],'PNaturalidade','Cidade'); ?>
        <?php if(!empty($_SESSION['PENSIONISTA']['PUF'])){
        echo "<br /><strong>UF: </strong>". utf8_encode($_SESSION['PENSIONISTA']['PUF']);
        echo "<input type=\"hidden\" name=\"PUF\" id=\"UF\" value=\"".$_SESSION['PENSIONISTA']['PUF']."\" />";
        }else{ ?>
        <select class="form-control" name="PUF">
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
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-3">6. <?php ifExisteText($_SESSION['PENSIONISTA']['PRG_NUM'],'PRG_NUM','RG'); ?></div>
       <div class="col-md-3">7. <?php ifExisteText($_SESSION['PENSIONISTA']['PRG_ORG'],'PRG_ORG','Orgão Expedidor'); ?></div>
       <div class="col-md-3">
        8. <strong>UF:</strong><?php if(!empty($_SESSION['PENSIONISTA']['PRG_UF'])){
        echo utf8_encode($_SESSION['PENSIONISTA']['PRG_UF']);
        echo "<input type=\"hidden\" name=\"PRG_UF\" id=\"RG_UF\" value=\"".$_SESSION['PENSIONISTA']['PRG_UF']."\" />";
        }else{ ?>
        <select class="form-control" name="PRG_UF">
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
       </div>
       <div class="col-md-3">
        9. <strong>CPF:</strong> 
        <?php echo getCPF($_SESSION['PENSIONISTA']['PCPF'])?>
        <input type="hidden" name="PCPF" id="CPF" value="<?php echo $_SESSION['PENSIONISTA']['PCPF']?>" />
       </div>
      </div>      
      <div class="row divi">
       <div class="col-md-6">
        10. <label>Grau de Escolaridade:</label>
        <select class="form-control" name="PGrau_escolar">
         <option value="">Escolha...</option>
         <option value="fund" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="fund")echo "selected"; ?>>Ensino Fundamental</option>
         <option value="medio" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="medio")echo "selected"; ?>>Ensino Médio</option>
         <option value="sup" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="sup")echo "selected"; ?>>Superior</option>
         <option value="esp" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="esp")echo "selected"; ?>>Pos-Graduação</option>
         <option value="mes" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="mes")echo "selected"; ?>>Mestrado</option>
         <option value="doc" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="doc")echo "selected"; ?>>Doutorado</option>
         <option value="posdoc" <?php if($_SESSION['PENSIONISTA']['PGrau_escolar']=="posdoc")echo "selected"; ?>>Pós-Doutorado</option>
        </select>
       </div>
       <div class="col-md-3">
        11. <label>Completo ou Incompleto?</label><br />
        <input type="radio" name="PStatus_escolar" value="completo" <?php if(!empty($_SESSION['PENSIONISTA']['PStatus_escolar'])&&($_SESSION['PENSIONISTA']['PStatus_escolar']=="completo"))echo "checked";  ?> required />&nbsp;Completo <br />
        <input type="radio" name="Status_escolar" value="incompleto" <?php if(!empty($_SESSION['PENSIONISTA']['PStatus_escolar'])&&($_SESSION['PENSIONISTA']['PStatus_escolar']=="incompleto")) echo "checked";?> />&nbsp;Incompleto 
       </div>
       <div class="col-md-3">
        12. <label>Formação Profissional:</label>
        <input type="text" name="PFormacao" id="Formacao" value="<?php echo $_SESSION['PENSIONISTA']['PFormacao'];?>" class="form-control" placeholder="Formação Profissional" />
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-6">
        13. <label>Endereço:</label>
        <input type="text" name="PEnd_Rua" id="End_Rua" value="<?php echo $_SESSION['PENSIONISTA']['PEnd_Rua'];?>" class="form-control" placeholder="Rua" required />
       </div>
       <div class="col-md-3">
        14. <label>Número:</label>
        <input type="text" name="PEnd_Num" id="End_Num" value="<?php echo $_SESSION['PENSIONISTA']['PEnd_Num'];?>" class="form-control" placeholder="Número" required />
       </div>
       <div class="col-md-3">
        15. <label>Complemento:</label>
        <input type="text" name="PEnd_Comp" id="End_Comp" value="<?php echo $_SESSION['PENSIONISTA']['PEnd_Comp'];?>" class="form-control" placeholder="Complemento" />
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-3">
        16. <label>Bairro:</label>
        <input type="text" name="PEnd_Bairro" id="End_Bairro" value="<?php echo $_SESSION['PENSIONISTA']['PEnd_Bairro'];?>" class="form-control" placeholder="Insira o Bairro" required />
       </div>
       <div class="col-md-3">
        17. <label>CEP:</label>
        <input type="text" name="PEnd_CEP" id="End_CEP" value="<?php echo $_SESSION['PENSIONISTA']['PEnd_CEP'];?>" class="form-control" maxlength="10" onkeyup="mascara(this,mcep)"  placeholder="Digite somente números" required />
       </div>
       <div class="col-md-3">
        18. <label>Cidade:</label>
        <input type="text" name="PEnd_Cidade" id="End_Cidade" value="<?php echo $_SESSION['PENSIONISTA']['PEnd_Cidade'];?>" class="form-control" placeholder="Cidade" required />
       </div>
       <div class="col-md-3">
        19. <label>UF:</label>
        <select class="form-control" name="PEnd_UF">
         <option value="">Escolha...</option>
         <option value="AC" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="AC")echo "selected"; ?>>Acre</option>
         <option value="AL" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="AL")echo "selected"; ?>>Alagoas</option>
         <option value="AP" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="AP")echo "selected"; ?>>Amapá</option>
         <option value="AM" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="AM")echo "selected"; ?>>Amazonas</option>
         <option value="BA" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="BA")echo "selected"; ?>>Bahia</option>
         <option value="CE" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="CE")echo "selected"; ?>>Ceará</option>
         <option value="DF" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="DF")echo "selected"; ?>>Distrito Federal</option>
         <option value="ES" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="ES")echo "selected"; ?>>Espirito Santo</option>
         <option value="GO" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="GO")echo "selected"; ?>>Goiás</option>
         <option value="MA" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="MA")echo "selected"; ?>>Maranhão</option>
         <option value="MS" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="MS")echo "selected"; ?>>Mato Grosso do Sul</option>
         <option value="MT" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="MT")echo "selected"; ?>>Mato Grosso</option>
         <option value="MG" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="MG")echo "selected"; ?>>Minas Gerais</option>
         <option value="PA" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="PA")echo "selected"; ?>>Pará</option>
         <option value="PB" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="PB")echo "selected"; ?>>Paraíba</option>
         <option value="PR" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="PR")echo "selected"; ?>>Paraná</option>
         <option value="PE" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="PE")echo "selected"; ?>>Pernambuco</option>
         <option value="PI" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="PI")echo "selected"; ?>>Piauí</option>
         <option value="RJ" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="RJ")echo "selected"; ?>>Rio de Janeiro</option>
         <option value="RN" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="RN")echo "selected"; ?>>Rio Grande do Norte</option>
         <option value="RS" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="RS")echo "selected"; ?>>Rio Grande do Sul</option>
         <option value="RO" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="RO")echo "selected"; ?>>Rondônia</option>
         <option value="RR" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="RR")echo "selected"; ?>>Roraima</option>
         <option value="SC" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="SC")echo "selected"; ?>>Santa Catarina</option>
         <option value="SP" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="SP")echo "selected"; ?>>São Paulo</option>
         <option value="SE" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="SE")echo "selected"; ?>>Sergipe</option>
         <option value="TO" <?php if($_SESSION['PENSIONISTA']['PEnd_UF']=="TO")echo "selected"; ?>>Tocantins</option>
        </select>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-3">
        20. <label>Telefone Fixo:</label>
        <input type="text" name="PFone_Fixo" id="Fone_Fixo" value="<?php echo $_SESSION['PENSIONISTA']['PFone_Fixo'];?>" class="form-control" maxlength="14" onkeyup="mascara(this,mfixo)" placeholder="digite somente números"/>
       </div>
       <div class="col-md-3">
        21. <label>Tipo:</label>
        <select class="form-control" name="PFone_Tipo">
         <option value="">Escolha...</option>
         <option value="proprio" <?php if($_SESSION['PENSIONISTA']['PFone_Tipo']=="proprio") echo "selected"; ?>>Próprio</option>
         <option value="recado"  <?php if($_SESSION['PENSIONISTA']['PFone_Tipo']=="recado")  echo "selected"; ?>>Recado</option>
        </select>
       </div>
       <div class="col-md-6">
        23. <label>Telefone Celular:</label>
        <input type="text" name="PFone_Cel" id="Fone_Cel" value="<?php echo $_SESSION['PENSIONISTA']['PFone_Cel'];?>" class="form-control" maxlength="15" onkeyup="mascara(this,mcel)" placeholder="digite somente números"/>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-9">
        24. <label>E-Mail:</label>
        <input type="email" name="PEmail" id="Email" value="<?php echo $_SESSION['PENSIONISTA']['PEmail'];?>" class="form-control" placeholder="E-Mail" />
       </div>
       <div class="col-md-3">
        25. <label>Sexo:</label>
        <?php if(!empty($_SESSION['PENSIONISTA']['PSexo'])){
        echo getSexo($_SESSION['PENSIONISTA']['PSexo']);
        echo "<input type=\"hidden\" name=\"PSexo\" id=\"Sexo\" value=\"".$_SESSION['PENSIONISTA']['PSexo']."\" />";
        } else{?>
        <select class="form-control" name="PSexo">
         <option value="">Escolha...</option>
         <option value="F" <?php if($_SESSION['PENSIONISTA']['PSexo']=="F")echo "selected"; ?>>Feminino</option>
         <option value="M" <?php if($_SESSION['PENSIONISTA']['PSexo']=="M")echo "selected"; ?>>Masculino</option>
        </select>
        <?php } ?>
       </div>
      </div> 

      <div class="row divi">
       <div class="col-md-3">
        26. <label>Cor/Etnia:</label>
        <select class="form-control" name="PCor">
         <option value="">Escolha...</option>
         <option value="amarelo" <?php if($_SESSION['PENSIONISTA']['PCor']=="amarelo")echo "selected"; ?>>Amarelo(a)</option>
         <option value="branco" <?php if($_SESSION['PENSIONISTA']['PCor']=="branco")echo "selected"; ?>>Branco(a)</option>
         <option value="indigena" <?php if($_SESSION['PENSIONISTA']['PCor']=="indigena")echo "selected"; ?>>Indigena</option>
         <option value="negro" <?php if($_SESSION['PENSIONISTA']['PCor']=="negro")echo "selected"; ?>>Negro(a)</option>
         <option value="pardo" <?php if($_SESSION['PENSIONISTA']['PCor']=="pardo")echo "selected"; ?>>Pardo(a)</option>
        </select>
       </div>
       <div class="col-md-3">
        27. <label>Estado Civil:</label>
        <select class="form-control" name="PEstCivil">
         <option value="">Escolha...</option>
         <option value="casado" <?php if($_SESSION['PENSIONISTA']['PEstCivil']=="casado")echo "selected"; ?>>Casado(a)</option>
         <option value="divorciado" <?php if($_SESSION['PENSIONISTA']['PEstCivil']=="divorciado")echo "selected"; ?>>Divorciado(a)</option>
         <option value="separado" <?php if($_SESSION['PENSIONISTA']['PEstCivil']=="separado")echo "selected"; ?>>Separado(a)</option>
         <option value="solteiro" <?php if($_SESSION['PENSIONISTA']['PEstCivil']=="solteiro")echo "selected"; ?>>Solteiro(a)</option>
         <option value="uniao_estavel" <?php if($_SESSION['PENSIONISTA']['PEstCivil']=="uniao_estavel")echo "selected"; ?>>Uniao Estavel</option>
         <option value="viuvo" <?php if($_SESSION['PENSIONISTA']['PEstCivil']=="viuvo")echo "selected"; ?>>Viuvo(a)</option>
        </select>
       </div> 
       <div class="col-md-6">
        28. <label>Possui CadUnico:</label>
        <input type="radio" name="PCadUnico" value="S" onclick="document.getElementById('NIS').disabled = false;" <?php if($_SESSION['PENSIONISTA']['PCadUnico']=="S") echo "checked"; ?> required />&nbsp;Sim 
        <input type="radio" name="PCadUnico" value="N" onclick="document.getElementById('NIS').disabled = true; document.getElementById('NIS').value=null;" <?php if($_SESSION['PENSIONISTA']['PCadUnico']=="N") echo "checked"; ?> />&nbsp;Não<br />
        29. <strong>NIS:</strong>
        <input type="text" name="PNIS" id="NIS" value="<?php if(!empty($_SESSION['PENSIONISTA']['PNIS'])) echo $_SESSION['PENSIONISTA']['PNIS'];?>" class="form-control" placeholder="NIS" <?php if($_SESSION['PENSIONISTA']['PCadUnico']!="S") echo "disabled" ?> />
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        30. <label>Tempo de residência em Teófilo Otoni:</label><br />
        <input type="radio" name="PTimeRes" value="1" <?php if(!empty($_SESSION['PENSIONISTA']['PTimeRes']) && ($_SESSION['PENSIONISTA']['PTimeRes']=="1")) echo "checked"; ?> required />&nbsp;ate 5 anos
        <input type="radio" name="PTimeRes" value="2" <?php if(!empty($_SESSION['PENSIONISTA']['PTimeRes']) && ($_SESSION['PENSIONISTA']['PTimeRes']=="2")) echo "checked"; ?> />&nbsp;mais de 5 anos ate 10 anos
        <input type="radio" name="PTimeRes" value="3" <?php if(!empty($_SESSION['PENSIONISTA']['PTimeRes']) && ($_SESSION['PENSIONISTA']['PTimeRes']=="3")) echo "checked"; ?> />&nbsp;mais de 10 anos
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-3">
        31. <label>Condições de Moradia:</label>
        <select class="form-control" name="PHab_Tipo">
         <option value="">Escolha...</option>
         <option value="casa" <?php if($_SESSION['PENSIONISTA']['PHab_Tipo']=="casa")echo "selected"; ?>>Casa</option>
         <option value="apartamento" <?php if($_SESSION['PENSIONISTA']['PHab_Tipo']=="apartamento")echo "selected"; ?>>Apartamento</option>
        </select>
       </div>
       <div class="col-md-3">
        <label>&nbsp;</label><br />
        <select class="form-control" name="PHab_Modo" id="Hab_Modo" onchange=mostraimovel()>
         <option value="">Escolha...</option>
         <option value="proprio" <?php if($_SESSION['PENSIONISTA']['PHab_Modo']=="proprio") echo "selected"; ?>>Própria</option>
         <option value="alugada" <?php if($_SESSION['PENSIONISTA']['PHab_Modo']=="alugada") echo "selected"; ?>>Alugada</option>
         <option value="cedida" <?php if($_SESSION['PENSIONISTA']['PHab_Modo']=="cedido") echo "selected"; ?>>Cedida</option>
         <option value="invadida" <?php if($_SESSION['PENSIONISTA']['PHab_Modo']=="invadida") echo "selected"; ?>>Invadida</option>
        </select>        
       </div>
       <div class="col-md-3">
       <div id="Hab_propria" style="display:<?php if($_SESSION['PENSIONISTA']['PHab_Modo']!="proprio") echo "none"; else echo "block"; ?>">
        <label>Quitada:</label>
        <select class="form-control" name="PHab_Quit" id="Hab_Quit" onchange=mostraimovel()>
         <option value="">Escolha...</option>
         <option value="sim" <?php if($_SESSION['PENSIONISTA']['PHab_Quit']=="sim") echo "selected"; ?>>Sim</option>
         <option value="nao" <?php if($_SESSION['PENSIONISTA']['PHab_Quit']=="nao") echo "selected"; ?>>Não</option>
        </select>
       </div>
      </div>
      <div class="col-md-3">
       <div id="Hab_valor" style="display:<?php if(($_SESSION['PENSIONISTA']['PHab_Modo']=="alugada")||($_SESSION['PENSIONISTA']['PHab_Quit']=="nao")) echo "block"; else echo "none"; ?>">
        <label>Valor Mensal:</label>
        <input type="text" name="PHab_Valor" id="Hab_Valor" value="<?php echo $_SESSION['PENSIONISTA']['PHab_Valor'];?>" class="form-control" onkeyup=moeda(this) placeholder="000000" />
       </div>
      </div>
     </div>

     <div class="row divi">
      <div class="col-md-6">
       32. <label>Tipo de transporte que você utiliza pra trabalhar:</label>
       <select class="form-control" name="PTrans_Forma" id="Trans_Forma" onchange=mostraTipo()>
        <option value="">Escolha...</option>
        <option value="bicicleta" <?php if($_SESSION['PENSIONISTA']['PTrans_Forma']=="bicicleta") echo "selected"; ?> >Bicicleta</option>
        <option value="carro" <?php if($_SESSION['PENSIONISTA']['PTrans_Forma']=="carro") echo "selected"; ?>>Carro</option>
        <option value="moto" <?php if($_SESSION['PENSIONISTA']['PTrans_Forma']=="moto") echo "selected"; ?>>Moto</option>
        <option value="coletivo" <?php if($_SESSION['PENSIONISTA']['PTrans_Forma']=="coletivo") echo "selected"; ?> >Transporte Coletivo</option>
        <option value="outros" <?php if($_SESSION['PENSIONISTA']['PTrans_Forma']=="outros") echo "selected"; ?>>Outros</option>
       </select>
      </div>
      <div class="col-md-6">
       <div id="Trans_Tipo" style="display:<?php if(($_SESSION['PENSIONISTA']['PTrans_Forma']=="carro")||($_SESSION['PENSIONISTA']['PTrans_Forma']=="moto")) echo "block"; else echo "none"; ?>">
        <label>Próprio:</label><br />
         <input type="radio" name="PTrans_Tipo"<?php if($_SESSION['PENSIONISTA']['PTrans_Tipo']=="sim") echo "checked"; ?> value="sim" />&nbsp;Sim
         <input type="radio" name="PTrans_Tipo" <?php if($_SESSION['PENSIONISTA']['PTrans_Tipo']=="nao") echo "checked"; ?> value="nao" />&nbsp;Não
        </div>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        33. <label>Lingua estrangeira:</label><br />
        <strong>Inglês:</strong>
        <input type="radio" name="PLing_Ingles" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Ingles'])&&($_SESSION['PENSIONISTA']['PLing_Ingles']=="nenhum")) echo "checked"; ?> value="nenhum" required />&nbsp;Nenhum
        <input type="radio" name="PLing_Ingles" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Ingles'])&&($_SESSION['PENSIONISTA']['PLing_Ingles']=="basico")) echo "checked"; ?> value="basico" />&nbsp;Básico
        <input type="radio" name="PLing_Ingles" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Ingles'])&&($_SESSION['PENSIONISTA']['PLing_Ingles']=="tecnico")) echo "checked"; ?> value="tecnico" />&nbsp;Técnico
        <input type="radio" name="PLing_Ingles" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Ingles'])&&($_SESSION['PENSIONISTA']['PLing_Ingles']=="fluente")) echo "checked"; ?> value="fluente" />&nbsp;Fluente <br /> 
        <strong>Espanhol:</strong>
        <input type="radio" name="PLing_Espanhol" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Espanhol'])&&($_SESSION['PENSIONISTA']['PLing_Espanhol']=="nenhum")) echo "checked";?>  value="nenhum" required />&nbsp;Nenhum
        <input type="radio" name="PLing_Espanhol" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Espanhol'])&&($_SESSION['PENSIONISTA']['PLing_Espanhol']=="basico")) echo "checked";?> value="basico" />&nbsp;Básico
        <input type="radio" name="PLing_Espanhol" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Espanhol'])&&($_SESSION['PENSIONISTA']['PLing_Espanhol']=="tecnico")) echo "checked"; ?> value="tecnico" />&nbsp;Técnico
        <input type="radio" name="PLing_Espanhol" <?php if(!empty($_SESSION['PENSIONISTA']['PLing_Espanhol'])&&($_SESSION['PENSIONISTA']['PLing_Espanhol']=="fluente")) echo "checked"; ?> value="fluente" />&nbsp;Fluente<br />
        <strong>Outros:</strong>
        <input type="text" name="PLing_extra" id="Ling_extra" value="<?php echo $_SESSION['PENSIONISTA']['PLing_extra'];?>" class="form-control" placeholder="Outros Idiomas" />
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        34. <label>Informática:</label>
        <label><input type="checkbox" name="PInfo_word" value="1" <?php if($_SESSION['PENSIONISTA']['PInfo_word']=="1") echo "checked"; ?> />&nbsp;Word</label>&nbsp;
        <label><input type="checkbox" name="PInfo_excel" value="1" <?php if($_SESSION['PENSIONISTA']['PInfo_excel']=="1") echo "checked"; ?>  />&nbsp;Excel</label>&nbsp;
        <label><input type="checkbox" name="PInfo_internet" value="1" <?php if($_SESSION['PENSIONISTA']['PInfo_internet']=="1") echo "checked"; ?>  />&nbsp;Internet</label><br />
        <label>Outros:</label><input type="text" name="PInfo_Outros" id="Info_Outros" value="<?php echo $_SESSION['PENSIONISTA']['PInfo_Outros'];?>" class="form-control" placeholder="Outros cursos" />
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        <input type="hidden" name="familiatotal" id="familiatotal" value="<?php if(empty($_SESSION['PENSIONISTA']['familiatotal'])) echo 0; else echo $_SESSION['PENSIONISTA']['familiatotal'] ?>" />
        <table class='table table-striped table-bordered table-hover' id="TabParentesco">
         <tr><td colspan="6" align="center">40. <strong>Composição Familiar</strong></td></tr>
         <tr>
          <td><strong>Nome</strong></td>
          <td><strong>Data de Nascimento</strong></td>
          <td><strong>Parentesco</strong></td>
          <td><strong>Escolaridade</strong></td>
          <td><strong>Ocupação</strong></td>
          <td><strong>Remuneração</strong></td>
         </tr>
         <?php getComposicaoFamiliar($_SESSION['PENSIONISTA']['PCPF'],0) ;?>
        </table>
        <div><button class="btn btn-large btn-success" onclick="adicionarLinha()" type="button">Adicionar Membros</button></div>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        35. <label>Você paga pensão alimentícia p/ filhos e/ou ex-conjuge?</label><br />
        <input type="radio" name="PPensao_Paga" value="1" <?php if($_SESSION['PENSIONISTA']['PPensao_Paga']=="1") echo "checked"; ?> onclick="document.getElementById('Pensao_Paga_Val').disabled = false;" required />&nbsp;Sim&nbsp;
        <input type="radio" name="PPensao_Paga" value="0" <?php if($_SESSION['PENSIONISTA']['PPensao_Paga']=="0") echo "checked"; ?> onclick="document.getElementById('Pensao_Paga_Val').disabled = true;document.getElementById('Pensao_Paga_Val').value=null"/>&nbsp;Não<br />
        <label>Valor:</label>
        <input type="text" name="PPensao_Paga_Val" id="Pensao_Paga_Val" value="<?php if(!empty($_SESSION['PENSIONISTA']['PPensao_Paga_Val'])) echo $_SESSION['PENSIONISTA']['PPensao_Paga_Val']?>" class="form-control" placeholder="00000" onkeyup=moeda(this)  <?php if($_SESSION['PENSIONISTA']['PPensao_Paga']!="1") echo "disabled" ?>/>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        36. <label>Você recebe pensão alimentícia para seus filhos?</label><br />
        <input type="radio" name="PPensao_Recebe" value="1" <?php if($_SESSION['PENSIONISTA']['PPensao_Recebe']=="1") echo "checked"; ?>  onclick="document.getElementById('Pensao_Recebe_Val').disabled = false;" required />&nbsp;Sim&nbsp;
        <input type="radio" name="PPensao_Recebe" value="0" <?php if($_SESSION['PENSIONISTA']['PPensao_Recebe']=="0") echo "checked"; ?>   onclick="document.getElementById('Pensao_Recebe_Val').disabled = true;document.getElementById('Pensao_Recebe_Val').value=null"/>&nbsp;Não<br />
        <label>Valor:</label><input type="text" name="PPensao_Recebe_Val" id="Pensao_Recebe_Val" value="<?php if(!empty($_SESSION['PENSIONISTA']['PPensao_Recebe_Val']))  echo $_SESSION['PENSIONISTA']['PPensao_Recebe_Val']?>" class="form-control" placeholder="00000" onkeyup=moeda(this) <?php if($_SESSION['PENSIONISTA']['PPensao_Recebe']!="1") echo "disabled" ?> />
       </div>
      </div>

      <div class="row  divi">
       <div class="col-md-12">
        37. <label>Quem é a pessoa que mais contribui na renda familiar?</label><br />
        <input type="hidden" name="PCPF" id="CPF" value="<?php echo $_SESSION['PENSIONISTA']['PCPF']?>" />
        <input type="radio" name="PRenda_Maior" <?php if(!empty($_SESSION['PENSIONISTA']['RPenda_Maior'])&&($_SESSION['PENSIONISTA']['RPenda_Maior']=="voce")) echo "checked"; ?> value="voce" required />&nbsp;Você&nbsp;
        <input type="radio" name="PRenda_Maior" <?php if(!empty($_SESSION['PENSIONISTA']['RPenda_Maior'])&&($_SESSION['PENSIONISTA']['PRenda_Maior']=="conjuge")) echo "checked"; ?>  value="conjuge" />&nbsp;Cônjuge/Companheiro(a)&nbsp;
        <input type="radio" name="PRenda_Maior" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Maior'])&&($_SESSION['PENSIONISTA']['PRenda_Maior']=="pai")) echo "checked"; ?>  value="pai" />&nbsp;Pai&nbsp;
        <input type="radio" name="PRenda_Maior" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Maior'])&&($_SESSION['PENSIONISTA']['PRenda_Maior']=="mae")) echo "checked"; ?>  value="mae" />&nbsp;Mãe&nbsp;
        <input type="radio" name="PRenda_Maior" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Maior'])&&($_SESSION['PENSIONISTA']['PRenda_Maior']=="outros")) echo "checked"; ?>  value="outros" />&nbsp;Outros
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        38. <label>Renda mensal individual</label><br />
        <input type="radio" name="PRenda_Mensal_Individual" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual'])&&($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual']==1)) echo "checked" ?>  value="1" required />&nbsp;Até 2 salários mínimos&nbsp;
        <input type="radio" name="PRenda_Mensal_Individual" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual'])&&($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual']==2)) echo "checked" ?> value="2" />&nbsp;De 02 a 04 salários mínimos&nbsp;
        <input type="radio" name="PRenda_Mensal_Individual" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual'])&&($_SESSION['PENSIONISTA']['PRenda_Mensal_Individual']==3)) echo "checked" ?> value="3" />&nbsp;Superior a 5 salários mínimos
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        39. <label>Renda mensal familiar (incluindo você)</label><br />
        <input type="radio" name="PRenda_Mensal_Capita" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita'])&&($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita']==1)) echo "checked" ?> value="1" required />&nbsp;Até 2 salários mínimos&nbsp;
        <input type="radio" name="PRenda_Mensal_Capita" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita'])&&($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita']==2)) echo "checked" ?> value="2" />&nbsp;De 02 a 04 salários mínimos&nbsp;
        <input type="radio" name="PRenda_Mensal_Capita" <?php if(!empty($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita'])&&($_SESSION['PENSIONISTA']['PRenda_Mensal_Capita']==3)) echo "checked" ?> value="3" />&nbsp;Superior a 5 salários mínimos
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        40. <label>Existe em seu domicílio pessoa portadora de deficiência?</label><br />
        <input type="radio" name="PDeficiente" id="DeficienteS" value="1" onclick="document.getElementById('Deficiente_Grau').disabled = false; document.getElementById('Deficiente_Qual').disabled = false" required />&nbsp;Sim
        <input type="radio" name="PDeficiente" id="DeficienteN" value="0" onclick="document.getElementById('Deficiente_Qual').disabled = true; document.getElementById('Deficiente_Grau').disabled=true;document.getElementById('Deficiente_Grau').value=null"/>&nbsp;Não<br />
        <?php
        if($_SESSION['PENSIONISTA']['PDeficiente']=="1") echo "<script>document.getElementById(\"DeficienteS\").checked=true;</script>";
        if($_SESSION['PENSIONISTA']['PDeficiente']=="0") echo "<script>document.getElementById(\"DeficienteN\").checked=true;</script>";
        ?>
        Parentesco:<input type="text" name="PDeficiente_Grau" id="Deficiente_Grau" value="<?php if(!empty($_SESSION['PENSIONISTA']['PDeficiente_Grau']))echo $_SESSION['PENSIONISTA']['PDeficiente_Grau']?>" class="form-control" placeholder="Parentesco" <?php if($_SESSION['PENSIONISTA']['PDeficiente']!="1") echo "disabled" ?> />
        Qual: <select name="PDeficiente_Qual" id="Deficiente_Qual" class="form-control" onchange=deficienteOutra() <?php if($_SESSION['PENSIONISTA']['PDeficiente']!="1") echo "disabled" ?> >
         <option value="">Escolha...</option>
         <option value="Auditiva" <?php if($_SESSION['PENSIONISTA']['PDeficiente_Qual']=="Auditiva"){ $a=1; echo "selected" ;}else $a=0;?>>Auditiva</option>
         <option value="Motora" <?php if($_SESSION['PENSIONISTA']['PDeficiente_Qual']=="Motora"){ $a=1; echo "selected"; }else $a=0; ?>>Motora</option>
         <option value="Intelectual" <?php if($_SESSION['PENSIONISTA']['PDeficiente_Qual']=="Intelectual"){ $a=1; echo "selected"; }else $a=0;?>>Intelectual</option>
         <option value="Visão" <?php if($_SESSION['PENSIONISTA']['PDeficiente_Qual']=="Visão"){ $a=1; echo "selected"; }else $a=0;?>>Visão</option>
         <option value="Fala" <?php if($_SESSION['PENSIONISTA']['PDeficiente_Qual']=="Fala"){ $a=1; echo "selected"; }else $a=0;?>>Fala</option>
         <option value="Outra" <?php if($a==0) echo "selected"; ?>>Outra</option>
        </select>
        <span id="Def_tmp" style="display:<?php if(($a==0)&&(!empty($_SESSION['PENSIONISTA']['PDeficiente_Qual'])))echo "block"; else echo "none";?>">
         Outra: <input type="text" class="form-control" value="<?php if(isset($_SESSION['PENSIONISTA']['PDeficiente_Qual'])) echo $_SESSION['PENSIONISTA']['PDeficiente_Qual']; ?>" name="PDef_Outra" id="Def_Outra" />
        </span>
       </div>
      </div>

     <div class="row divi">
      <div class="col-md-12">
       41. <label>Existe em sua família alguem que recebe benefícios de transferência de renda?(Ex: Bolsa Fámilia, Bolsa Escola, PETI, etc...)</label><br />
       <input type="radio" name="PTransferencia" id="TransferenciaS" value="1" onclick="document.getElementById('Transferencia_Qual').disabled=false;" required />&nbsp;Sim&nbsp;
       <input type="radio" name="PTransferencia" id="TransferenciaN" value="0" onclick="document.getElementById('Transferencia_Qual').disabled = true; document.getElementById('Transferencia_Qual').value=null" />&nbsp;Não<br />
       <label>Qual a transferência de renda?</label>
       <input type="text" name="PTransferencia_Qual" id="Transferencia_Qual" value="<?php if(!empty($_SESSION['PENSIONISTA']['PTransferencia_Qual'])) echo $_SESSION['PENSIONISTA']['PTransferencia_Qual'] ?>" class="form-control" <?php if($_SESSION['PENSIONISTA']['PTransferencia']!="1") echo "disabled" ?> />
        <?php
        if($_SESSION['PENSIONISTA']['PTransferencia']=="1") echo "<script>document.getElementById(\"TransferenciaS\").checked=true;</script>";
        if($_SESSION['PENSIONISTA']['PTransferencia']=="0") echo "<script>document.getElementById(\"TransferenciaN\").checked=true;</script>";
        ?>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        42. <label>Existe em seu grupo familiar pessoa idosa?</label><br />
        <input type="radio" name="PIdoso" id="IdosoS" value="1" required />&nbsp;Sim&nbsp;
        <input type="radio" name="PIdoso" id="IdosoN" value="0" />&nbsp;Não
         <?php
         if($_SESSION['PENSIONISTA']['PIdoso']=="1") echo "<script>document.getElementById(\"IdosoS\").checked=true;</script>";
         if($_SESSION['PENSIONISTA']['PIdoso']=="0") echo "<script>document.getElementById(\"IdosoN\").checked=true;</script>";
         ?>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
         43. <label>Qual dos itens há na sua casa?</label>
         <?php if(!empty($_SESSION['PENSIONISTA']['PTemEmCasa']))
         getPTemEmCasa($_SESSION['PENSIONISTA']['PTemEmCasa'],0);
         else
         getPTemEmCasa("",0);
          ?>
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
         44. <label>Você possui algum plano de assistência mêdica?:</label><br />
         <input type="radio" name="PPlanoDeSaude" id="PlanoDeSaudeS" value="1" onclick="document.getElementById('PlanoDeSaude_Qual').disabled = false;" required/>&nbsp;Sim&nbsp;
         <input type="radio" name="PPlanoDeSaude" id="PlanoDeSaudeN" value="0" onclick="document.getElementById('PlanoDeSaude_Qual').disabled = true;document.getElementById('PlanoDeSaude_Qual').value=null"/>&nbsp;Não<br />
         <?php
         if($_SESSION['PENSIONISTA']['PPlanoDeSaude']=="1") echo "<script>document.getElementById(\"PlanoDeSaudeS\").checked=true;</script>";
         if($_SESSION['PENSIONISTA']['PPlanoDeSaude']=="0") echo "<script>document.getElementById(\"PlanoDeSaudeN\").checked=true;</script>";
         ?>
         <label>Qual?</label>
         <input type="text" name="PPlanoDeSaude_Qual" id="PlanoDeSaude_Qual" value="<?php if(!empty($_SESSION['PENSIONISTA']['PPlanoDeSaude_Qual'])) echo $_SESSION['PENSIONISTA']['PPlanoDeSaude_Qual']?>" class="form-control" placeholder="Assistencia medica" <?php if($_SESSION['PENSIONISTA']['PPlanoDeSaude']!="1") echo "disabled" ?> />
       </div>
      </div>

      <div class="row divi">
       <div class="col-md-12">
        <p>45.<b>Use este espaço para alguma observação que julgue necessária:</b></p>
        <textarea name="PObservacoes" id="Observacoes" class="form-control" rows="7"><?php echo $_SESSION['PENSIONISTA']['PObservacoes'];?></textarea>
       </div>
      </div>

      <div class="row divi">
       <button class="btn btn-lg btn-primary">Salvar e Imprimir</button> 
       <span class="pull-right"><a href="<?php getURL();?>/inc/sair.php" class="btn btn-lg btn-danger">Sair</a></span>
      </div>
     </form>
