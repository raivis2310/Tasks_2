<?php

$keypad2 = ["a", "b", "c"];
$keypad3 = ["d", "e", "f"];
$keypad4 = ["g", "h", "i"];
$keypad5 = ["j", "k", "l"];
$keypad6 = ["m", "n", "o"];
$keypad7 = ["p", "q", "r", "s"];
$keypad8 = ["t", "u", "v"];
$keypad9 = ["w", "x", "y", "z"];

$keypadDigits = [];

$string = (string)readline("Input string: ");
$string = strtolower($string);

$newString = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);

for($i = 0; $i < count($newString); $i++) {
    switch ($newString[$i]) {
        case in_array($newString[$i], $keypad2):
            $keypadDigits[] = 2;
            break;
        case in_array($newString[$i], $keypad3):
            $keypadDigits[] = 3;
            break;
        case in_array($newString[$i], $keypad4):
            $keypadDigits[] = 4;
            break;
        case in_array($newString[$i], $keypad5):
            $keypadDigits[] = 5;
            break;
        case in_array($newString[$i], $keypad6):
            $keypadDigits[] = 6;
            break;
        case in_array($newString[$i], $keypad7):
            $keypadDigits[] = 7;
            break;
        case in_array($newString[$i], $keypad8):
            $keypadDigits[] = 8;
            break;
        case in_array($newString[$i], $keypad9):
            $keypadDigits[] = 9;
            break;
    }

}

echo implode(", ", $keypadDigits) . "\n";