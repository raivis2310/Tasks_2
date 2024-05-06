<?php

$workers = [
        [
            "employee" => "John",
            "base pay" => 7.5,
            "hours worked" => 35
        ],
        [
            "employee" => "Jack",
            "base pay" => 8.2,
            "hours worked" => 47
        ],
        [
            "employee" => "Tom",
            "base pay" => 10,
            "hours worked" => 73
        ],
];

$result = "";

for($i = 0; $i < count($workers); $i++) {
    if($workers[$i]["hours worked"] > 60) {
        $result .= "ERROR" . "\n";
    } elseif($workers[$i]["base pay"] < 8) {
        $result .= "ERROR" . "\n";
    } elseif($workers[$i]["hours worked"] > 40) {
        $salary = ($workers[$i]["hours worked"] - 40) * ($workers[$i]["base pay"] * 1.5);
        $finSalary = ($workers[$i]["base pay"] * 40) + $salary; ;
        $result .= $workers[$i]["employee"] . "'s salary is: " . $finSalary . "\n";
    } else {
        $result .= $workers[$i]["employee"] . "'s salary is: " . $workers[$i]["base pay"]*$workers[$i]["hours worked"] . "\n";
    }
};

echo $result;