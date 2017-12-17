<?php

// day 2

$fh = fopen("day2_input.csv", "r") 
		or die("Can't open csv file.");

$sum = 0;

while ($row = fgetcsv($fh, 0, "\t")) {
	print_r($row);	
	$min = $max = array_shift($row);

	foreach ($row as $val) {
		if ($min > $val) {
			$min = $val;
		}
		if ($max < $val) {
			$max = $val;
		}
	}
	echo "Max is $max, and min is $min\n";	
	$sum += $max - $min;
	echo "Diff is ". ($max - $min) ." and checksum is now $sum.\n";
}

echo "Done, checksum is $sum.\n";

fclose($fh);