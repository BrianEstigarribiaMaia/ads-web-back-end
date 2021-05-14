<?php
	echo "Seu processador é :".$_POST{"processador"}."<br>";
	//verifica se o usuario escolheu algum livro
	if(isset($_POST["livros"])){
		echo "O(s) livro(s) que voce deseja comprar: <br>";
		//faz loop para os livros
		foreach($_POST["livros"] as $livro){
			echo "-".$livro."<br>";
		}
	}else{
		echo "Voce não escolheu nenhum livro";
	}
?>