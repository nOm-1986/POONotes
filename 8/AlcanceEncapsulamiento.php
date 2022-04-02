<?php
//Hace referencia al encapsulamiento o al principio de ocultamiento.

class User 
{
/**
 * Public    -> Puedo acceder en cualquier lugar incluso fuera de la clase.
 * Protected -> Puedo acceder desde la clase y los que hereden de ella.
 * Private   -> Solo se puedo acceder desde la misma clase, nisiquiera los hijos que hereden.
 * Puedo crear Constantes, variables o métodos.
 * Cuando declaro public, protected o private lo que estoy garantizando es la integridad de los datos.
*/   

    public const PAGINATE = 25;

    protected $username;

    private function getUsername()
    {
        return $this->username;
    }


}
