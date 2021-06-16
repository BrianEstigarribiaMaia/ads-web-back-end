<?php
	/*
		6. (Peso 1,0) - Crie um script php que deve imprimir (uso do comando echo) a data
		15/12/2014 no formato de mês(2 dígitos se necessário) – dia (2 dígitos se necessário) –
		ano (2 dígitos).
	*/
	
	$data = new DateTime('15-12-2014');
	
	echo $data->format('d/m/y');
?>