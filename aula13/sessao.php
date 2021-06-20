<?php

$NomeUsuario = "";

if($_REQUEST['REQUEST_METHOD'] === 'GET' && array_key_exists('usuario', $_COOKIE)){
	$NomeUsuario = $_COOKIE['usuario'];
}else if(array_key_exists('usuario', $_REQUEST)){
	$NomeUsuario = $_REQUEST['usuario'];
}

if(array_key_exists('usuario', $_REQUEST) && $_REQUEST['usuario'] === 'ftec'){
	$tempo = strtotime("+11 months");
	setcookie('usuario', $_REQUEST['usuario'], $tempo);
	
	session_start();
	$_SESSION['usuarioLogado'] = $_REQUEST['usuario'];
	header("Location: http://localhost:8080/aula13/seguranca.php");
}

?>

<html>
<body>
	<form action="post">
		Usuário
		<input type = "text" name = "usuario" value = "<?=$NomeUsuario?>">
		<button type = "submit">Logar</button>
	</form>
</body>
</html>











