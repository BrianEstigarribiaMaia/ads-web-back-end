<?php
	//sub - subtrair intervalos 
	$data = new DateTime('2011-12-31');
	print_r($data);
	$data->sub(new DateInterval('P7D')); //intervalo de 7 dias
	print_r($data); //24
?>