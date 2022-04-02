<?php

/**
 * Herencia un hijo hereda de su padre:
 * 
 * Si quiero evitar que alguien me sobreescriba el método utilizo FINAL.
 * Una clase final No se puede heredar pero si se puede Instanciar.
**/  
class User
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    /* Si coloco la palabra reservada final hay que el métodono no lo pueda sobreescribir
    en el hijo. Específicamente lo estoy obligando a utilizar solo este.
    final public function getName()
    {
        return $this->name;
    }
    */

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "El nombre es: {$this->name}";
    }
}

class Admin extends User
{
    //
}

$admin = new Admin('Fabian');
echo $admin;