<?php

$elements = [5, 75, 69, 56.78, "Raivis!"];

function multiplyNumber($number) {
    if (is_int($number)) {
        return $number * 2;
    } else {
        unset($number);
    }
};

for ($i = 0; $i < count($elements); $i++) {
    if(is_int($elements[$i])) {
    echo multiplyNumber($elements[$i]) . "\n";
    }
};