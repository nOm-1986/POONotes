<?php

namespace Reto;

class Category
{
    protected $nameCategory;

    public function __construct($name)
    {
        $this->nameCategory = $name;
    }
}