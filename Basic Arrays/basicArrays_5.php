<?php

class TicTacToe {
    public $gameField;
    public $player;

    public function __construct() {
        $this->gameField = [[' ', ' ', ' '], [' ', ' ', ' '], [' ', ' ', ' ']];
        $this->player = 'X';
    }

    public function displayBoard() {
        foreach ($this->gameField as $row) {
            echo implode(' | ', $row) . PHP_EOL;
            echo "---------" . PHP_EOL;
        }
    }

    public function makeMove($row, $col) {
        if ($row < 0 || $row > 2 || $col < 0 || $col > 2) {
            return false;
        }

        if ($this->gameField[$row][$col] == ' ') {
            $this->gameField[$row][$col] = $this->player;
            return true;
        }

        return false;
    }

    public function switchPlayer() {
        $this->player = ($this->player == 'X') ? 'O' : 'X';
    }

    public function checkWinner() {
        for ($i = 0; $i < 3; $i++) {
            if ($this->gameField[$i][0] != ' ' && $this->gameField[$i][0] == $this->gameField[$i][1] && $this->gameField[$i][0] == $this->gameField[$i][2]) {
                return true;
            }
        }

        for ($j = 0; $j < 3; $j++) {
            if ($this->gameField[0][$j] != ' ' && $this->gameField[0][$j] == $this->gameField[1][$j] && $this->gameField[0][$j] == $this->gameField[2][$j]) {
                return true;
            }
        }

        if ($this->gameField[0][0] != ' ' && $this->gameField[0][0] == $this->gameField[1][1] && $this->gameField[0][0] == $this->gameField[2][2]) {
            return true;
        }
        if ($this->gameField[0][2] != ' ' && $this->gameField[0][2] == $this->gameField[1][1] && $this->gameField[0][2] == $this->gameField[2][0]) {
            return true;
        }

        return false;
    }

    public function checkTie() {
        foreach ($this->gameField as $row) {
            foreach ($row as $cell) {
                if ($cell == ' ') {
                    return false;
                }
            }
        }
        return true;
    }
}

$game = new TicTacToe();

while (true) {
    $game->displayBoard();
    echo "Player {$game->player}, choose your location (row, column): ";
    fscanf(STDIN, "(%d, %d)\n", $row, $col);
    $row--;
    $col--;

    if ($game->makeMove($row, $col)) {
        if ($game->checkWinner()) {
            $game->displayBoard();
            echo "Player {$game->player} wins!\n";
            break;
        }
        if ($game->checkTie()) {
            $game->displayBoard();
            echo "The game is a tie.\n";
            break;
        }
        $game->switchPlayer();
    } else {
        echo "Invalid move. Try again.\n";
    }
}
