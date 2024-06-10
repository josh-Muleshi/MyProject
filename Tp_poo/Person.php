<?php

/**
 * @author joshmuleshi <jmuleshi2@gmail.com>
 */

class Person {
    function __construct(
        protected String $name = "josh",
        protected int $age = 12,
    ) {
    }

    function getName(): string {
        return $this->name;
    }

    function getAge(): int {
        return $this->age;
    }

    function toString(): void
    {
        echo "My name is ". $this->name . " and i'm " . $this->age;
    }
}