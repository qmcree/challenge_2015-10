<?php

namespace Models;

abstract class Animal
{
  const ERROR_UNDEFINED_PROP = 'Property is not defined.';

  protected $name;
  protected $pastNames = [];
  protected $age;
  protected $timesSpoken = 0;
  protected static $defaultSound;

  final public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = (int)$age;
  }

  final public function speak($sound = '')
  {
    if (empty(static::$defaultSound) && empty($sound))
      throw new \ErrorException("The animal's sound is not defined.");

    if (++$this->timesSpoken % 2 === 0)
      $this->age++;

    return $sound ?: static::$defaultSound;
  }

  final public function averageNameLength()
  {
    $names = $this->pastNames;
    $names[] = $this->name;

    $lengths = [];

    foreach ($names as $name)
    {
      $lengths[] = strlen($name);
    }

    return array_sum($lengths) / sizeof($lengths);
  }

  final public function __get($property)
  {
    if (!isset($this->$property))
      throw new \InvalidArgumentException(self::ERROR_UNDEFINED_PROP);

    return $this->$property;
  }

  final public function __set($property, $value)
  {
    if (!isset($this->$property))
      throw new \InvalidArgumentException(self::ERROR_UNDEFINED_PROP);

    if ($property === 'name')
      $this->pastNames[] = $this->name;

    $this->$property = $value;
  }
}