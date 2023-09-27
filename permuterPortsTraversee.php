<?php
	
	echo "\nTraversée Aller : \n" ;
	
	echo "\nSaisir le nom du port de départ : " ;
	$portDepart = trim(fgets(STDIN)) ;
	
	echo "\nSaisir le nom du port d'arrivée : " ;
	$portArrivee = trim(fgets(STDIN)) ;
	
	echo "Départ : " , $portDepart , "Retour : " , $portArrivee ;
	
	$permutation = 0 ;
	$permutation = $portDepart ;
	$portDepart = $portArrivee ;
	$portArrivee = $permutation ;
	
	echo "\n Traversée retour : \n" ;
	echo "Départ : " , $portDepart ;
	echo "retour : " , $portArrivee ;

?>
