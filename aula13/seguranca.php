<?php

session_start();

if (!array_key_exists('usuarioLogado', $_SESSION || $_SESSION['usuarioLogado'] == '')){
	header("Location: http://localhost:8080/aula13/sessao.php");
}
?>

<html>
<body>
	<h1>Usuário Logado</h1>
	<a href = "logoff.php">Logoff</a>
</body>
</html>