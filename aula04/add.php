<?php
	//add - acrecentar periodo ao tempo
	$data = new DateTime('2020-09-11');
	print_r($data);
	$data->add(new DateInterval('P2M5D')); //2 meses e 5 dias 
	print_r($data);
?>
