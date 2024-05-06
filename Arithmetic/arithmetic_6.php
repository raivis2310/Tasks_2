<?php

$lowerBound = 1;
$upperBound = 110;
$result = "";

for($i = $lowerBound; $i <= $upperBound; $i++){
    if ($i % 3 == 0 && $i % 5 == 0){
        $result = $result . "CozaLoza ";
    } else if ($i % 3 == 0 && $i % 7 == 0){
        $result = $result . "CozaWoza ";
    } else if ($i % 3 == 0){
        $result = $result . "Coza ";
    } else if ($i % 5 == 0){
        $result = $result . "Loza ";
    } else if ($i % 7 == 0){
        $result = $result . "Woza ";
    } else {
        $result = $result . "$i ";
    }     if($i % 11 == 0) {
        $result = $result . "\n";
    }
}

echo $result;