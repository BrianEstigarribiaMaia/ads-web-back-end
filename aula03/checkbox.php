<?php
	//verifica numeros
	if(isset($_POST["numeros"])){
		echo "Os numeros de sua preferencia são: <br>";
		//loop pelo array de numeros
		foreach($_POST["numeros"] as $numero){
			echo "-".$numero."<br>";
		}
	}else{
		echo "Voce não escolheu numero preferido!";
	}
	
	//verifica newslatter
	if(isset($_POST["news"])){
		echo "Voce deseja receber as novidades por email!";
	}else{
		echo "Você não quer receber novidades por email...";
	}
?>