<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original:\n " . implode(", ", $numbers) . "\n";

sort($numbers);
echo "Sorted:\n " . implode(", ", $numbers) . "\n";

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original:\n " . implode(", ", $words) . "\n";

sort($words);
echo "Sorted:\n " . implode(", ", $words) . "\n";