<?php

interface Workable
{
    public function code();

    public function test();
}

class Programmer implements Workable
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

class Tester implements Workable
{
    public function code()
    {
        return 'Opps! I can not code';
    }

    public function test()
    {
        return 'Testing on test server';
    }
}

function processCode(Workable $member): void
{
    echo $member->code();
}

// Usage
$programmer = new Programmer();
$tester = new Tester();

processCode($programmer);
processCode($tester);
