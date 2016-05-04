<?php

	//agorithm
	includeFileOnce('algorithms/baseConvertor');
	//display header menu text
	includeFile('templates/baseConvertor');

	//selecting the option
	write('Select your wanted option: ');
	$option = readInt();

	//selecting the input value
	write('Insert the number n= ');
	$n = readValue();

	//start Algorithm and display converted result
	write('Converted number is '.baseConvertorAlgo($n, $option));

?>