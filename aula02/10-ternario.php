<?php
	$number1 = 1;
	$number2 = 2;
	
	/*if($number1 > $number2){
		$a = 'Numero 2 é maior q 1';
	}else{
		$b = 'Numero 2 não é maior que numero 1'
	}*/
	
	//ternario
	$ternario = ($number2 > $number1) ? 'Numero 2 é maior que 1' : 'Numero 2 não é maior que numero 1';
		
	echo $ternario;	
?>