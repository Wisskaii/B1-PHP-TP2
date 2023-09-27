<?php

	echo "- Application - Gestion des traversées : " ;
	echo "Quelle heure est-il ? : " ;
	
	$heures = trim(fgets(STDIN)) ;
	
	echo "\n Et combien de minutes se sont écoulées ? : " ;
	$minutes = trim(fgets(STDIN)) ;
	
	$minutesApres = ($minutes + 1) ;

	echo "\n Dans une minute, il sera " , $heures , ":" , $minutesApres , "\n" ;

?>
	
