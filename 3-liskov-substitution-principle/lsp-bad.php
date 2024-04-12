<?php

class Rectangle
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

class Square extends Rectangle
{
    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $this->width = $height;
    }
}

function getArea(Rectangle $rectangle)
{
    $rectangle->setWidth(4);
    $rectangle->setHeight(5);

    return $rectangle->area();
}

// Usage
$rectangle = new Rectangle();
$square = new Square();

echo getArea($rectangle); // 20
echo getArea($square); // 25
