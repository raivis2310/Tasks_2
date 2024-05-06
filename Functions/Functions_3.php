<?php

$person = [

    "name" => "John",
    "surname" => "Doe",
    "age" => 50,
];

function ifEighteen($string)
{
    if ($string["age"] >= 18) {
        return $string["name"] . " " . $string["surname"] . " is reached 18 years" . "\n";
    } else {
        return $string["name"] . " " . $string["surname"] . " is not reached 18 years" . "\n";
    }
};

echo ifEighteen($person);