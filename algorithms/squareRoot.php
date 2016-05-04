<?php

	
	/**
		* Computing the Square Root of a number
		* @param $n - the input number
		* @return Square Root of the number $n with only 2 digits
	*/
	function squareRootAlgo($n) {
		$guess = $n/2;

		while( $guess*$guess != $n ) {

			$r = $n / $guess;
			$guess = ($guess + $r) / 2;
		}
			
		return number_format($guess, 2);
	}


?>