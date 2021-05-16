<?php
	//idate - em conjunto com strtotime recebe uma string de data em ingles e retorna um numero
	$timestamp = strtotime('9st March 1995');
	echo idate('m', $timestamp);
?>