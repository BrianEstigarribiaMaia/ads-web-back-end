<?php
	//setDate - ajustar data em ano, mes e dia
	$date = new DateTime('22-01-1990');
	$data->setDate(1995,3,9);
	echo $data->format('d-m-Y H:i:s');
?>