<?php

$firstWord = (string)readline("Enter first word: ") . "\n";
$secondWord = (string)readline("Enter second word: ") . "\n";

$firstWord = preg_replace('/\s+/', '', $firstWord);
$secondWord = preg_replace('/\s+/', '', $secondWord);

$countDots = 30 - (strlen($firstWord) + strlen($secondWord));

$string = "";

//for ($i = 0; $i < $countDots; $i++) {
//    $string .= ".";
//}

//echo $firstWord . $string . $secondWord . "\n";
echo $firstWord;
for ($i = 0; $i < $countDots; $i++) {
    echo ".";
}
echo $secondWord . "\n";