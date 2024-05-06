<?php

$nTimes = (int)readline("Input number of times: ");
$result = [];

for ($i = 1; $i < $nTimes + 1; $i++) {
    $result[] = $i * $i;
}

echo implode(" ", $result) . "\n";