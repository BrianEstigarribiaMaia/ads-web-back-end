<?php
//feof - verifica se chegou ao final do arquivo antes de fechar

$file = fopen("c:\\xampp\\htdocs\\sistemasWebAulas\\Aula06\\teste1.txt","r");

while(!feof($file)){
	echo "Ainda não cheguei no final do arquivo";
}

fclose($file);
?>