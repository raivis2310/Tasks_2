<?php

class RollTwoDice
{
    public function getScore()
    {
        $desiredSum = strtolower((int)readline("Desired sum: "));
        $roll1 = rand(1, 6);
        $roll2 = rand(1, 6);
        $result = $roll1 + $roll2;

        if ($desiredSum < 1 || $desiredSum > 12) {
            echo "ERROR! Invalid input! \n";
            exit;
        }

        while ($result != $desiredSum) {
            echo $roll1 . " and " . $roll2 . " = " . $result . "\n";
            $roll1 = rand(1, 6);
            $roll2 = rand(1, 6);
            $result = $roll1 + $roll2;

        }
        echo $roll1 . " and " . $roll2 . " = " . $result . "\n";


    }
}

$game = new RollTwoDice();
$game->getScore();