<?php

$guns = [
    [
        "name" => "ruger",
        "licence letter" => "AB4783",
        "price" => 539.97
    ],
    [
        "name" => "remington",
        "licence letter" => "KH5672",
        "price" => 389.87
    ],
    [
        "name" => "smith&wesson",
        "licence letter" => "NF6375",
        "price" => 629.97
    ],
    [
        "name" => "glock",
        "licence letter" => "NF6375",
        "price" => 499.86
    ]
];

$person = [
    [
        "name" => "John",
        "valid licences" => ["NF6375"],
        "cash" => 500.25
    ],
    [
        "name" => "Tom",
        "valid licences" => ["NF6375", "KH5672", "AB4783"],
        "cash" => 1000.89
    ],
    [
        "name" => "Ben",
        "valid licences" => ["NF6375"],
        "cash" => 700.35
    ],
    [
        "name" => "Alex",
        "valid licences" => [],
        "cash" => 3000.86
    ],
];
function checking($person, $guns){
    for ($i = 0; $i < count($person); $i++) {
        foreach ($guns as $gun) {
            if (in_array($gun["licence letter"], $person[$i]["valid licences"]) && $person[$i]["cash"] >= $gun["price"]) {
                $person[$i]["can afford"] .= $gun["name"] . " " . "\n";
            }

        }
    }return $person;
    };

$updatePerson = checking($person, $guns);

var_dump($updatePerson);