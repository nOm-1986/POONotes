<?php

function greet($data1)
{
    $men = "";
    foreach($data1 as $d){
        $men .= " $d";
    }

    echo $men;
}

/*
function suma_infinita(...$numeros)
{
    $suma = 0;
    foreach($numeros as $numero)
    {
        $suma += $numero;
    }
    echo "La suma es : $suma \n";
}*/