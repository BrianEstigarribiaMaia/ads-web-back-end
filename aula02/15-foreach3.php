<?php
	$temp = array('2010' => array('Outubro' => 25,'Novembro' => 23,'Dezembro' => 20),
				  '2011' => array('Outubro' => 26,'Novembro' => 22,'Dezembro' => 21),
				  '2012' => array('Outubro' => 27,'Novembro' => 28,'Dezembro' => 19)
	);			  
	
	foreach($temp as $ano => $meses){
		echo "Temperaturas em $ano<br>";
		
		foreach($meses as $mes =$temp){
			echo "$mes : $temp graus<br>";	
		}
	}
?>