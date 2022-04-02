<?php

abstract class Transport
{
    protected $kindTransport;


    private function getClassName()
    {
        return get_called_class();
    }

    public function ejecutar()
    {
        return "Desde la clase {$this->getClassName()}. - Tipo transporte: {$this->kindTransport}, Combustible: {$this->fuel()}, Velocidad máxima: {$this->speedLimit()} ";
    }

    abstract protected function fuel();
    abstract protected function speedLimit();
}


class Horse extends Transport
{
    public function __construct($name)
    {
        $this->kindTransport = $name;
    }

    protected function fuel()
    {
        return " -- Como caballo como pasto y vegetales -- ";
    }

    public function speedLimit()
    {
        return " -- Velocidad máxima de 80km -- ";
    }
}


class Car extends Transport
{
    public function __construct($n)
    {
        $this->kindTransport = $n;
    }

    protected function fuel()
    {
        return "-- I use fuel --";
    }

    protected function speedLimit()
    {
        return "-- 250km --";
    }
}

$horse = new Horse('Caballo');
echo $horse->ejecutar(). "<br>";

$car = new Car('Ferrari');
echo $car->ejecutar();

