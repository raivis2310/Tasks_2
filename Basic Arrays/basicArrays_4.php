<?php

$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[] = (rand(1, 100));
}

$array = [30, 12, 17, 47, 64, 86, 31, 3, 2, 7];

for ($i = 0; $i < count($array); $i++) {
    $array[$i] = $numbers[$i];
}

$numbers[count($numbers) - 1] = -7;


echo implode(",", $numbers) . "\n";
echo implode(",", $array) . "\n";