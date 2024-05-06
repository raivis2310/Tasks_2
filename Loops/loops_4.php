<?php

class FizzBuzz {
    public $upperBound;

    public function fizz($upperBound) {
        $result = "";

        for ($i = 1; $i <= $upperBound; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $result .= "FizzBuzz ";
            } else if ($i % 3 == 0) {
                $result .= "Fizz ";
            } else if ($i % 5 == 0) {
                $result .= "Buzz ";
            } else {
                $result .= "$i ";
            }
            if ($i % 20 == 0) {
                $result .= "\n";
            }
        }
        return $result;
    }
}

$fizzBuzz = new FizzBuzz();
$upperBound = (int)readline("Enter a number: ");
$fizzBuzz->upperBound = $upperBound;
echo $fizzBuzz->fizz($upperBound);
