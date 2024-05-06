<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$numberToSearch = (int)readline("Enter the value to search for: ");

if (in_array($numberToSearch, $numbers)) {
    echo "Array includes this number!\n";
} else {
    echo "Array doesn't include this number!\n";
}