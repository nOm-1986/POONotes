<?php
/**
 * Una clase abstracta puede tener métodos abstractos.
 * Un método ABSTRACTO no se define solo se declara.
 */
abstract class Base
{
    public function get()
    {
        // ...
    }
    //Una clase abstracta puede tener métodos  abstractos, solo se definen.
    abstract public function store(); //
}