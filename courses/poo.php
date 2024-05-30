<?php

class Person {
    public int $id;
}

$a = new Person();
$b = $a;
$a->id = 20;

echo spl_object_id($a);
echo "\n";
echo spl_object_id($b);
echo "\n";
echo $b->id;
echo "\n";