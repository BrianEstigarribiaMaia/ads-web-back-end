<?php
	/*
		8. (Peso 1,0) - Escreva um script php que leia um arquivo informado pelo usuário e
		adiciona o seguinte o valor no arquivo “Trabalho de PHP”.
		
	*/
	
	$filename = 'teste.txt';
	$conteudo = "Trabalho de PHP\n";
	
	if(is_writable($filename)){
		
		if(!$handle = fopen($filename, 'a')){
			echo "Não foi possivel abrir o arquivo ($filename)";
			exit;
		}
		
		if(fwrite($handle, $conteudo) == FALSE){
			echo "Não foi possivel escrever no arquivo ($filename)";
			exit;
		}
		
		echo "Sucesso: Escrito ($conteudo) no arquivo ($filename)";
		fclose($handle);
		
	}else{
		echo "O arquivo $filename não pode ser alterado";
	}

?>