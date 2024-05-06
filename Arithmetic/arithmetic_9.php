<?php

$weightInKg = 85;
$heightInM = 1.85;

$weight = $weightInKg * 2.2;
$height = $heightInM * 39.37;

$result = ($weight * 703) / ($height * $height);

if($result < 18.5){
    echo "You have underweight" . "\n";
}elseif($result > 18.5 && $result < 25){
    echo "You have optimal weight" . "\n";
}else{
    echo "You have overweight" . "\n";
};