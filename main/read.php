<?php

	//read an INT value from terminal
	function readInt() {

		$handle = fopen ("php://stdin","r");
		$value = fgets($handle);

		return (int)$value;
	}

	//read a value from terminal (string, int, float, etc..)
	function readValue() {

		$handle = fopen ("php://stdin","r");
		$value = fgets($handle);

		return $value;
	}	

	//read an array
	function readNumbersArray($count) {
		$numbers = array();

		for($i=0; $i<$count; $i++) {
			write('Insert number '.($i+1).': ');
			$numbers[$i] = readInt();
		}

		return $numbers;
	}

	//read a bidimensional array for fractions
	function readFractionsArray($count) {
		$fractions = array();

		for($i=0; $i<$count; $i++) {
			write('____________________________________');
			write('Insert fraction '.($i+1).' numerator ');
			$fractions[$i]['numerator'] = readInt();
			write('Insert fraction '.($i+1).' denominator ');
			$fractions[$i]['denominator'] = readInt();
		}

		return $fractions;
	}	


?>