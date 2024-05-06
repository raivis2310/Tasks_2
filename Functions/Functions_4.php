<?php

$persons = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 50,
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 18,
    ],
    [
        "name" => "Raivis",
        "surname" => "Rusins",
        "age" => 33,
    ],
    [
        "name" => "Karlis",
        "surname" => "Kocins",
        "age" => 16,
    ]
];

function ifEighteen(array $string): string
{
    $result = "";
    for ($i = 0; $i < count($string); $i++) {
        if ($string[$i]["age"] >= 18) {
            $result .= $string[$i]["name"] . " " . $string[$i]["surname"] . " is reached 18 years" . "\n";
        } else {
            $result .= $string[$i]["name"] . " " . $string[$i]["surname"] . " is not reached 18 years" . "\n";
        }
    }
    return $result;
};

echo ifEighteen($persons);