<?php

require_once "Person.php";

class Employee extends Person {

    public function __construct(string $name, int $age, private string $jobTitle) {
        parent::__construct($name, $age);
    }

    public function getJobTitle(): string {
        return $this->jobTitle;
    }

    #[\Override]
    function toString(): void
    {
        echo "My name is ". $this->name . " i'm " . $this->age . " and i'm ". $this->jobTitle;
    }
}