<?php

	echo "Saisir le montant en euros : " ;
	$prixEuros = fgets(STDIN) ;
	
	$ETOD  = 1.3  ;
	$prixDollars = $ETOD * $prixEuros ;
	
	echo "Prix : " , $prixEuros , " €\n" ;
	echo "Prix : " , $prixDollars , " $\n" ;
?>
