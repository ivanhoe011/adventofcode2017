<?php

// day 2

$fh = fopen("day4_input.txt", "r")
		or die("Can't open the input file.");

$sum = 0;

while ($row = fgetcsv($fh, 0, ' ')) {
	print_r($row);

	$duplicates = array_filter(array_count_values($row), function ($val) {
		return ($val > 1);
	});

	print_r($duplicates);

	if ( ! $duplicates) {
		$sum++;
	} else {
		echo "HAS DUPLICATES\n\n-----\n\n";
	}
}

echo "Done, found $sum valid passphrases.\n";

fclose($fh);