<?php

ini_set("display_errors", 1);
error_reporting (-1); 

use Artem\ArtemException;
use Artem\MyLog;
use Artem\Linear;
use Artem\Square;


include 'core/EquationInterface.php';
include 'core/LogInterface.php';
include 'core/LogAbstract.php';
include 'Artem/ArtemException.php';
include 'Artem/MyLog.php';
include 'Artem/Linear.php';
include 'Artem/Square.php';



	try{
		echo 'Enter a, b, c' . "\n";
		$num = [];
		for($i = 0; $i < 3; $i++){
			$num[$i] = readline("Value = ");	
		}
		MyLog::log("Vvedeno uravneniye: " . $num[0] . "x^2 + " . $num[1] . "x + " . $num[2] . " = 0");
		$square = new Square();
		$roots = $square->solve($num[0], $num[1], $num[2]);
		MyLog::log("Korni uravneniye: " . implode(",", $roots) . "\n");
	} catch(ArtemException $e) {
		MyLog::log($e->getMessage());
	}

MyLog::write();