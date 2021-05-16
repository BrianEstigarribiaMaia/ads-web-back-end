<?php
	//DateTime - trabalhar cm data e hora como se fossem objetos 
	
	$atual = new DateTime();
	$especifica = new DateTime('1990-01-22');
	$texto = new DateTime('+1 month');
	
	print_r($atual)."<br>";
	print_r($especifica)."<br>";
	print_r($texto)."<br>";
?>