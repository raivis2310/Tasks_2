<?php

$words = ["apple", "table", "building", "computer", "television", "bedroom", "hangman", "book", "ambassador"];
$indexForWords = rand(0, count($words) - 1);
$word = $words[$indexForWords];
$lettersOfWord = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
$playedWord = [];
$misses = [];
$guess = [];
$trys = count($lettersOfWord) + 3;

for ($i = 0; $i < count($lettersOfWord); $i++) {
    $playedWord[$i] = "_";
}

for ($i = 0; $i < $trys; $i++) {
    $correctGuess = false;

    echo "<================>\n";
    echo "Guess the word!\n";
    echo "Word: " . implode(" ", $playedWord) . "\n";
    echo "Misses: " . implode(" ", $misses) . "\n";
    echo "Guess: " . implode(" ", $guess) . "\n";
    echo "You have " . ($trys - $i) . " tries left!\n";

    $playersLetter = readline("Please, enter a letter: ");

    if (strlen($playersLetter) != 1 || !ctype_alpha($playersLetter)) {
        echo "ERROR! You are allowed to choose only one letter!\n";
        continue;
    }

    for ($j = 0; $j < count($lettersOfWord); $j++) {
        if ($lettersOfWord[$j] === $playersLetter) {
            $playedWord[$j] = $playersLetter;
            $correctGuess = true;
        }
    }

    if ($correctGuess) {
        echo "Correct guess!\n";
        echo "Word: " . implode(" ", $playedWord) . "\n";
    } else {
        $misses[] = $playersLetter;
    }

    if ($playedWord === $lettersOfWord) {
        echo "You win!\n";
        exit;
    }
}

echo "You lose! The word was: " . $word . "\n";