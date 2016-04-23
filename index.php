<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
function ajax(nome,cidade){
	info = {"nNome" : nome, "nCidade" : cidade};

	$.ajax({
	type:"post",
	url:"arquivo.php",
	data: info,
}).done(function(data){

	data =$.parseJSON(data);

	$(".resultado span.nome").text(data.nNome);;
	$(".resultado span.cidade").text(data.nCidade);
});

}

$(document).ready(function(){

	$("input[name=enviar]").click(function(){
	var nome = $("input[name=nome]").val();
	var cidade = $("input[name=cidade]").val();

	ajax(nome,cidade);

});

	
});


</script>
<div class="title">
	<h1>TESTE DE PHP + AJAX</h1>
</div>

<form id="formulario">
	<label>nome: </label><input type="text" name="nome">
	<label>cidade: </label><input type="text" name="cidade">
	<input type="button" name="enviar" value="enviar">
</form>
<div class="resultado">
	nome:<span class="nome"></span><br/>
	cidade:<span class="cidade"></span><br/>
</div>