<?php

namespace Tests;

require_once __DIR__ . '/../src/Dog.php';

use Models\Dog;

class DogTest extends \PHPUnit_Framework_TestCase
{
  public function testAge()
  {
    $dog = new Dog('Bowser', 7);
    $dog->speak();
    $dog->speak();
    $this->assertEquals($dog->age, 8);
  }

  public function testAverageNameLength()
  {
    $dog = new Dog('Peter', 4); // 5
    $dog->name = 'Mr. Bigglesworth II'; // 19
    $dog->name = 'Joe'; // 3
    $this->assertEquals($dog->averageNameLength(), 9);
  }
}
