     <div class="col-lg-12">
      <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
      <form class="form-signin" action="inc/inserir.php" method="POST">
       <table class='table table-striped table-bordered table-hover'>
        <tr>
         <td colspan="3"><label>Nome:</label><input type="text" name="Nome" id="Nome" value="<?php echo $_SESSION['RECADASTRO'][0]['Nome']?>" class="form-control" placeholder="Nome" required /></td>
         <td colspan="2"><label>Data de Nascimento:</label><input type="text" name="Nascto" id="Nascto" value="<?php echo $_SESSION['RECADASTRO'][0]['Nascto']?>" class="form-control" placeholder="01/01/2017" required /></td>
        </tr>
        <tr>
         <td colspan="3">
          <label>Vinculo:</label> <select class="form-control" name="Vinculo">
           <option value="">Escolha...</option>
           <option value="Efetivo" <?php if($_SESSION['RECADASTRO'][0]['Vinculo']=="Efetivo")echo "selected"; ?>>Efetivo</option>
           <option value="Contratado" <?php if($_SESSION['RECADASTRO'][0]['Vinculo']=="Contratado")echo "selected"; ?>>Contratado</option>
           <option value="Aposentado" <?php if($_SESSION['RECADASTRO'][0]['Vinculo']=="Aposentado")echo "selected"; ?>>Inativo</option>
          </select>
         </td>
         <td colspan="2"><label>Matricula:</label><input type="text" name="Matricula" id="Matricula" value="<?php echo $_SESSION['RECADASTRO'][0]['Matricula']?>" class="form-control" placeholder="000000" required /></td>
        </tr>
        <tr>
         <td colspan="3"><label>Filiação:</label>
          <input type="text" name="Mae" id="Mae" value="<?php echo $_SESSION['RECADASTRO'][0]['Mae']?>" class="form-control" placeholder="Mãe" />
          <input type="text" name="Pai" id="Pai" value="<?php echo $_SESSION['RECADASTRO'][0]['Pai']?>" class="form-control" placeholder="Pai" />
         </td>
         <td><label>Naturilidade:</label><input type="text" name="Naturalidade" id="Naturalidade" value="<?php echo $_SESSION['RECADASTRO'][0]['Naturalidade']?>" class="form-control" placeholder="Naturalidade" required /></td>
        </tr>
        <tr>
         <td><label>RG:</label><input type="text" name="RG_NUM" id="RG_NUM" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_NUM']?>" class="form-control" placeholder="RG" required /></td>
         <td><label>Orgão Expeditor:</label><input type="text" name="RG_ORG" id="RG_ORG" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_ORG']?>" class="form-control" placeholder="Orgao expeditor" required /></td>
         <td><label>UF:</label><select class="form-control" name="RG_UF">
           <option value="">Escolha...</option>
           <option value="AC" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="AC")echo "selected"; ?>>Acre</option>
           <option value="AL" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="AL")echo "selected"; ?>>Alagoas</option>
           <option value="AP" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="AP")echo "selected"; ?>>Amapá</option>
           <option value="AM" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="AM")echo "selected"; ?>>Amazonas</option>
           <option value="BA" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="BA")echo "selected"; ?>>Bahia</option>
           <option value="CE" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="CE")echo "selected"; ?>>Ceará</option>
           <option value="DF" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="DF")echo "selected"; ?>>Distrito Federal</option>
           <option value="ES" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="ES")echo "selected"; ?>>Espirito Santo</option>
           <option value="GO" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="GO")echo "selected"; ?>>Goiás</option>
           <option value="MA" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="MA")echo "selected"; ?>>Maranhão</option>
           <option value="MS" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="MS")echo "selected"; ?>>Mato Grosso do Sul</option>
           <option value="MT" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="MT")echo "selected"; ?>>Mato Grosso</option>
           <option value="MG" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="MG")echo "selected"; ?>>Minas Gerais</option>
           <option value="PA" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="PA")echo "selected"; ?>>Pará</option>
           <option value="PB" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="PB")echo "selected"; ?>>Paraíba</option>
           <option value="PR" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="PR")echo "selected"; ?>>Paraná</option>
           <option value="PE" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="PE")echo "selected"; ?>>Pernambuco</option>
           <option value="PI" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="PI")echo "selected"; ?>>Piauí</option>
           <option value="RJ" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="RJ")echo "selected"; ?>>Rio de Janeiro</option>
           <option value="RN" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="RN")echo "selected"; ?>>Rio Grande do Norte</option>
           <option value="RS" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="RS")echo "selected"; ?>>Rio Grande do Sul</option>
           <option value="RO" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="RO")echo "selected"; ?>>Rondônia</option>
           <option value="RR" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="RR")echo "selected"; ?>>Roraima</option>
           <option value="SC" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="SC")echo "selected"; ?>>Santa Catarina</option>
           <option value="SP" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="SP")echo "selected"; ?>>São Paulo</option>
           <option value="SE" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="SE")echo "selected"; ?>>Sergipe</option>
           <option value="TO" <?php if($_SESSION['RECADASTRO'][0]['RG_UF']=="TO")echo "selected"; ?>>Tocantins</option>
          </select>
         </td>
         <td><label>CPF:</label><input type="text" name="CPF" id="CPF" value="<?php echo $_SESSION['RECADASTRO'][0]['CPF']?>" class="form-control" placeholder="00000000000" required /></td>
        </tr>
        <tr>
         <td colspan="3"><label>Grau de Escolaridade</label>
          <select class="form-control" name="Grau_escolar">
           <option value="">Escolha...</option>
           <option value="fund" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="fund")echo "selected"; ?>>Ensino Fundamental</option>
           <option value="medio" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="medio")echo "selected"; ?>>Ensino Médio</option>
           <option value="sup" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="sup")echo "selected"; ?>>Superior</option>
           <option value="esp" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="esp")echo "selected"; ?>>Pos-Graduação</option>
           <option value="mes" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="mes")echo "selected"; ?>>Mestrado</option>
           <option value="doc" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="doc")echo "selected"; ?>>Doutorado</option>
           <option value="posdoc" <?php if($_SESSION['RECADASTRO'][0]['Grau_escolar']=="posdoc")echo "selected"; ?>>Pós-Doutorado</option>
          </select>
          <input type="checkbox" name="Status_escolar" value="completo" />&nbsp;Completo
          <input type="checkbox" name="Status_escolar" value="incompleto" />&nbsp;Incompleto
        </td>
        <td><label>Formação Profissional:</label><input type="text" name="Formacao" id="Formacao" value="" class="form-control" placeholder="Formação Profissional" /></td>
        </tr>
        <tr>
         <td colspan="3"><label>Cargo Atual:</label><input type="text" name="Cargo" id="Cargo" value="" class="form-control" placeholder="Cargo Atual" required /></td>
         <td><label>Secretaria de Lotaçao:</label><input type="text" name="Lotacao" id="Lotacao" value="" class="form-control" placeholder="Secretaria de Lotação" required /></td>
        </tr>
        <tr>
         <td colspan="3"><label>Endereço:</label><input type="text" name="End_Rua" id="End_Rua" value="" class="form-control" placeholder="Rua" required /></td>
         <td colspan="1"><label>Numero:</label><input type="text" name="End_Num" id="End_Num" value="" class="form-control" placeholder="Número" required /></td>
        </tr>
        <tr>
         <td colspan="1"><label>Complemento:</label><input type="text" name="End_Comp" id="End_Comp" value="" class="form-control" placeholder="Complemento" /></td>
         <td colspan="2"><label>Bairro:</label><input type="text" name="End_Bairro" id="End_Bairro" value="" class="form-control" placeholder="Centro" required /></td>
         <td colspan="1"><label>CEP:</label><input type="text" name="End_CEP" id="End_CEP" value="" class="form-control" placeholder="39800000" required /></td>
        </tr>
        <tr>
         <td colspan="1"><label>Telefone Fixo:</label><input type="text" name="Fone_Fixo" id="Fone_Fixo" value="" class="form-control" placeholder="3335292200" /></td>
         <td>
          <label>Tipo:</label><select class="form-control" name="Fone_Tipo">
           <option value="">Escolha...</option>
           <option value="proprio">Próprio</option>
           <option value="recado">Recado</option>
         </td>
         <td colspan="2"><label>Telefone Celular:</label><input type="text" name="Fone_Cel" id="Fone_Cel" value="" class="form-control" placeholder="33988363080" /></td>
        </tr>
        <tr>
         <td colspan="3"><label>E-Mail:</label><input type="email" name="Email" id="Email" value="" class="form-control" placeholder="E-Mail" /></td>
         <td><label>Sexo:</label>
          <select class="form-control" name="Sexo">
           <option value="">Escolha...</option>
           <option value="F" <?php if($_SESSION['RECADASTRO'][0]['Sexo']=="F")echo "selected"; ?>>Feminino</option>
           <option value="M" <?php if($_SESSION['RECADASTRO'][0]['Sexo']=="M")echo "selected"; ?>>Masculino</option>
          </select>
         </td>
        </tr>
        <tr>
         <td><label>Cor/Etnia:</label>
          <select class="form-control" name="Cor">
           <option value="">Escolha...</option>
           <option value="amarelo">Amarelo(a)</option>
           <option value="branco">Branco(a)</option>
           <option value="indigena">Indigena</option>
           <option value="negro">Negro(a)</option>
           <option value="pardo">Pardo(a)</option>
          </select>
         </td>
         <td><label>Estado Civil:</label>
          <select class="form-control" name="EstCivil">
           <option value="">Escolha...</option>
           <option value="casado">Casado(a)</option>
           <option value="divorciado">Divorciado(a)</option>
           <option value="separado">Separado(a)</option>
           <option value="solteiro">Solteiro(a)</option>
           <option value="uniao_estavel">Uniao Estavel</option>
           <option value="viuvo">Viuvo(a)</option>
          </select>
         </td> 
         <td colspan="2"><label>Possui CadUnico:</label>
          <input type="radio" name="CadUnico" value="S" />&nbsp;Sim
          <input type="radio" name="CadUnico" value="N" />&nbsp;Não<br />
          <strong>NIS:</strong><input type="text" name="NIS" id="NIS" value="" class="form-control" placeholder="NIS" />
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Tempo de residencia em Teofilo Otoni:</label>
          <input type="radio" name="TimeRes" value="1" />&nbsp;ate 5 anos
          <input type="radio" name="TimeRes" value="2" />&nbsp;mais de 5 anos ate 10 anos
          <input type="radio" name="TimeRes" value="3" />&nbsp;mais de 10 anos
         </td>
        </tr>
        <tr>
         <td><label>Condicões de Moradia:</label>
          <select class="form-control" name="Hab_Tipo">
           <option value="">Escolha...</option>
           <option value="casa">Casa</option>
           <option value="apartamento">Apartamento</option>
          </select>
         </td>
         <td><label>&nbsp;</label> <br />
          <select class="form-control" name="Hab_Modo">
           <option value="">Escolha...</option>
           <option value="propria">Propria</option>
           <option value="alugada">Alugada</option>
           <option value="cedida">Cedida</option>
           <option value="invadida">Invadida</option>
          </select>        
         </td>
         <td><label>Quitada:</label>
          <select class="form-control" name="Hab_Quit">
           <option value="">Escolha...</option>
           <option value="sim">Sim</option>
           <option value="nao">Não</option>
          </select>
         </td>
         <td> <label>Valor:</label>
          <input type="text" name="Hab_Valor" id="Hab_valor" value="" class="form-control" placeholder="000000" /><br />
         </td>
        </tr>
        <tr>
         <td colspan="2"><label>Tipo de transporte que você utiliza pra trabalhar:</label>
	  <select class="form-control" name="Trans_Forma">
           <option value="">Escolha...</option>
           <option value="bicicleta">Bicicleta</option>
           <option value="proprio">Proprio</option>
           <option value="coletivo" >Transporte Coletivo</option>
           <option value="outros">Outros</option>
          </select>
         </td>
         <td colspan="2"><label>Tipo:</label><br />
          <input type="radio" name="Trans_Tipo" value="moto" />&nbsp;Carro
          <input type="radio" name="Trans_Tipo" value="carro" />&nbsp;Moto
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Lingua estrangeira:</label><br />
          <strong>Ingles:</strong><input type="radio" name="Ling_Ingles" value="nenhum" />&nbsp;Nenhum
          <input type="radio" name="Ling_Ingles" value="basico" />&nbsp;Básico
          <input type="radio" name="Ling_Ingles" value="tecnico" />&nbsp;Técnico
          <input type="radio" name="Ling_Ingles" value="fluente" />&nbsp;Fluente <br />
          <strong>Espanhol:</strong><input type="radio" name="Ling_Espanhol" value="nenhum" />&nbsp;Nenhum
          <input type="radio" name="Ling_Espanhol" value="basico" />&nbsp;Básico
          <input type="radio" name="Ling_Espanhol" value="tecnico" />&nbsp;Técnico
          <input type="radio" name="Ling_Espanhol" value="fluente" />&nbsp;Fluente<br />
          <strong>Outros:</strong>
          <input type="text" name="Ling_extra" id="Hab_extra" value="" class="form-control" placeholder="Outros Idiomas" /><br />
          <input type="radio" name="Ling_Outros" value="nenhum" />&nbsp;Nenhum
          <input type="radio" name="Ling_Outros" value="basico" />&nbsp;Básico
          <input type="radio" name="Ling_Outros" value="tecnico" />&nbsp;Técnico
          <input type="radio" name="Ling_Outros" value="fluente" />&nbsp;Fluente
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Informatica:</label>
          <label><input type="checkbox" name="Info_word" value="1" />&nbsp;Word</label>&nbsp;
          <label><input type="checkbox" name="Info_excel" value="1" />&nbsp;Excel</label>&nbsp;
          <label><input type="checkbox" name="Info_internet" value="1" />&nbsp;Internet</label><br />
          <label>Outros:</label><input type="text" name="Info_Outros" id="Info_outros" value="" class="form-control" placeholder="Outros cursos" />
         </td>
        </tr>
        <tr>
         <td colspan ="4">
          <table class='table table-striped table-bordered table-hover'>
           <tr><td colspan="5" align="center"><strong>Composição Familiar</strong></td></tr>
           <tr><td>Nome</td><td>Data de Nascimento</td><td>Parentesco</td><td>Ocupação</td><td>Remuneração</td></tr>
          </table>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você paga pensao alimenticia p/ filhos e/ou ex-conjuge?</label>
          <input type="radio" name="Pensao_Paga" value="1" />&nbsp;Sim&nbsp;
          <input type="radio" name="Pensao_Paga" value="0" />&nbsp;Não<br />
          <label>Valor:</label><input type="text" name="Pensao_Paga_Val" id="Pensao_Paga_Val" value="" class="form-control" placeholder="00000" />
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você recebe pensao alimenticia para seus filhos?</label><br />
          <input type="radio" name="Pensao_Recebe" value="1" />&nbsp;Sim&nbsp;
          <input type="radio" name="Pensao_Recebe" value="0" />&nbsp;Não<br />
          <label>Valor:</label><input type="text" name="Pensao_Recebe_Val" id="Pensao_Recebe_Val" value="" class="form-control" placeholder="00000" />
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Quem é a pessoa que mais contribui na renda familiar?</label><br />
          <input type="radio" name="Renda_Maior" value="você" />&nbsp;Você&nbsp;
          <input type="radio" name="Renda_Maior" value="conjuge" />&nbsp;Conjuge/Companheiro(a)&nbsp;
          <input type="radio" name="Renda_Maior" value="pai" />&nbsp;Pai&nbsp;
          <input type="radio" name="Renda_Maior" value="mae" />&nbsp;Mãe&nbsp;
          <input type="radio" name="Renda_Maior" value="outros" />&nbsp;Outros
         </td>
        </tr> 
        <tr>
         <td colspan="4"><label>Renda mensal individual</label><br />
          <input type="radio" name="Renda_Mensal_Individual" value="1" />&nbsp;Até 2 salários mínimos&nbsp;
          <input type="radio" name="Renda_Mensal_Individual" value="2" />&nbsp;De 02 a 04 salários mínimos&nbsp;
          <input type="radio" name="Renda_Mensal_Individual" value="3" />&nbsp;Superior a 5 salários mínimos
         </td>
        </tr> 
        <tr>
         <td colspan="4"><label>Renda mensal familiar (incluindo você)</label><br />
          <input type="radio" name="Renda_Mensal_Capita" value="1" />&nbsp;Ate 2 salários mínimos&nbsp;
          <input type="radio" name="Renda_Mensal_Capita" value="2" />&nbsp;De 02 a 04 salários mínimos&nbsp;
          <input type="radio" name="Renda_Mensal_Capita" value="3" />&nbsp;Superior a 5 salários mínimos
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em seu domicilio pessoa portadora de deficiencia?</label><br />
          <input type="radio" name="Deficiente" value="1" />&nbsp;Sim
          <input type="radio" name="Deficiente" value="0" />&nbsp;Não<br />
          Parentesco:<input type="text" name="Deficiente_Grau" id="Deficiente_Grau" value="" class="form-control" placeholder="Parentesco" />
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em seu grupo familiar pessoa idosa?</label><br />
          <input type="radio" name="Idoso" value="1" />&nbsp;Sim&nbsp;
          <input type="radio" name="Idoso" value="0" />&nbsp;Não
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Qual dos itens há na sua casa?</label>
          <div><label><input type="checkbox" name="TemEmCasa1" value="TV#" />&nbsp;TV</label></div>
          <div><label><input type="checkbox" name="TemEmCasa2" value="Vídeo Cassete e/ou DVD#"/>&nbsp;Video Cassete e/ou DVD</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa3" value="Rádio#" />&nbsp;Rádio</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa4" value="Microcomputador#" />&nbsp;Microcomputador</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa5" value="Automóvel#" />&nbsp;Automóvel</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa6" value="Motocicleta#" />&nbsp;Motocicleta</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa7" value="Maquina de Lavar Roupa#" />&nbsp;Maquina de Lavar Roupa</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa8" value="Geladeira#" />&nbsp;Geladeira</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa9" value="Telefone Fixo#" />&nbsp;Telefone Fixo</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa10" value="Telefone Celular#" />&nbsp;Telefone Celular</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa11" value="Acesso a Internet#" />&nbsp;Acesso a internet</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa12" value="TV por Assinatura#" />&nbsp;TV por assinatura</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa13" value="Empregada Mensalista#" />&nbsp;Empregada mensalista</label>&nbsp;</div>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você possui algum plano de assistencia medica?:</label><br />
          <input type="radio" name="PlanoDeSaude" value="1" />&nbsp;Sim&nbsp;
          <input type="radio" name="PlanoDeSaude" value="0" />&nbsp;Não<br />
          <label>Qual?</label><input type="text" name="PlanoDeSaude_Qual" id="PlanoDeSaude_Qual" value="" class="form-control" placeholder="Assistencia medica" /></td>
       </tr>
       <tr>
        <td colspan="4">
         <p>Use este espaço para alguma observação que julgue necessária:</p>
         <textarea name="Observacoes" id="Observacoes" class="form-control" rows="7"></textarea>
        </td>
       </tr>
      </table>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar e Imprimir</button> 
      <a href="/inc/sair.php" class="btn btn-lg btn-danger btn-block">Limpar</a>
     </form>
    </div>