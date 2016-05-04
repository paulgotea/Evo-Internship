<?php
	/**
		* Calculating the second degree equation 
		* @param $a - first coefficient of equation
		* @param $b - second coefficient of equation
		* @param $c - third coefficient of equation
		* @return a string formated by 2 numbers with 2 digits
	*/
	function secondDegreeEquationAlgo($a, $b, $c) {

		if( $a<0 ) {
			write('Your input value is incorrect! Try again!');
			exit;
		}

	    $delta=($b*$b)-(4*$a*$c);

	    if( $delta < 0 ) {
	    	$delta = $delta * (-1);
	    	$x1 = $b.'+i*'.sqrt($delta).' / '.(2*$a);
	    	$x2 = -$b.'-i*'.sqrt($delta).' / '.(2*$a);

	    	return $x1.' and '.$x2;
	    }
	    else if( $delta == 0  ) {
			$x1 = (-$b+sqrt($delta))/(2*$a);
			$x2 = $x1;
	    }
	    else {
	    	$x1=(-$b+sqrt($delta))/(2*$a);
	    	$x2=(-$b-sqrt($delta))/(2*$a);
	    }

	    //displaying the result using only 2 digits
	    return number_format($x1, 2).' and '.number_format($x2, 2);

	}

?>