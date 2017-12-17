<?php

// day 2

$fh = fopen("day4_input.txt", "r")
		or die("Can't open the input file.");

$sum = 0;

while ($row = fgetcsv($fh, 0, ' ')) {
	//echo implode(' ', $row), "\n";

	$words = [];
	$has_anagrams = false;

	foreach ($row as $phrase) {
		$chars = str_split($phrase);
		sort($chars);
		$fingerprint = implode('', $chars);

		if (isset($words[ $fingerprint ])) {
			echo "Phrase $phrase is an anagram in: '", implode(' ', $row), "'\n";
			$has_anagrams = true;
			break;
		} else {
			$words[$fingerprint] = true;
		}
	}

	if ( ! $has_anagrams) {
		$sum++;
	}
}

echo "Done, found $sum valid passphrases.\n";

fclose($fh);