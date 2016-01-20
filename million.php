<?php

error_reporting(-1);


$deposit = 10000;
$percentPerYear = 1.1;
$personCurrentAge = 16;
for ($year = 0; $deposit < 1000000; $year++) {
    $deposit *= $percentPerYear;
}

$personCurrentAge += $year;
echo "Million budet cherez $year\n"; 
echo "Clientu budet $personCurrentAge\n";
    
	

