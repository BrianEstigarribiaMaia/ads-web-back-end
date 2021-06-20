<?php

$NomeUsuario = "";

if($_REQUEST['REQUEST_METHOD'] === 'GET' && array_key_exists('usuario', $_COOKIE)){
	$NomeUsuario = $_COOKIE['usuario'];
}else if(array_key_exists('usuario', $_REQUEST)){
	$NomeUsuario = $_REQUEST['usuario'];
}

if(array_key_exists('usuario', $_REQUEST) && $_REQUEST['usuario'] === 'ftec'){
	$tempo = strtotime("+5 months");
	setcookie('usuario', $_REQUEST['usuario'], $tempo);
}
?>
<html>
<body>
	<form method = "post" action = "logoff.php">
		Usuário
		<input type = "text" name = "usuario" value = "<?=$NomeUsuario ?>">
		<button type = "submit">Logar</button>
	</form>
</body>
</html>