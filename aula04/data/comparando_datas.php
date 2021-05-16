<?php
	//comparando datas
	
	$data1 = new DateTime('2011-09-11');
	$data2 = new DateTime('2011-10-13');
	var_dump($data1 == $data2);
	var_dump($data1 > $data2);
	var_dump($data1 < $data2);
	// boolean false
	// boolean false
	// boolean true
?>