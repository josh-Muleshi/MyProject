<?php

abstract final class Animal{
    abstract public function makeSound(): void;
}

final class Dog extends Animal{
    public function makeSound(): void {
        echo "the dog is barking";
    }
}

final class Cat extends Animal{
    public function makeSound(): void {
        echo "the cat is meowing";
    }
}
