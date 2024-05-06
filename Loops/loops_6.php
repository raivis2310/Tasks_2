<?php

class AsciiFigure {
    const SIZE = 7;
//    const $size = 5;

    public function figure() {
        $size = self::SIZE;

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < ($size - $i - 1) * 2; $j++) {
                echo "/";
            }

            for ($j = 0; $j < $i * 4; $j++) {
                echo "*";
            }

            for ($j = 0; $j < ($size - $i - 1) * 2; $j++) {
                echo "\\";
            }

            echo "\n";
        }
    }
}

$asciiFigure = new AsciiFigure();
$asciiFigure->figure();
