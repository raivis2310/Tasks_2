<?php

class NumberSquare {

    public function result() {

        $min = (int)readline("Min?: ");
        $max = (int)readline("Max?: ");
        $numbers = [];
        for ($i = $min; $i <= $max; $i++) {
            $numbers[] = $i;
        }
        for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < count($numbers); $j++) {
                echo $numbers[($i + $j) % count($numbers)] . " ";
            }
            echo "\n";
        }
    }
}

$game = new NumberSquare();
$game->result();