<?php

while ($input = readline('Please enter the puzzle input: ')) {
    $result = process($input);
    echo "Result is: $result\n\n";
}