<?php

interface TeamMember
{
    public function work(): string;
}

class Programmer implements TeamMember
{
    public function work(): string
    {
        return 'coding';
    }
}

class Tester implements TeamMember
{
    public function work(): string
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process(TeamMember $member): void
    {
        echo $member->work();
    }
}

// Usage
$projectManagement = new ProjectManagement();

$programmer = new Programmer();
$projectManagement->process($programmer);

$tester = new Tester();
$projectManagement->process($tester);
