<?php

	includeFileOnce('algorithms/greatestCommonDivisor');

	/**
		* Computing LCD for N numbers using GCD Iterative Algorithm
		* @param $numbers - input value with N numbers
		* @return LCD of the $n numbers using GCD Algorithm
	*/
	function leastCommonMultipleAlgo($numbers) {
		$lcd = ($numbers[0]*$numbers[1])/gcdIterative($numbers[0], $numbers[1]);
		
		for($i=0, $count = count($numbers); $i<$count; $i++) {
			$lcd = $lcd*$numbers[$i]/gcdIterative($lcd, $numbers[$i]);
		}
		return $lcd;
	}


?>