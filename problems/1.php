<?php

$sum = 0;

for ($i=1; $i < 1000; $i++) {
	if ($i % 3 == 0 || $i % 5 == 0) {
		$sum += $i;
	}	
}

echo "TOTAL = " . $sum . "<br>";



// alternative (more efficient) solution: 
// calculate the sum of numbers < 1000, divisible by 3
// + the sum of numbers < 1000, divisible by 5
// - the sum of numbers < 1000, divisible by 15. 
// 

$target = 999;
$sum = 0;

function counted($a) 
{
	global $target; // must state to use global $target within function
	$p = floor($target/$a); // floor to round down after division
	return ($a*($p*($p+1))/2);
}

$sum = counted(3) + counted(5) - counted(15);
echo "TOTAL = " . $sum . "<br>";



?>