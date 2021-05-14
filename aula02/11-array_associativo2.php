<?php
	$ensino = 'EAD';
	$formacao = array('PHP' => 'Desenvolvedor PHP', 'Infra' => 'SysAdmin Linux');
	
	//não concatenadas
	echo "<p>No $ensino da FTEC voce se torna {$formacao['PHP']}";
	echo "e pode se tornar também {$formacao['Infra']}</p>";
	
	//concatenadas
	echo '<p>No'.$ensino.'da FTEC voce se torna '.$formacao['PHP'];
	echo "e pode se tornar também</p>";
?>