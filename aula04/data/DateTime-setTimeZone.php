<?php
	//setTimezone - fuso horarios
	$fuso = new DateTimeZone('America/New_York');
	$data = new DateTime('22-01-1990');
	$data->setTimezone($fuso);
	echo $data->format('d-m-Y H:i:s');
?>