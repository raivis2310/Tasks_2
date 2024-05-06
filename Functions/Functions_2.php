<?php

$firstNumber = (float)readline("Please, enter a number: " . "\n");
$secondNumber = (float)readline("Please, enter a second number: " . "\n");

function multiply(float $firstNumber, float $secondNumber): float
{
    return $firstNumber * $secondNumber;
};

echo "Your result is: " . multiply($firstNumber, $secondNumber) . "\n";