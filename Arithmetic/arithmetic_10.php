<?php

class Geometry
{
    public $radius;

    public function circleArea($radius)
    {
        $this->radius = $radius;
        if ($this->radius < 0) {
            return "ERROR!";
        }
        return $area = M_PI * $this->radius * 2;
    }

    public $rectangleLength;
    public $rectangleWidth;

    public function rectangleArea($rectangleLength, $rectangleWidth)
    {
        $this->rectangleLength = $rectangleLength;
        $this->rectangleWidth = $rectangleWidth;
        if (($this->rectangleLength || $this->rectangleWidth) < 0) {
            return "ERROR!";
        }
        return $area2 = $this->rectangleLength * $this->rectangleWidth;
    }

    public $trianglesBase;
    public $trianglesHeight;

    public function trianglesArea($trianglesBase, $trianglesHeight)
    {
        $this->trianglesBase = $trianglesBase;
        $this->trianglesHeight = $trianglesHeight;
        if (($this->trianglesBase || $this->trianglesHeight) < 0) {
            return "ERROR!";
        }
        return $area3 = $this->trianglesBase * $this->trianglesHeight * 0.5;
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$chooseArea = (int)readline("Enter your choice (1-4) :\n ");

if ($chooseArea == 1) {
    $resultCircle = (float)readline("Enter the radius of a Circle: ");
    $circle = new Geometry();
    echo $circle->circleArea($resultCircle) . "\n";
}

if ($chooseArea == 2) {
    $resultLength = (float)readline("Enter the Rectangle length: ");
    $resultWidth = (float)readline("Enter the Rectangle width: ");
    $rectangle = new Geometry();
    echo $rectangle->rectangleArea($resultLength, $resultWidth) . "\n";
}

if ($chooseArea == 3) {
    $resultBase = (float)readline("Enter the base length of a Triangle: ");
    $resultHeight = (float)readline("Enter the height of a Triangle: ");
    $triangle = new Geometry();
    echo $triangle->trianglesArea($resultBase, $resultHeight) . "\n";
}

if ($chooseArea == 4) {
    exit("Bye!" . "\n");
}

if ($chooseArea > 4 || $chooseArea < 0) {
    exit("ERROR!" . "\n");
}