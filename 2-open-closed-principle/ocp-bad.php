<?php

class Programmer
{
    public function code(): string
    {
        return 'coding';
    }
}

class Tester
{
    public function test(): string
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process($member): void
    {
        if ($member instanceof Programmer) {
            echo $member->code();
        } elseif ($member instanceof Tester) {
            echo $member->test();
        }else {
            echo 'Invalid input member';
        }
    }
}

// Usage
$projectManagement = new ProjectManagement();

$programmer = new Programmer();
$projectManagement->process($programmer);

$tester = new Tester();
$projectManagement->process($tester);
