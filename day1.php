<?php

// day 1

require 'main.inc.php';

function process($input) {
	$sum = 0;
	$len = strlen($input);

	for ($i = 0; $i < $len; $i++) {
		$next = ($i + 1) % $len; // list is circular
		if ($input[$i] === $input[$next]) {
			$sum += $input[$i];
		}	
	}

	return $sum;
}

