<?php
	//setTime - ajustar hora em hora, minutos e segundos(opcional);
	$data = new DateTime('22-01-1990');
	$data->setTime(9,15,44);
	echo $data->format('d-m-Y H:i:s');
?>