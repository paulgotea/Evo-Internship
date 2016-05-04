<?php

	//agorithm
	includeFileOnce('algorithms/leastCommonMultiple');
	//display LCD menu text
	includeFile('templates/leastCommonMultiple');

	//selecting the number of Numbers for GCD calculator
	write('Insert the number of numbers: ');
	$countNumbers = readInt();

	//reading those N number used for GCD calculator
	$numbers = array();
	$numbers = readNumbersArray($countNumbers);

	//start Algorithm and display converted result
	write('Least Common Multiple is: '.leastCommonMultipleAlgo($numbers));


?>