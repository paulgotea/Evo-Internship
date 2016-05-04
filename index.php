<?php
	
	//constant for the absolute path of the project
	define('PROJECT_PATH', __DIR__);

	//include main files
	include 'utils/includeFiles.php';
	include_once 'utils/main.php';
	includeFile('flows/menuFlow');
	includeFile('main/read');
	includeFile('main/write');


	//showmenu loop
	while(true) {

		//display the menu 
		menuFlow();

		//reading user input, what action he wants to make
		write('Choose your option: ');
		$menuOption = readInt();

		switch ($menuOption) {
			case 1:
				//start second degree equation calculator
				secondDegreeEquation();
				break;
			case 2:
				//start square root calculator
				squareRoot();
				break;
			case 3:
				//start GCD calculator
				greatestCommonDivisor();
				break;
			case 4:
				//start LCD calculator
				leastCommonMultiple();
				break;	
			case 5:
				//start calculating the sum of fractions
				sumOfFractions();
				break;
			case 6:
				//start base convertor
				baseConvertor();
				break;						
		}

	}

?>
