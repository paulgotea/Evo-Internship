<?php

	/**
		* Starting the algorithm for Base Convertor
		* @param $n - the input value that needs to be converted
		* @param $option - type of conversion, selected by the user
	*/
	function baseConvertorAlgo($n, $option) {

		switch($option) {
			//Division based iterative (Euclid's Algorithm)
			case 1:
				write('You selected Base 10 to Base 2 Conversion');
				//starting the Decimal To Binary Conversion Algorithm
				return decimalToBinary($n);
				break;
			case 2:
				write('You selected Base 2 to Base 10 Conversion');
				//starting the Binary To Decimal Conversion Algorithm
				return binaryToDecimal($n);
				break;
			case 3:
				write('You selected Base 2 to Base 16 (HEX) Conversion');
				//starting the Decimal To HEX Conversion Algorithm
				return decimalToHex($n);
				break;		
			case 4:
				write('You selected Base 16 (HEX) to Base 2  Conversion');
				//starting the HEX To Decimal Conversion Algorithm
				return hexToDecimal($n);
				break;																						
		}

	}

	/**
		* Converting from Decimal To Binary
		* @param $number - input value that needs to be converted
		* @return the converted input value into Binary (int)
	*/
	function decimalToBinary($number) {
		$binary=0;
		while($number!=0){
			$binary .= $number%2;
			$number = intval($number/2);
		}

		$binary = strrev($binary);
		$binary /= 10;

		return $binary;
	}

	/**
		* Converting from Binary To Decimal
		* @param $binary - input value that needs to be converted
		* @return the converted input value into Decimal (int)
	*/
	function binaryToDecimal($binary) {
		$number = 0;

		for($i=0, $count = strlen($binary); $i<$count; $i++) {
			$number += $binary%10 * pow(2,$i);
			$binary /= 10;
		}

		return $number;
	}

	/**
		* Converting from Decimal To HEX
		* @param $number - input value that needs to be converted
		* @return the converted input value into HEX
	*/
	function decimalToHex($number) {
		$hex = array(
			'10' => 'A',
			'11' => 'B',
			'12' => 'C',
			'13' => 'D',
			'14' => 'E',
			'15' => 'F'
		);

		$base16='';

		while( $number!=0 ) {
			$rest  = $number%16;

			if( array_key_exists($rest, $hex) )
				$base16 .= $hex[$rest];
			else
				$base16 .= $rest;

			$number = intval($number/16);	
		}

		$base16 = strrev($base16);

		return $base16;
	}

	/**
		* Converting from HEX To Decimal
		* @param $string - input value that needs to be converted
		* @return the converted input value into Decimal (int)
	*/	
	function hexToDecimal($string) {
		$hex = array(
			'A' => '10',
			'B' => '11',
			'C' => '12',
			'D' => '13',
			'E' => '14',
			'F' => '15'
		);

		$number = 0;

		for( $i=strlen($string)-2, $count = 0; $i>=0; $i-- ) {

			if( array_key_exists($string[$i], $hex) )
				$number += $hex[$string[$i]] * pow(16,$count);
			else
				$number += $string[$i] * pow(16,$count);

			$count++;
		}
		
		return $number;
	}

?>