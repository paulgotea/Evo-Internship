<?php

	/**
		* Starting the algorithm for Greatest Common Divisor Calculator
		* @param $numbers - an array with N numbers 
		* @param $option - type of algorithm selected by the user
	*/
	function greatestCommonDivisorAlgo($numbers, $option) {

		switch($option) {
			//Division based iterative (Euclid's Algorithm)
			case 1:
				write('You selected Division based iterative (Euclid\'s Algorithm)');
				//starting the GCD Iterative Algorithm
				return startGCDIterative($numbers);
				break;
			case 2:
				write('You selected Division based recursive (Euclid\'s Algorithm)');
				//starting the GCD Recursive Algorithm
				return startGCDRecursive($numbers);
				break;
			case 3:
				write('You selected Subtraction base');
				//starting the GCD Substraction Base Algorithm
				return gcdSubstractionBase($numbers);
				break;
			case 4:
				write('Binary method');
				//starting the GCD using Binary Method
				return startGCDBinary($numbers);
				break;												
		}

	}

	/**
		* Computing GCD for N numbers using GCD Iterative Algorithm
		* @param $numbers - input value with N numbers
		* @return GCD of the N numbers
	*/
	function startGCDIterative($numbers) {
		$gcd = gcdIterative($numbers[0], $numbers[1]);
		for($i=0, $count = count($numbers); $i<$count; $i++) {
			$gcd = gcdIterative($gcd, $numbers[$i]);
		}
		return $gcd;	
	}

	/**
		* Computing GCD for 2 numbers using GCD Iterative Algorithm
		* @param $a - first number
		* @param $b - second number
		* @return GCD of the $a and $b numbers
	*/
	function gcdIterative($a, $b) {
		while( $a!=$b ) {
			if( $a>$b )
				$a = $a - $b;
			else
				$b = $b - $a;
		}
		return $a;
	}

	/**
		* Computing GCD for N numbers using GCD Recursive Algorithm
		* @param $numbers - input value with N numbers
		* @return GCD of the N numbers
	*/
	function startGCDRecursive($numbers) {
		$gcd = gcdRecursive($numbers[0], $numbers[1]);
		for($i=0, $count = count($numbers); $i<$count; $i++) {
			$gcd = gcdRecursive($gcd, $numbers[$i]);
		}
		return $gcd;	
	}	

	/**
		* Computing GCD for 2 numbers using GCD Recursive Algorithm
		* @param $a - first number
		* @param $b - second number
		* @return GCD of the $a and $b numbers
	*/
	function gcdRecursive($a, $b) {
	    if( $b == 0 )
	        return $a;
	    else return gcdRecursive($b, $a%$b);
	}

	/**
		* Computing GCD for N numbers using GCD Substraction Base Algorithm
		* @param $numbers - input value with N numbers
		* @return GCD of the N numbers
	*/
	function startGCDSubstraction($numbers) {
		$gcd = gcdRecursive($numbers[0], $numbers[1]);
		for($i=0, $count = count($numbers); $i<$count; $i++) {
			$gcd = gcdRecursive($gcd, $numbers[$i]);
		}
		return $gcd;	
	}	

	/**
		* Computing GCD for 2 numbers using GCD Substraction Base Algorithm
		* @param $a - first number
		* @param $b - second number
		* @return GCD of the $a and $b numbers
	*/
	function gcdSubstractionBase($a, $b) {
	    if( $a == $b )
	        return $a;
	    if( $a > $b )
	    	return gcdSubstractionBase($a-$b, $b);
	    else
	    	return gcdSubstractionBase($a, $b-$a);
	}

	/**
		* Computing GCD for N numbers using GCD Binary Method Algorithm
		* @param $numbers - input value with N numbers
		* @return GCD of the N numbers
	*/
	function startGCDBinary($numbers) {
		$gcd = gcdRecursive($numbers[0], $numbers[1]);
		for($i=0, $count = count($numbers); $i<$count; $i++) {
			$gcd = gcdRecursive($gcd, $numbers[$i]);
		}
		return $gcd;	
	}		

	/**
		* Computing GCD for 2 numbers using GCD Binary Method Algorithm
		* @param $a - first number
		* @param $b - second number
		* @return GCD of the $a and $b numbers (recursive)
	*/
	function gcdBinary($a, $b) {
	    if ($a == $b)
	        return $a;
	    if ($a == 0)
	        return $b;
	    if ($b == 0)
	        return $a;
	    if (~$a & 1) { 
	        if ($b & 1) 
	            return gcdBinary($a >> 1, $b);
	        else
	            return gcdBinary($a >> 1, $b >> 1) << 1;
	    }
	    if (~$b & 1)
	        return gcdBinary($a, $b >> 1);
	    if ($a > $b)
	        return gcdBinary(($a - $b) >> 1, $b);

	    return gcdBinary(($b - $a) >> 1, $a);
	}	

?>