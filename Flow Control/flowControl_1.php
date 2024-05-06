<?php

$numbers = [];

$firstNumber = (float)readline("Input the 1st number: \n");
$secondNumber = (float)readline("Input the 1st number: \n");
$thirdNumber = (float)readline("Input the 1st number: \n");

$numbers[] = $firstNumber;
$numbers[] = $secondNumber;
$numbers[] = $thirdNumber;

$largestNumber = max($numbers);

echo "The largest number is $largestNumber\n";