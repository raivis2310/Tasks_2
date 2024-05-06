<?php

$fruits = [
    [
        "fruit" => "watermelons",
        "weight" => 10800,
    ],
    [
        "fruit" => "bananas",
        "weight" => 1320,
    ],
    [
        "fruit" => "strawberries",
        "weight" => 7230,
    ],
    [
        "fruit" => "mangoes",
        "weight" => 13700,
    ],
];

function fruits(array $array): array {
    for($i = 0; $i < count($array); $i++) {
        if($array[$i]["weight"] > 10000) {
            $array[$i]["over_10000"] = true;
        } else {
            $array[$i]["over_10000"] = false;
        }
    }return $array;
};

//var_dump(fruits($fruits));

$shippingCosts = [
    "less10kg" => 5,
    "over10kg" => 10
];

$fruits = fruits($fruits);

foreach($fruits as $fruit) {
    if ($fruit["over_10000"]) {
        echo $fruit["fruit"] . " shipping costs " . $shippingCosts["over10kg"] . "$\n";
    } else {
        echo $fruit["fruit"] . " shipping costs " . $shippingCosts["less10kg"] . "$\n";
    }
};