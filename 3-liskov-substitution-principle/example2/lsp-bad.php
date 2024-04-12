<?php

class Bird
{
    public function eat()
    {
        return "I am eating!";
    }

    public function fly()
    {
        return "I am flying!";
    }
}

class Parrot extends Bird
{
    // Parrot can eat and fly
}

class Penguin extends Bird
{
    // Penguin can eat but can't fly
    public function fly()
    {
        throw new Exception("I can't fly!");
    }
}

function letItFly(Bird $bird)
{
    return $bird->fly();
}

$bird = new Parrot();
echo letItFly($bird); // Outputs: I am flying!

$penguin = new Penguin();
echo letItFly($penguin); // Throws an exception: I can't fly!
