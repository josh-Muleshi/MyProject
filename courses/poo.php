<?php

class Animal {
    public function __construct(
        public string $name,
        public string $description,
    ) {}
}

final class Dog extends Animal {
}

final class Cat extends Animal {
    const NAME = "josh";
}

echo Cat::NAME;