<?php

error_reporting(-1);


$deposit = 10000;
$percentPerYear = 1.1;
$personCurrentAge = 16;
for ($year = 1; $year <= 10000; $year++) {
    $deposit *= $percentPerYear;
    if ($deposit >= 1000000) {
        $personCurrentAge += $year;
        echo "Million budet cherez $year\n"; 
	echo "Clientu budet $personCurrentAge\n";
	break;
    }	
}
