<?php

namespace Models;

require_once 'Animal.php';

class Cat extends Animal
{
  protected static $defaultSound = 'meow';
}