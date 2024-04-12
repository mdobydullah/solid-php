<?php

abstract class Shape
{
    abstract public function area();
}

class Rectangle extends Shape
{
    protected $width;
    protected $height;

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square extends Shape
{
    protected $side;

    public function setSide($side)
    {
        $this->side = $side;
    }

    public function area()
    {
        return $this->side * $this->side;
    }
}

function getArea(Shape $shape)
{
    return $shape->area();
}

// Usage
$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(5);

$square = new Square();
$square->setSide(4);

echo getArea($rectangle); // 20
echo getArea($square); // 16
