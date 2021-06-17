<?php
include 'conexao.php';

$acao = $_REQUEST['acao'];

$dados = array();

$dados['NOME'] = '';
if(isset($_REQUEST['txtNome'])){
	$dados['NOME'] = $_REQUEST['txtNome'];
}

$dados['EMAIL'] = '';
if(isset($_REQUEST['txtEmail'])){
	$dados['EMAIL'] = $_REQUEST['txtEmail'];
}

$dados['ID'] = '';
if(isset($_REQUEST['txtId'])){
	$dados['ID'] = $_REQUEST['txtId'];
}

$mensagemErro = '';
if($acao !== 'CARREGAR_DADOS' && $acao !== 'MOSTRAR_FORMULARIO'){
	if ($dados['NOME'] === ''){
		$mensagemErro = 'O nome deve ser informado';
	}
}

if($acao === 'CARREGAR_DADOS'){
	$sql = "select * from clientes where clienes.id = :id";
	$stmt = $conexao->prepare(sql);
	$stmt->bindValue(":id", $_REQUEST['id']);
	$stmt->execute();
	$dados = $stmt->fetch();
	$acao = 'EDITAR_DADOS';
	
}else{
	if($acao === 'INSERIR_DADOS' || $acao === 'EDITAR_DADOS'){
		if($mensagemErro === ''){
			include_once 'crudPersistir.php';
			exit(0);
		}
	}
}

if($acao === 'MOSTRAR_FORMULARIO'){
	$acao = 'INSERIR_DADOS';
}

?>

<html>
<body>
	<a href = "crudLista.php">Voltar</a><br>
	Mensagem de erro: <?=$mensagemErro?>
	<form action="crudFormulario.php">
		Nome:
		<input type = "text" name = "txtNome" value = "<?=$dados['NOME']; ?>">
		<br>
		E-mail:
		<input type = "text" name= "txtEmail" value = "<?=$dados['EMAIL']; ?>">
		<br>
		<input type = "hidden" name = "txtId" value = " <?=$dados['ID']; ?>">
		<input type = "hidden" name = "acao" value = " <?=$acao; ?>" >
		<button value = "Salvar">Salvar</button>
	</form>
</body>
</html>


