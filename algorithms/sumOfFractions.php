<?php

	//including the Algorithm file
	includeFileOnce('algorithms/leastCommonMultiple');


	/**
		* Sum of N Fractions
		* @param $fractions - a bidimensional array with every fraction (numerator-denominator)
		* @return sum of fractions and simplified (int value)
	*/
	function sumOfFractionsAlgo($fractions) {
		$denominators = array();
		$denominators = getAllDenominators($fractions);

		//get the least common multiple for all fractions denominators
		$leastCommonMultiple = leastCommonMultipleAlgo($denominators);
		$sumOfNumerators = 0;

		foreach($fractions as $fraction)
			$sumOfNumerators += $fraction['numerator']*($leastCommonMultiple/$fraction['denominator']);

		return $sumOfNumerators/$leastCommonMultiple;
	}


	/**
		* Get all denominators from $fractions
		* @param $fractions - a bidimensional array with every fraction (numerator-denominator)
		* @return an array with all $denominators
	*/
	function getAllDenominators($fractions) {
		$denominators = array();

		$counter = 0;
		foreach ($fractions as $fraction) {
			$denominators[$counter] = $fraction['denominator'];
			$counter++;
		}

		return $denominators;
	}


?>