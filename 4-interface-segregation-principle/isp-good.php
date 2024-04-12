<?php

interface Codeable
{
    public function code();
}

interface Testable
{
    public function test();
}

class Programmer implements Codeable, Testable
{
    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'Testing on localhost';
    }
}

class Tester implements Testable
{
    public function test()
    {
        return 'Testing on test server';
    }
}

function processCode(Codeable $member): void
{
    echo $member->code();
}

function processTest(Testable $member): void
{
    echo $member->test();
}

// Usage
$programmer = new Programmer();
$tester = new Tester();

processCode($programmer); // Outputs: coding
processTest($programmer); // Outputs: Testing on localhost
// processCode($tester); // This will now give a compile error
processTest($tester); // Outputs: Testing on test server
