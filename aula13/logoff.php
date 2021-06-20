<?php

session_start();

if(isset($_SESSION['usuarioLogado'])){
	unset($_SESSION['usuarioLogado']);
}

session_destroy();

header('Location: http://localhost:8080/aula13/sessao.php');

?>