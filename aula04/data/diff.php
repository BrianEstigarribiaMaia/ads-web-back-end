<?php
	//diff - diferença entre datas 
	$data1 = new DateTime('2011-09-11');
	$data2 = new DateTime('2011-10-13');
	$intervalo = $data1->diff($data2);
	echo $intervalo->format('%R%a dias');
	// +32 dias
?>