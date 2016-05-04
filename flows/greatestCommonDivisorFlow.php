<?php

	//agorithm
	includeFileOnce('algorithms/greatestCommonDivisor');
	//display GCD menu text
	includeFile('templates/greatestCommonDivisor');

	//selecting the option
	write('Select your wanted option: ');
	$option = readInt();

	//selecting the number of Numbers for GCD calculator
	write('Insert the number of numbers: ');
	$countNumbers = readInt();

	//reading those N number used for GCD calculator
	$numbers = array();
	$numbers = readNumbersArray($countNumbers);

	//start Algorithm and display converted result
	write('Greatest Common Divisor is '.greatestCommonDivisorAlgo($numbers, $option));

?>