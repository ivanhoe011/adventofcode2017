<?php

// day 3

require 'main.inc.php';

function process($input) {

	// each level of the spiral level starts with a square of 3,5,7,9,...
	$sqrt = floor(sqrt($input));
	if ( ! ($sqrt & 1)) {
		$sqrt--; // has to be an odd number
	}

	// the length of the one side of the spiral
	$size = $sqrt + 1;

	// this level of spiral has (4 * $size) elements
	// lets find the position of the $input in a side of the spiral
	$offset = ($input - $sqrt * $sqrt) % $size;

	// position relative to the center of the side
	$posX = abs( $offset - $size / 2 );

	// other Manhattan coord is 1/2 of the size of the spiral's branch
	$posY = $size / 2;

	// total distance is the sum of the two coords
	return $posX + $posY;
}