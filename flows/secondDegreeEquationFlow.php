<?php


	//display header text
	includeFileOnce('templates/secondDegreeEquation');
	//include algorithm file for calculator
	includeFileOnce('algorithms/secondDegreeEquation');

	//reading the first number
	write('Insert a= ');
	$a = readInt();

	//reading the second number
	write('Insert b= ');
	$b = readInt();

	//reading the third number
	write('Insert c= ');
	$c = readInt();
	
	//display the equation
	write('Your equation is: '.$a.'xˆ2+'.$b.'x'.$c.'=0');

	//start Algorithm and display the equation result
	write('Equation result is '.secondDegreeEquationAlgo($a, $b, $c));

?>