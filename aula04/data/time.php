<?php
	$nextWeek = time() + (7*24*60*60);
	echo "Now ".date("d/m/Y")."<br>";
	echo "Next Week: ".date("d/m/Y", $nextWeek)."<br>";
	echo "Next Week: ".date("d/m/Y", strtotime("+ 1 week"))."<br>";
	
?>