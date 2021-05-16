<?php
	//mktime - formata hora, minuto, segundo, mes dia e ano.
	
	$data = mktime(02,30,00,04,30,1995);
	//mostra 30-04-1995
	echo date("d-m-Y",$data)."<br>";
	
	//mostra 30-04-1995 02:30
	echo date("d-m-Y H:i")."<br>";
	
	//mostra 1995
	echo date("Y",$data)."<br>";
	
?>