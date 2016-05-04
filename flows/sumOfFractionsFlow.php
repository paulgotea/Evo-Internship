<?php

	//agorithm
	includeFileOnce('algorithms/sumOfFractions');
	//display GCD menu text
	includeFile('templates/sumOfFractions');

	write('Insert the number of fractions: ');
	$countNumbers = readInt();

	$fractions = array();
	$fractions = readFractionsArray($countNumbers);

	//display fractions Sum
	write('The sum of fractions is: '.sumOfFractionsAlgo($fractions));

?>