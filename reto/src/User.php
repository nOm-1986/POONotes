<?php

namespace Reto;

abstract class User
{
    protected $name, $last_name;

    public function __construct($name, $last_name)
    {
        $this->name = $name;
        $this->last_name = $last_name;
    }

    abstract public function getInfo();
}