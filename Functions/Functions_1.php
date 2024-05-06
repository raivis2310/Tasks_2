<?php

$text = (string)readline("Please write a text: " . "\n");

function plusCodelex(string $string): string
{
    return $string . " codelex" . "\n";
};

echo plusCodelex($text);