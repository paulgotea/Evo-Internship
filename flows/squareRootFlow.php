<?php


	//display header text
	includeFileOnce('templates/squareRoot');
	//agorithm for square root calculator
	includeFileOnce('algorithms/squareRoot');

	//reading the number
	write('Insert the number n= ');
	$n = readInt();

	//start Algorithm and display the square root
	write('The square root of '.$n.' is '.squareRootAlgo($n));

?>