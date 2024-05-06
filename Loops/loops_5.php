<?php
class Piglet {
    private $score;

    public function __construct() {
        $this->score = 0;
    }

    public function play() {
        echo "Welcome to Piglet!\n";

        while (true) {
            $roll = rand(1, 6);
            echo "You rolled a $roll!\n";

            if ($roll == 1) {
                echo "You rolled a 1!\n";
                echo "You got 0 points.\n";
                break;
            } else {
                $this->score += $roll;
                echo "Roll again? ";
                $choice = strtolower(readline());

                if ($choice != 'yes' && $choice != 'y') {
                    echo "You got {$this->score} points.\n";
                    break;
                }
            }
        }
    }
}

// Usage
$game = new Piglet();
$game->play();
