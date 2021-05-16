<?php
	//modify - altera a data do objeto
	$data = new DateTime('22-01-1990');
	$data->modify('+2 month');
	echo $data->format('d-m-Y H:i:s');
?>