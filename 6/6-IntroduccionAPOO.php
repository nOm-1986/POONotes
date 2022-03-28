<?php
/**
 * Introducción a Clases y Objeto
 * POO: Es una técnica. 
 * Clases: Es el molde, a partir de ese molde creo los objetos.
 */

class Person
{
    public function greet()
    {
        return "Hola {$this->name}";
    }
}

class User
{
    public $type;
}

class Admin extends Person
{
    public $name = 'Administrador';
}

$user = new User();
$user->type = new Admin();
echo $user->type->greet();


