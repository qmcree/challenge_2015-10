<?php

require_once 'src/Dog.php';
require_once 'src/Cat.php';

$dog = new \Models\Dog("Santa's Little Helper", rand(1, 5));
$cat = new \Models\Cat("Snowball II", rand(1, 5));

echo sprintf('%s is currently %d years old.', $dog->name, $dog->age) . PHP_EOL;
echo sprintf('%s says %s? Nah, %s says %s! Now %s is %d.', $dog->name, $dog->speak('meow'), $dog->name, $dog->speak(), $dog->name, $dog->age) . PHP_EOL;

echo sprintf("The cat's name is %s.", $cat->name) . PHP_EOL;
$cat->name = 'Garfield';
echo sprintf("The cat's name has been changed to %s. The average length of the cat's name is %g.", $cat->name, $cat->averageNameLength()) . PHP_EOL;
