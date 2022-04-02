<?php
//Login es uno solo pero arroja distintos resultados.
abstract class Base
{
    protected $name;

    private function getClassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "Mi nombre es {$this->name} desde la clase {$this->getClassName()}. ";
    }
}

class Admin extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class User extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Guest extends Base
{
    protected $name = 'Invitado';
    
}

$invitado = new Guest();
echo $invitado->login() . "<br>";

$user = new User('Fabian');
echo $user->login() . "<br>";

$admin = new Admin('El admin');
echo $admin->login() . "<br>";