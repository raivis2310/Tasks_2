<?php

$number = (int)readline("Input the number: \n");
$newNumber = preg_split('//u', $number, -1, PREG_SPLIT_NO_EMPTY);
$result = 0;

for($i = 0; $i < count($newNumber); $i++){
    $result += $newNumber[$i];
}

echo $result . "\n";