<<<<<<< HEAD
     <div class="col-lg-12">
      <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
      <form class="form-signin" action="inc/inserir.php" method="POST">
       <table class='table table-striped table-bordered table-hover'>
        <tr>
         <td colspan="3"><label>Nome:</label><input type="text" name="Nome" id="Nome" value="<?php echo $_SESSION['RECADASTRO'][0]['Nome']?>" class="form-control" placeholder="Nome" required></td>
         <td colspan="2"><label>Data de Nascimento:</label><input type="text" name="Nascto" id="Nascto" value="<?php echo $_SESSION['RECADASTRO'][0]['Nascto']?>" class="form-control" placeholder="01/01/2017" required></td>
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
         <td colspan="2"><label>Matricula:</label><input type="text" name="Matricula" id="Matricula" value="<?php echo $_SESSION['RECADASTRO'][0]['Matricula']?>" class="form-control" placeholder="000000" required></td>
        </tr>
        <tr>
         <td colspan="3"><label>Filiação:</label>
          <input type="text" name="Mae" id="Mae" value="<?php echo $_SESSION['RECADASTRO'][0]['Mae']?>" class="form-control" placeholder="Mãe" required>
          <input type="text" name="Pai" id="Pai" value="<?php echo $_SESSION['RECADASTRO'][0]['Pai']?>" class="form-control" placeholder="Pai">
         </td>
         <td><label>Naturilidade:</label><input type="text" name="Naturalidade" id="Naturalidade" value="<?php echo $_SESSION['RECADASTRO'][0]['Naturalidade']?>" class="form-control" placeholder="Naturalidade" required></td>
        </tr>
        <tr>
         <td><label>RG:</label><input type="text" name="RG_NUM" id="RG_NUM" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_NUM']?>" class="form-control" placeholder="RG" required></td>
         <td><label>Orgão Expeditor:</label><input type="text" name="RG_ORG" id="RG_ORG" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_ORG']?>" class="form-control" placeholder="Orgao expeditor" required></td>
         <td><label>UF:</label><input type="text" name="RG_UF" id="RG_UF" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_UF']?>" class="form-control" placeholder="UF" required></td>
         <td><label>CPF:</label><input type="text" name="CPF" id="CPF" value="<?php echo $_SESSION['RECADASTRO'][0]['CPF']?>" class="form-control" placeholder="00000000000" required></td>
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
          <input type="checkbox" name="Status_escolar" value="completo">&nbsp;Completo
          <input type="checkbox" name="Status_escolar" value="incompleto">&nbsp;Incompleto
        </td>
        <td><label>Formação Profissional:</label><input type="text" name="Formacao" id="Formacao" value="" class="form-control" placeholder="Formação Profissional" required></td>
        </tr>
        <tr>
         <td colspan="3"><label>Cargo Atual:</label><input type="text" name="Cargo" id="Cargo" value="" class="form-control" placeholder="Cargo Atual" required></td>
         <td><label>Secretaria de Lotacao:</label><input type="text" name="Lotacao" id="Lotacao" value="" class="form-control" placeholder="Secretaria de Lotação" required></td>
        </tr>
        <tr>
         <td colspan="3"><label>Endereço:</label><input type="text" name="End_Rua" id="End_Rua" value="" class="form-control" placeholder="Rua" required></td>
         <td colspan="1"><label>Numero:</label><input type="text" name="End_Num" id="End_Num" value="" class="form-control" placeholder="Número" required></td>
        </tr>
        <tr>
         <td colspan="1"><label>Complemento:</label><input type="text" name="End_Comp" id="End_Comp" value="" class="form-control" placeholder="Complemento"></td>
         <td colspan="2"><label>Bairro:</label><input type="text" name="End_Bairro" id="End_Bairro" value="" class="form-control" placeholder="Centro" required></td>
         <td colspan="1"><label>CEP:</label><input type="text" name="End_CEP" id="End_CEP" value="" class="form-control" placeholder="39.800-000" required></td>
        </tr>
        <tr>
         <td colspan="1"><label>Telefone Fixo:</label><input type="text" name="Fone_Fixo" id="Fone_Fixo" value="" class="form-control" placeholder="(33)3529-2200"></td>
         <td>
          <label>Tipo:</label><select class="form-control" name="Fone_Tipo">
           <option value="">Escolha...</option>
           <option value="proprio">Próprio</option>
           <option value="recado">Recado</option>
         </td>
         <td colspan="2"><label>Telefone Celular:</label><input type="text" name="Fone_Cel" id="Fone_Cel" value="" class="form-control" placeholder="(33)988363080"></td>
        </tr>
        <tr>
         <td colspan="3"><label>E-Mail:</label><input type="email" name="Email" id="Email" value="" class="form-control" placeholder="E-Mail" required></td>
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
          <input type="radio" name="CadUnico" value="S">&nbsp;Sim
          <input type="radio" name="CadUnico" value="N">&nbsp;Não<br />
          <strong>NIS:</strong><input type="text" name="NIS" id="NIS" value="" class="form-control" placeholder="NIS" required>                
         </td> 
        </tr>
        <tr>
         <td colspan="4"><label>Tempo de residencia em Teofilo Otoni:</label>
          <input type="radio" name="TimeRes" value="1">&nbsp;ate 5 anos
          <input type="radio" name="TimeRes" value="2">&nbsp;mais de 5 anos ate 10 anos
          <input type="radio" name="TimeRes" value="3">&nbsp;mais de 10 anos
         </td>
        </tr>
        <tr>
         <td><label>Condicoes de Moradia:</label>
          <select class="form-control" name="Hab_Tipo">
           <option value="">Escolha...</option>
           <option value="casa">Casa</option>
           <option value="apartamento">Apartamento</option>
          </select>
         </td>
         <td> <br />
          <select class="form-control" name="Hab_Modo">
           <option value="">Escolha...</option>
           <option value="propria">Propria</option>
           <option value="alugada">Alugada</option>
           <option value="cedida">Cedida</option>
           <option value="invadida">Invadida</option>
          </select>        
         </td>
         <td> <label>Quitada:</label>
          <select class="form-control" name="Hab_Quit">
           <option value="">Escolha...</option>
           <option value="sim">Sim</option>
           <option value="nao">Não</option>
          </select>
         </td>
         <td> <label>Valor:</label>
          <input type="text" name="Hab_Valor" id="Hab_valor" value="" class="form-control" placeholder="Prestacao ou Aluguel"></label><br />
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
          <input type="radio" name="Trans_Tipo" value="moto">&nbsp;Carro
          <input type="radio" name="Trans_Tipo" value="carro">&nbsp;Moto
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Lingua estrangeira:</label><br />
          <strong>Ingles:</strong><input type="radio" name="Ling_Ingles" value="nenhum" >&nbsp;Nenhum
          <input type="radio" name="Ling_Ingles" value="basico" >&nbsp;Básico
          <input type="radio" name="Ling_Ingles" value="tecnico" >&nbsp;Técnico
          <input type="radio" name="Ling_Ingles" value="fluente" >&nbsp;Fluente <br />
          <strong>Espanhol:</strong><input type="radio" name="Ling_Espanhol" value="nenhum" >&nbsp;Nenhum
          <input type="radio" name="Ling_Espanhol" value="basico" >&nbsp;Básico
          <input type="radio" name="Ling_Espanhol" value="tecnico" >&nbsp;Técnico
          <input type="radio" name="Ling_Espanhol" value="fluente" >&nbsp;Fluente
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Informatica:</label>
          <label><input type="checkbox" name="Info_word" value="1">&nbsp;Word</label>&nbsp;
          <label><input type="checkbox" name="Info_excel" value="1i">&nbsp;Excel</label>&nbsp;
          <label><input type="checkbox" name="Info_internet" value="1">&nbsp;Internet</label><br />
          <label>Outros:</label><input type="text" name="Info_Outros" id="Info_outros" value="" class="form-control" placeholder="Outros cursos">
         </td>
        </tr>
        <tr>
         <td colspan ="4">
          <table class='table table-striped table-bordered table-hover'>
           <tr><td colspan="5" align="center"><strong>Composicao Familiar</strong></td></tr>
           <tr><td>Nome</td><td>Idade</td><td>Parentesco</td><td>Ocupacao</td><td>Remuneracao</td></tr>
           <!--tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="Deficiente_Grau" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="Deficiente_Grau" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="Deficiente_Grau" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="Deficiente_Grau" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr-->
          </table>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você paga pensao alimenticia p/ filhos e/ou ex-conjuge?</label>
          <input type="radio" name="Pensao_Paga" value="1" >&nbsp;Sim&nbsp;
          <input type="radio" name="Pensao_Paga" value="0">&nbsp;Não<br />
          <label>Valor:</label><input type="text" name="Pensao_Paga_Val" id="Pensao_Paga_Val" value="" class="form-control" placeholder="Valor" required>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você recebe pensao alimenticia para seus filhos?</label><br />
          <input type="radio" name="Pensao_Recebe" value="1" >&nbsp;Sim&nbsp;
          <input type="radio" name="Pensao_Recebe" value="0">&nbsp;Não<br />
          <label>Valor:</label><input type="text" name="Pensao_Recebe_Val" id="Pensao_Recebe_Val" value="" class="form-control" placeholder="Valor" required>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Quem é a pessoa que mais contribui na renda familiar?</label><br />
          <input type="radio" name="Renda_Maior" value="você">&nbsp;Você&nbsp;
          <input type="radio" name="Renda_Maior" value="conjuge">&nbsp;Conjuge/Companheiro(a)&nbsp;
          <input type="radio" name="Renda_Maior" value="pai">&nbsp;Pai&nbsp;
          <input type="radio" name="Renda_Maior" value="mae">&nbsp;Mãe&nbsp;
          <input type="radio" name="Renda_Maior" value="outros">&nbsp;Outros
         </td>
        </tr> 
        <tr>
         <td colspan="4"><label>Renda mensal individual</label><br />
          <input type="radio" name="Renda_Mensal_Individual" value="1">&nbsp;Ate 2 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensal_Individual" value="2">&nbsp;De 02 a 04 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensal_Individual" value="3">&nbsp;Superior a 5 salarios minimos
         </td>
        </tr> 
        <tr>
         <td colspan="4"><label>Renda mensal familiar (incluindo você)</label><br />
          <input type="radio" name="Renda_Mensal_Capita" value="1">&nbsp;Ate 2 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensal_Capita" value="2">&nbsp;De 02 a 04 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensal_Capita" value="3">&nbsp;Superior a 5 salarios minimos
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em seu domicilio pessoa portadora de deficiencia?</label><br />
          <input type="radio" name="Deficiente" value="1">&nbsp;Sim
          <input type="radio" name="Deficiente" value="0">&nbsp;Não<br />
          Parentesco:<input type="text" name="Deficiente_Grau" id="Deficiente_Grau" value="" class="form-control" placeholder="Parentesco" required>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Existe em seu grupo familiar pessoa idosa?</label><br />
          <input type="radio" name="Idoso" value="1">&nbsp;Sim&nbsp;
          <input type="radio" name="Idoso" value="0">&nbsp;Não
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Qual dos itens há na sua casa?</label>
          <div><label><input type="checkbox" name="TemEmCasa1" value="TV#">&nbsp;TV</label></div>
          <div><label><input type="checkbox" name="TemEmCasa2" value="Vídeo Cassete e/ou DVD#">&nbsp;Video Cassete e/ou DVD</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa3" value="Rádio#">&nbsp;Rádio</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa4" value="Microcomputador#">&nbsp;Microcomputador</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa5" value="Automóvel#">&nbsp;Automóvel</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa6" value="Motocicleta#">&nbsp;Motocicleta</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa7" value="Maquina de Lavar Roupa#">&nbsp;Maquina de Lavar Roupa</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa8" value="Geladeira#">&nbsp;Geladeira</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa9" value="Telefone Fixo#">&nbsp;Telefone Fixo</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa10" value="Telefone Celular#">&nbsp;Telefone Celular</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa11" value="Acesso a Internet#">&nbsp;Acesso a internet</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa12" value="TV por Assinatura#">&nbsp;TV por assinatura</label>&nbsp;</div>
          <div><label><input type="checkbox" name="TemEmCasa13" value="Empregada Mensalista#">&nbsp;Empregada mensalista</label>&nbsp;</div>
         </td>
        </tr>
        <tr>
         <td colspan="4"><label>Você possui algum plano de assistencia medica?:</label><br />
          <input type="radio" name="PlanoDeSaude" value="1">&nbsp;Sim&nbsp;
          <input type="radio" name="PlanoDeSaude" value="0">&nbsp;Não<br />
          <label>Qual?</label><input type="text" name="PlanoDeSaude_Qual" id="PlanoDeSaude_Qual" value="" class="form-control" placeholder="Assistencia medica" required></td>
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
=======
    <div class="col-lg-12">
     <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
     <form class="form-signin" action="formulariophp" name="form1" method="POST">
      <table class='table table-striped table-bordered table-hover'>
       <tr>
        <td colspan="3">Nome:<input type="text" name="Nome" id="Nome" value="<?php echo $_SESSION['RECADASTRO'][0]['Nome']?>" class="form-control" placeholder="Nome" required></td>
        <td>Data de Nascimento:<input type="text" name="Nascto" id="Nascto" value="<?php echo $_SESSION['RECADASTRO'][0]['Nascto']?>" class="form-control" placeholder="01/01/2017" required></td>
       </tr>
       <tr>
        <td colspan="3">
         Vinculo <select class="form-control" name="Vinculo">
          <option value="">Escolha...</option>
          <option value="Efetivo">Efetivo</option>
          <option value="Contratado">Contratado</option>
          <option value="Aposentado">Inativo</option>
         </select>
        </td>
        <td>Matricula:<input type="text" name="Matricula" id="Matricula" value="<?php echo $_SESSION['RECADASTRO'][0]['Matricula']?>" class="form-control" placeholder="000000" required></td>
       </tr>
       <tr>
        <td colspan="3">Filiação:
         <input type="text" name="Mae" id="Mae" value="<?php echo $_SESSION['RECADASTRO'][0]['Mae']?>" class="form-control" placeholder="Mãe">
         <input type="text" name="Pai" id="Pai" value="<?php echo $_SESSION['RECADASTRO'][0]['Pai']?>" class="form-control" placeholder="Pai">
       </td>
        <td>Naturilidade:<input type="text" name="Naturalidade" id="Naturalidade" value="<?php echo $_SESSION['RECADASTRO'][0]['Naturalidade']?>" class="form-control" placeholder="Naturalidade"></td>
       </tr>
       <tr>
        <td>RG<input type="text" name="RG_NUM" id="RG_NUM" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_NUM']?>" class="form-control" placeholder="RG" required></td>
        <td>Orgão Expeditor<input type="text" name="RG_ORG" id="RG_ORG" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_ORG']?>" class="form-control" placeholder="Orgao expeditor" required></td>
        <td>UF<input type="text" name="RG_UF" id="RG_UF" value="<?php echo $_SESSION['RECADASTRO'][0]['RG_UF']?>" class="form-control" placeholder="UF" required></td>
        <td>CPF<input type="text" name="CPF" id="CPF" value="<?php echo $_SESSION['RECADASTRO'][0]['CPF']?>" class="form-control" placeholder="00000000000" required></td>
       </tr>
       <tr>
        <td colspan="3">Grau de Escolaridade
         <select class="form-control" name="Grau_escolar">
          <option value="">Escolha...</option>
          <option value="fund">Ensino Fundamental</option>
          <option value="medio">Ensino Médio</option>
          <option value="sup">Superior</option>
          <option value="esp">Pos-Graduação</option>
          <option value="mes">Mestrado</option>
          <option value="doc">Doutorado</option>
          <option value="posdoc">Pós-Doutorado</option>
         </select>
         <div>
          <label><input type="checkbox" name="Status_escolar" value="completo">&nbsp;Completo</label>
          <label><input type="checkbox" name="Status_escolar" value="incompleto">&nbsp;Incompleto</label>
         </div>
        </td>
        <td>Formação Profissional<input type="text" name="Formacao" id="Formacao" value="" class="form-control" placeholder="Formação Profissional"></td>
        </tr>
        <tr>
         <td colspan="3">Cargo Atual:<input type="text" name="Cargo" id="Cargo" value="" class="form-control" placeholder="Cargo Atual" required></td>
         <td>Secretaria de Lotação:<input type="text" name="Lotacao" id="Lotacao" value="" class="form-control" placeholder="Secretaria de Lotação" required></td>
        </tr>
        <tr>
         <td colspan="3">Endereço:<input type="text" name="End_Comp" id="End_Comp" value="" class="form-control" placeholder="Endereço" required></td>
         <td colspan="1">Número:<input type="text" name="End_Num" id="End_Num" value="" class="form-control" placeholder="Número" required></td>
        </tr>
        <tr>
         <td colspan="1">Complemento:<input type="text" name="End_Num" id="End_Comp" value="" class="form-control" placeholder="Complemento"></td>
         <td colspan="2">Bairro:<input type="text" name="End_Bairro" id="End_Bairro" value="" class="form-control" placeholder="Bairro" required></td>
         <td colspan="1">CEP:<input type="text" name="End_CEP" id="End_CEP" value="" class="form-control" placeholder="CEP" required></td>
        </tr>
        <tr>
         <td colspan="1">Fixo:<input type="text" name="Fone_Fixo" id="Fone_Fixo" value="" class="form-control" placeholder="Fixo"></td>
         <td>
          Tipo: <select class="form-control" name="Fone_Tipo">
           <option value="">Escolha...</option>
           <option value="proprio">Próprio</option>
           <option value="recado">Recado</option>
         </td>
         <td colspan="2">Celular:<input type="text" name="Fone_Cel" id="Fone_Cel" value="" class="form-control" placeholder="Celular"></td>
        </tr>
        <tr>
         <td colspan="3">E-Mail:<input type="email" name="Email" id="Email" value="" class="form-control" placeholder="E-Mail"></td>
         <td>Sexo:
          <select class="form-control" name="Sexo">
           <option value="">Escolha...</option>
           <option value="masculino">Masculino</option>
           <option value="feminino">Feminino</option>
          </select>
         </td>
        </tr>
        <tr>
         <td>Cor/Etnia:
          <select class="form-control" name="Cor">
           <option value="">Escolha...</option>
           <option value="amarelo">Amarelo(a)</option>
           <option value="branco">Branco(a)</option>
           <option value="indigena">Indigena</option>
           <option value="negro">Negro(a)</option>
           <option value="pardo">Pardo(a)</option>
          </select>
         </td>
         <td>Estado Civil:
          <select class="form-control" name="EstCivil">
           <option value="">Escolha...</option>
           <option value="casado">Casado(a)</option>
           <option value="divorciado">Divorciado(a)</option>
           <option value="separado">Separado(a)</option>
           <option value="solteiro">Solteiro(a)</option>
           <option value="uniao_estavel">União Estavel</option>
           <option value="viuvo">Viuvo(a)</option>
          </select>
         </td> 
         <td colspan="2">Possui CadÚnico:<br>
          <input type="radio" name="CadUnico" value="S">&nbsp;Sim
          <input type="radio" name="CadUnico" value="N">&nbsp;Não<br>
          NIS:<input type="text" name="nis" id="NIS" value="" class="form-control" placeholder="NIS">                
         </td> 
        </tr>
        <tr>
         <td colspan="4">Tempo de residencia em Teófilo Otoni:<br>
          <input type="radio" name="TimeRes" value="1">&nbsp;ate 5 anos
          <input type="radio" name="TimeRes" value="2">&nbsp;mais de 5 anos ate 10 anos
          <input type="radio" name="TimeRes" value="3">&nbsp;mais de 10 anos
         </td>
        </tr>
        <tr>
         <td>Condições de Moradia:
          <select class="form-control" name="Hab_Tipo">
           <option value="">Escolha...</option>
           <option value="1">Casa</option>
           <option value="2">Apartamento</option>
          </select>
         </td>
         <td> <br>
          <select class="form-control" name="Hab_Modo">
           <option value="">Escolha...</option>
           <option value="propria">Própria</option>
           <option value="alugada">Alugada</option>
           <option value="cedida">Cedida</option>
           <option value="invadida">Invadida</option>
          </select>        
         </td>
         <td> Quitada:
          <select class="form-control" name="Hab_Quit">
           <option value="">Escolha...</option>
           <option value="sim">Sim</option>
           <option value="nao">Não</option>
          </select>
         </td>
         <td> Valor:<br>
          <input type="text" name="Hab_Valor" id="Hab_valor" value="" class="form-control" placeholder="Prestacao ou Aluguel"></label><br>
         </td>
        </tr>
        <tr>
         <td colspan="4">Tipo de transporte que você utiliza pra trabalhar:<br>
          <input type="radio" name="transporte" value="coletivo" >&nbsp;Transporte Coletivo
          <input type="radio" name="transporte" value="bicicleta">&nbsp;Bicicleta
          <input type="radio" name="transporte" value="proprio">&nbsp;Moto
          <input type="radio" name="transporte" value="outros">&nbsp;Outros
         </td>
        </tr>
        <tr>
         <td colspan="4">Lingua estrangeira:<br>
          Inglês:<input type="radio" name="Ling_Ingles" value="basico" >&nbsp;Básico
          <input type="radio" name="Ling_Ingles" value="tecnico">&nbsp;Tecnico
          <input type="radio" name="Ling_Ingles" value="fluente">&nbsp;Fluente<br>
          Espanhol:<input type="radio" name="Ling_Espanhol" value="basico" >&nbsp;Básico
          <input type="radio" name="Ling_Espanhol" value="tecnico">&nbsp;Tecnico
          <input type="radio" name="Ling_Espanhol" value="fluente">&nbsp;Fluente<br>
         </td>
        </tr>
        <tr>
         <td colspan="4">Informática:<br>
          <label><input type="checkbox" value="word">&nbsp;Word</label>&nbsp;
          <label><input type="checkbox" value="excel">&nbsp;Excel</label>&nbsp;
          <label><input type="checkbox" value="internet">&nbsp;Internet</label><br>
          Outros:<input type="text" name="outro" id="outro" value="" class="form-control" placeholder="Outros cursos">
         </td>
        </tr>
        <tr>
         <td colspan ="4">
          <table class='table table-striped table-bordered table-hover'>
           <tr><td colspan="5" align="center"><b>Composição Familiar</td></tr>
           <tr><td>Nome</td><td>Idade</td><td>Parentesco</td><td>Ocupação</td><td>Remuneração</td></tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome"></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade"></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco"></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao"></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao"></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome"></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade"></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco"></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao"></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao"></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome"></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade"></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco"></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao"></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao"></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome"></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade"></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco"></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao"></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao"></td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td colspan="4">Você paga pensão alimenticia p/ filhos e/ou ex-conjuge?<br>
          <input type="radio" name="Pensao_Paga_Val" value="sim" >&nbsp;Sim&nbsp;
          <input type="radio" name="Pensao_Paga_Val" value="nao">&nbsp;Não<br>
          Valor:<input type="text" name="valor" id="valor" value="" class="form-control" placeholder="Valor">
         </td>
        </tr>
        <tr>
         <td colspan="4">Você recebe pensão alimenticia para seus filhos?<br>
          <input type="radio" name="Pensao_Recebe" value="pagasim" >&nbsp;Sim&nbsp;
          <input type="radio" name="Pensao_Recebe" value="paganao">&nbsp;Não<br>
          Valor:<input type="text" name="valor" id="valor" value="" class="form-control" placeholder="Valor">
         </td>
        </tr>
        <tr>
         <td colspan="4">Quem é a pessoa que mais contribui na renda familiar?<br>
          <input type="radio" name="renda" value="Você">&nbsp;Você&nbsp;
          <input type="radio" name="renda" value="conjuge">&nbsp;Conjuge/Companheiro(a)&nbsp;
          <input type="radio" name="renda" value="pai">&nbsp;Pai&nbsp;
          <input type="radio" name="renda" value="mae">&nbsp;Mãe&nbsp;
          <input type="radio" name="renda" value="outro">&nbsp;Outros
         </td>
        </tr> 
        <tr>
         <td colspan="4">Renda mensal individual<br>
          <input type="radio" name="Renda_Mensal_Individual" value="1">&nbsp;Ate 2 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensal_Individual" value="2">&nbsp;De 02 a 04 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensal_Individual" value="3">&nbsp;Superior a 5 salarios minimos
         </td>
        </tr> 
        <tr>
         <td colspan="4">Renda mensal familiar (incluindo Você)<br>
          <input type="radio" name="Renda_Mensa_Capita" value="1">&nbsp;Ate 2 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensa_Capita" value="2">&nbsp;De 02 a 04 salarios minimos&nbsp;
          <input type="radio" name="Renda_Mensa_Capita" value="3">&nbsp;Superior a 5 salarios minimos
         </td>
        </tr>
        <tr>
         <td colspan="4">Existe em seu domicilio pessoa portadora de deficiencia?<br>
          <input type="radio" name="Deficiente" value="sim">&nbsp;Sim
          <input type="radio" name="Deficiente" value="nao">&nbsp;Nao<br>
          Parentesco:<input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco">
         </td>
        </tr>
        <tr>
         <td colspan="4">Existe em seu grupo familiar pessoa idosa?<br>
          <input type="radio" name="Idoso" value="sim">&nbsp;Sim&nbsp;
          <input type="radio" name="Idoso" value="nao">&nbsp;Nao<br>
         </td>
        </tr>
        <tr>
         <td colspan="4">Qual dos itens ha na sua casa?
          <div><label><input type="checkbox" value="TV">&nbsp;TV</label></div>
          <div><label><input type="checkbox" value="DVD">&nbsp;Video Cassete e/ou DVD</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Radio">&nbsp;Radio</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Microcomputador">&nbsp;Microcomputador</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Automovel">&nbsp;Automovel</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Motocicleta">&nbsp;Motocicleta</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Maquina">&nbsp;Maquina de Lavar Roupa</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Geladeira">&nbsp;Geladeira</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Fixo">&nbsp;Telefone Fixo</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Celular">&nbsp;Telefone Celular</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Internet">&nbsp;Acesso a internet</label>&nbsp;</div>
          <div><label><input type="checkbox" value="TV por assinatura">&nbsp;TV por assinatura</label>&nbsp;</div>
          <div><label><input type="checkbox" value="Empregada Mensalista">&nbsp;Empregada mensalista</label>&nbsp;</div>
         </td>
        </tr>
        <tr>
         <td colspan="4">Você possui algum plano de assistência médica?:<br>
          <input type="radio" name="assistencia" value="sim">&nbsp;Sim&nbsp;
          <input type="radio" name="assistencia" value="nao">&nbsp;Nao<br>
          Qual?<input type="text" name="assistencia" id="assistencia" value="" class="form-control" placeholder="Assistência médica"></td>
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
    <!-- /.col-lg-12 -->
>>>>>>> origin/master
