<?php

interface Flyable
{
    public function fly();
}

class Bird
{
    public function eat()
    {
        return "I am eating!";
    }
}

class Parrot extends Bird implements Flyable
{
    public function fly()
    {
        return "I am flying!";
    }
}

class Penguin extends Bird
{
    // Penguin can't fly so it doesn't implement Flyable
}

function letItFly(Flyable $bird)
{
    return $bird->fly();
}

$bird = new Parrot();
echo letItFly($bird); // Outputs: I am flying!

$penguin = new Penguin();
// echo letItFly($penguin); // This will now give a compile error
