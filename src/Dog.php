<?php

namespace Models;

require_once 'Animal.php';

class Dog extends Animal
{
  protected static $defaultSound = 'bow-wow';
}