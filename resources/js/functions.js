function adicionarLinha(){
	var local=document.getElementById('TabParentesco');
	var tblBody = local.tBodies[0];
	var newRow = tblBody.insertRow(-1);  
	var indice = document.getElementById('familiaqnt').value;
	var newCell0 = newRow.insertCell(0);
	newCell0.innerHTML = '<td><input type="text" name="FamiliarNome'+indice+'"  value="" class="form-control" placeholder="Nome"></td>'; 
	var newCell1 = newRow.insertCell(1);
	newCell1.innerHTML = '<td><input type="text" name="FamiliarDataNasc'+indice+'"  value="" class="form-control" maxlength="10" placeholder="Data de Nascimento" onkeyup=dataConta(this)></td>';
	var newCell2 = newRow.insertCell(2);
	newCell2.innerHTML = '<td><input type="text" name="FamiliarParentesco'+indice+'"  value="" class="form-control" placeholder="Parentesco"></td>';
	var newCell3 = newRow.insertCell(3);
	newCell3.innerHTML = '<td><input type="text" name="FamiliarOcupacao'+indice+'"  value="" class="form-control" placeholder="Ocupação"></td>';
	var newCell4 = newRow.insertCell(4);
	newCell4.innerHTML = '<td><input type="text" name="FamiliarRemuneracao'+indice+'"  value="" class="form-control" placeholder="Remuneração"></td>';
	var newCell5 = newRow.insertCell(5);
	newCell5.innerHTML = '<td><button class="btn btn-large btn-danger fa fa-trash" onclick="deleteRow(this.parentNode.parentNode.rowIndex)"></button></td>';
	var indice=document.getElementById('familiaqnt').value++;
}
function deleteRow(i){
	var indice = document.getElementById('familiaqnt').value;
	document.getElementById('TabParentesco').deleteRow(i)
	var indice=document.getElementById('familiaqnt').value--;
}

function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

function mcel(v){
	v=v.replace(/\D/g,"");
	v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
	v=v.replace(/(\d)(\d{4})$/,"$1-$2");
	return v;
}

function mfixo(v){
	v=v.replace(/\D/g,"");
	v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
	v=v.replace(/(\d)(\d{4})$/,"$1-$2");
	return v;
}

window.onload = function(){
	id('Fone_Cel').onkeyup = function(){
		mascara( this, mcel );
	}
	id('Fone_Fixo').onkeyup = function(){
        	mascara( this, mfixo );}
}

function cep(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execcep()",1)
}

function execcep(){
	v_obj.value=v_fun(v_obj.value)
}

function mcep(v){
	v=v.replace(/\D/g,"");            
	v=v.replace(/^(\d{2})(\d)/g,"$1.$2"); 
	v=v.replace(/(\d)(\d{3})$/,"$1-$2");    
	return v;
}

function id( el ){
	return document.getElementById( el );
}

window.onload = function(){
	id('End_CEP').onkeyup = function(){
		cep( this, mcep );
	}
}


function mostraTipo(){
	if((document.getElementById("Trans_Forma").value=="carro")||(document.getElementById("Trans_Forma").value=="moto")){
		document.getElementById("Trans_Tipo").style.display="block";
	}else{
		document.getElementById("Trans_Tipo").style.display="none";
	}			
}

function dataConta(c){
	if(c.value.length ==2){
		c.value += '/';
	}
	if(c.value.length==5){
		c.value += '/';	
	}
}
