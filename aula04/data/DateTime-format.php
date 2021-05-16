<?php
	//format - formato de data e hora
	$data = new DateTime();
	echo $data->format('d-m-Y H:i:s');
	$data = new DateTime('+1 month');
	echo $data->format('d-m-Y H:i:s');
?>